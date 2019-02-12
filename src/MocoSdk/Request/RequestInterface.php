<?php

namespace MocoSdk\Request;

/**
 * Interface RequestInterface
 * @package MocoSdk\Request
 */
interface RequestInterface
{
    /** @var string */
    const ENDPOINT = '';

    /** @var string */
    const RESPONSE_CLASS = '';

    /**
     * @return string
     */
    public function getEndpoint(): string;

    /**
     * @return string
     */
    public function getResponseClass(): string;

    /**
     * @return string
     */
    public function getMethod(): string;

    /**
     * @return bool
     */
    public function returnsFile(): bool;

    /**
     * @return array
     */
    public function getOptions(): array;
}
