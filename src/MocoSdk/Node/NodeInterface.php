<?php

namespace MocoSdk\Node;

/**
 * Interface NodeInterface
 * @package MocoSdk\Node
 */
interface NodeInterface
{
    /**
     * @param $name
     * @param null $default
     */
    public function getProperty(string $name, $default = null);
}
