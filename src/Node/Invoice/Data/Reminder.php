<?php

namespace Sfue\MocoSdk\Node\Invoice\Data;

use Sfue\MocoSdk\Node\Data\AbstractData;

/**
 * Class Reminder
 * @package Sfue\MocoSdk\Node\Invoice\Data
 */
class Reminder extends AbstractData
{
    /** @var array */
    protected $objectMapping = [
        'date' => '\DateTime',
        'due_date' => '\DateTime',
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
     * @return float
     */
    public function getFee(): float
    {
        return $this->getProperty('fee');
    }


    /**
     * @return string
     */
    public function getSalutation(): string
    {
        return $this->getProperty('salutation');
    }

    /**
     * @return string
     */
    public function getFooter(): string
    {
        return $this->getProperty('footer');
    }
}
