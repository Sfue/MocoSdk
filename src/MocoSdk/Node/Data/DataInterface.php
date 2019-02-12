<?php

namespace MocoSdk\Node\Data;

/**
 * Interface DataInterface
 * @package MocoSdk\Node\Data
 */
interface DataInterface
{
    /**
     * @param $name
     * @param null $default
     */
    public function getProperty(string $name, $default = null);
}
