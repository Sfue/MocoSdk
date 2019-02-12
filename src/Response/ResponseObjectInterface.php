<?php

namespace Sfue\MocoSdk\Response;


use Sfue\MocoSdk\Node\NodeInterface;

/**
 * Class ResponseCollectionInterface
 * @package Sfue\MocoSdk\Response
 */
interface ResponseObjectInterface
{
    /**
     * @return NodeInterface|null
     */
    public function getData(): ?NodeInterface;

    /**
     * @return bool
     */
    public function found(): bool;
}
