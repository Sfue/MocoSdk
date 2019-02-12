<?php

namespace MocoSdk\Node\Invoice\Data;

use MocoSdk\Node\Data\AbstractData;

/**
 * Class Item
 * @package MocoSdk\Node\Invoice\Data
 */
class Item extends AbstractData
{
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->getProperty('id');
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->getProperty('type');
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->getProperty('title');
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->getProperty('description');
    }

    /**
     * @return float
     */
    public function getQuantity(): float
    {
        return $this->getProperty('quantity');
    }

    /**
     * @return string
     */
    public function getUnit(): string
    {
        return $this->getProperty('unit');
    }

    /**
     * @return float
     */
    public function getUnitPrice(): float
    {
        return $this->getProperty('unit_price');
    }

    /**
     * @return float
     */
    public function getNetTotal(): float
    {
        return $this->getProperty('net_total');
    }
}

