<?php

namespace MocoSdk\Response;


use MocoSdk\Node\NodeCollectionInterface;

/**
 * Class ResponseCollectionInterface
 * @package MocoSdk\Response
 */
interface ResponseCollectionInterface
{
    /**
     * @return NodeCollectionInterface|null
     */
    public function getData(): ?NodeCollectionInterface;
}
