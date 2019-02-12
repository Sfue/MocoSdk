<?php

namespace Sfue\MocoSdk\Response;


use Sfue\MocoSdk\Node\NodeCollectionInterface;

/**
 * Class ResponseCollectionInterface
 * @package Sfue\MocoSdk\Response
 */
interface ResponseCollectionInterface
{
    /**
     * @return NodeCollectionInterface|null
     */
    public function getData(): ?NodeCollectionInterface;
}
