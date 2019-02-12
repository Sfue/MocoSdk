<?php

namespace MocoSdk\Request;

/**
 * Class AbstractRequest
 * @package MocoSdk\Request
 */
abstract class AbstractRequest implements RequestInterface
{
    /** @var string */
    protected $method = 'GET';

    /** @var array */
    protected $data = [];

    /** @var array */
    protected $queryParameter = [];

    // @todo need refactoring
    /** @var bool */
    protected $returnsFile = false;

    /** @var array */
    protected $options = [];

    /**
     * AbstractRequest constructor.
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        $this->options = $options;
    }

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

    /**
     * @return array
     */
    public function getOptions(): array
    {
        return $this->options;
    }
}
