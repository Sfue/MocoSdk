<?php

namespace Sfue\MocoSdk\Node;

/**
 * Interface NodeInterface
 * @package Sfue\MocoSdk\Node
 */
interface NodeInterface
{
    /**
     * @param $name
     * @param null $default
     */
    public function getProperty(string $name, $default = null);
}
