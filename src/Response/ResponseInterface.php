<?php

namespace Sfue\MocoSdk\Response;

use Sfue\MocoSdk\Node\NodeCollectionInterface;
use Sfue\MocoSdk\Node\NodeInterface;

/**
 * Class ResponseInterface
 * @package Sfue\MocoSdk\Response
 */
interface ResponseInterface
{
    /** @var string */
    const NODE_CLASS = '';

    /**
     * @return NodeInterface|NodeCollectionInterface|null
     */
    public function getData();

    /**
     * @return int
     */
    public function getStatusCode(): int;

}
