<?php

namespace MocoSdk\Node\Invoice;

use MocoSdk\Node\AbstractNodeObject;

/**
 * Class InvoiceTimesheet
 * @package MocoSdk\Node\Invoice
 */
class InvoiceTimesheet extends AbstractNodeObject
{
    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->getProperty('content');
    }
}