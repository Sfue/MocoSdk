<?php

namespace Sfue\MocoSdk\Node;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class AbstractNodeCollection
 * @package Sfue\MocoSdk\Node
 */
abstract class AbstractNodeCollection extends ArrayCollection implements NodeCollectionInterface
{
    /** @var array */
    protected $properties = [];

    /** @var array */
    protected $objectMapping = [];

    /**
     * InvoiceCollection constructor.
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $nodeClass = $this::NODE_CLASS;
        foreach($data as $item) {
            $this->add(new $nodeClass($item));
        }
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
