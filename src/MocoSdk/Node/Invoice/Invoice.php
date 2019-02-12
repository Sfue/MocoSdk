<?php

namespace MocoSdk\Node\Invoice;

use MocoSdk\Node\AbstractNodeObject;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Invoice
 * @package MocoSdk\Node\Invoice
 */
class Invoice extends AbstractNodeObject
{
    /** @var array */
    protected $objectMapping = [
        'date' => '\DateTime',
        'due_date' => '\DateTime',
        'created_on' => '\DateTime',
        'updated_on' => '\DateTime',
        'items' => '\MocoSdk\Node\Invoice\Data\Item',
        'payments' => '\MocoSdk\Node\Invoice\Data\Invoice\Payment',
        'remindes' => '\MocoSdk\Node\Invoice\Data\Invoice\Reminder'
    ];

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->getProperty('id');
    }

    /**
     * @return int
     */
    public function getCustomerId(): int
    {
        return $this->getProperty('customer_id');
    }

    /**
     * @return int
     */
    public function getProjectId(): int
    {
        return $this->getProperty('project_id');
    }

    /**
     * @return string
     */
    public function getIdentifier(): string
    {
        return $this->getProperty('identifier');
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->getProperty('date');
    }

    /**
     * @return \DateTime
     */
    public function getDueDate(): \DateTime
    {
        return $this->getProperty('due_date');
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->getProperty('status');
    }

    /**
     * @return bool
     */
    public function getReversal(): bool
    {
        return $this->getProperty('reversal');
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->getProperty('title');
    }

    /**
     * @return string
     */
    public function getRecipientAddress(): string
    {
        return $this->getProperty('recipient_address');
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->getProperty('currency');
    }

    /**
     * @return float
     */
    public function getNetTotal(): float
    {
        return $this->getProperty('net_total');
    }

    /**
     * @return float
     */
    public function getTax(): float
    {
        return $this->getProperty('tax');
    }

    /**
     * @return float
     */
    public function getGrossTotal(): float
    {
        return $this->getProperty('gross_total');
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

    /**
     * @return string|null
     */
    public function getDebitNumber(): ?string
    {
        return $this->getProperty('debit_number');
    }

    /**
     * @return string|null
     */
    public function getCreditNumber(): ?string
    {
        return $this->getProperty('credit_number');
    }

    /**
     * @return bool
     */
    public function isLocked(): bool
    {
        return $this->getProperty('locked');
    }

    /**
     * @return string|null
     */
    public function getSalutation(): ?string
    {
        return $this->getProperty('salutation');
    }

    /**
     * @return string|null
     */
    public function getFooter(): ?string
    {
        return $this->getProperty('footer');
    }

    /**
     * @return ArrayCollection
     */
    public function getItems(): ArrayCollection
    {
        return $this->getProperty('items');
    }

    /**
     * @return ArrayCollection
     */
    public function getPayments(): ArrayCollection
    {
        return $this->getProperty('payments');
    }

    /**
     * @return ArrayCollection
     */
    public function getReminders(): ArrayCollection
    {
        return $this->getProperty('reminders');
    }
}