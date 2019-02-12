<?php

namespace MocoSdk\Response;


use MocoSdk\Node\NodeInterface;

/**
 * Class ResponseCollectionInterface
 * @package MocoSdk\Response
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
