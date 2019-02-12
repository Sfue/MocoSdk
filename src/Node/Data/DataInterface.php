<?php

namespace Sfue\MocoSdk\Node\Data;

/**
 * Interface DataInterface
 * @package Sfue\MocoSdk\Node\Data
 */
interface DataInterface
{
    /**
     * @param $name
     * @param null $default
     */
    public function getProperty(string $name, $default = null);
}
