<?php

namespace Sfue\MocoSdk\Response;

use Sfue\MocoSdk\Node\NodeInterface;

/**
 * Class AbstractResponse
 * @package Sfue\MocoSdk\Response
 */
abstract class AbstractResponse implements ResponseInterface, ResponseObjectInterface
{
    /** @var NodeInterface|null */
    protected $data;

    /** @var int */
    protected $statusCode;

    /**
     * AbstractResponse constructor.
     * @param array $data
     * @param int $statusCode
     */
    public function __construct(array $data, int $statusCode)
    {
        $this->statusCode = $statusCode;

        if($this->found()) {
            $this->handleData($data);
        }
    }

    /**
     * @return NodeInterface|null
     */
    public function getData(): ?NodeInterface
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
