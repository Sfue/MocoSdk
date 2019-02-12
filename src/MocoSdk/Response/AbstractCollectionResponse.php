<?php

namespace MocoSdk\Response;

use MocoSdk\Node\NodeCollectionInterface;

/**
 * Class AbstractCollectionResponse
 * @package MocoSdk\Response
 */
abstract class AbstractCollectionResponse implements ResponseInterface, ResponseCollectionInterface
{
    /** @var NodeCollectionInterface|null */
    protected $data;

    /** @var int */
    protected $statusCode;

    /**
     * AbstractResponse constructor.
     * @param array $data
     */
    public function __construct(array $data, int $statusCode)
    {
        $this->handleData($data);

        $this->statusCode = $statusCode;

        if($this->found()) {
            $this->handleData($data);
        }
    }

    /**
     * @return ResponseCollectionInterface|null
     */
    public function getData(): ?NodeCollectionInterface
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    protected function handleData(array $data)
    {
        $className = $this::NODE_CLASS;
        $this->data = new $className($data);
    }

    /**
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    /**
     * @return bool
     */
    public function found(): bool
    {
        if($this->statusCode == 404) {
            return false;
        }

        return true;
    }
}
