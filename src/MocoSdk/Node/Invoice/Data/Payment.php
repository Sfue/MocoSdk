<?php

namespace MocoSdk\Node\Invoice\Data;

use MocoSdk\Node\Data\AbstractData;

/**
 * Class Payment
 * @package MocoSdk\Node\Invoice\Data
 */
class Payment extends AbstractData
{
    /** @var array */
    protected $objectMapping = [
        'date' => '\DateTime',
        'created_on' => '\DateTime',
        'updated_on' => '\DateTime',
    ];

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->getProperty('id');
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->getProperty('date');
    }

    /**
     * @return float
     */
    public function getPaidTotal(): float
    {
        return $this->getProperty('paid_total');
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->getProperty('currency');
    }

    /**
     * @return \DateTime
     */
    public function getCreatedOn(): \DateTime
    {
        return $this->getProperty('created_on');
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedOn(): \DateTime
    {
        return $this->getProperty('updated_on');
    }
}
