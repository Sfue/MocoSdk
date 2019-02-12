<?php

namespace MocoSdk\Request;

/**
 * Class AbstractRequest
 * @package MocoSdk\Request
 */
abstract class AbstractCollectionRequest extends AbstractRequest
{
    // @todo need refactoring
    /** @var bool */
    protected $returnsFile = false;

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return \strtolower($this->method);
    }

    /**
     * @return string
     */
    public function getEndpoint(): string
    {
        return $this::ENDPOINT;
    }

    /**
     * @return string
     */
    public function getResponseClass(): string
    {
        return $this::RESPONSE_CLASS;
    }

    /**
     * @return bool
     */
    public function returnsFile(): bool
    {
        return $this->returnsFile;
    }
}
