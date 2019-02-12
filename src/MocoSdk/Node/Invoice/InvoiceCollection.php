<?php

namespace MocoSdk\Node\Invoice;

use MocoSdk\Node\AbstractNodeCollection;

/**
 * Class InvoiceCollection
 * @package MocoSdk\Node\Invoice
 */
class InvoiceCollection extends AbstractNodeCollection
{
    /** @var string */
    const NODE_CLASS = '\MocoSdk\Node\Invoice\Invoice';

    /**
     * @return float
     */
    public function getNetTotal(): float
    {
        $total = 0.0;

        /** @var Invoice $invoice */
        foreach($this->getValues() as $invoice) {
            $total += $invoice->getNetTotal();
        }

        return $total;
    }

    /**
     * @return float
     */
    public function getGrossTotal(): float
    {
        $total = 0.0;

        /** @var Invoice $invoice */
        foreach($this->getValues() as $invoice) {
            $total += $invoice->getGrossTotal();
        }

        return $total;
    }
}
