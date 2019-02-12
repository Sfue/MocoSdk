<?php

namespace MocoSdk\Node\Data;

/**
 * Class AbstractData
 * @package MocoSdk\Node\Data
 */
abstract class AbstractData implements DataInterface
{
    /** @var array */
    protected $properties = [];

    /** @var array */
    protected $objectMapping = [];

    /**
     * NodeObject constructor.
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $this->mapDataToObject($data);
    }

    /**
     * @param $name
     * @param null $default
     * @return mixed|null
     */
    public function getProperty(string $name, $default = null)
    {
        if(isset($this->properties[$name])) {
            return $this->properties[$name];
        }

        return $default;
    }

    /**
     * @param array $data
     */
    protected function mapDataToObject(array $data)
    {
        foreach($data as $k => $v) {
            if(isset($this->objectMapping[$k])) {
                $this->properties[$k] = new $this->objectMapping[$k]($v);
            } else {
                $this->properties[$k] = $v;
            }
        }
    }
}
