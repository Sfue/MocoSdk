<?php

namespace MocoSdk\Node;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class AbstractNodeObject
 * @package MocoSdk\Node
 */
abstract class AbstractNodeObject implements NodeInterface
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
                if(\is_array($v)) {
                    $this->properties[$k] = new ArrayCollection();
                    foreach($v as $i) {
                        $this->properties[$k]->add(new $this->objectMapping[$k]($i));
                    }
                } else {
                    $this->properties[$k] = new $this->objectMapping[$k]($v);
                }
            } else {
                if(\is_array($v)) {
                    $this->properties[$k] = new ArrayCollection($v);
                } else {
                    $this->properties[$k] = $v;
                }
            }
        }
    }
}
