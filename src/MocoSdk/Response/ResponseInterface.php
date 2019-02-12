<?php

namespace MocoSdk\Response;

use MocoSdk\Node\NodeCollectionInterface;
use MocoSdk\Node\NodeInterface;

/**
 * Class ResponseInterface
 * @package MocoSdk\Response
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
