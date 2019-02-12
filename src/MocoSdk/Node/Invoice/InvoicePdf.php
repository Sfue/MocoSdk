<?php

namespace MocoSdk\Node\Invoice;

use MocoSdk\Node\AbstractNodeObject;

/**
 * Class InvoicePdf
 * @package MocoSdk\Node\Invoice
 */
class InvoicePdf extends AbstractNodeObject
{
    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->getProperty('content');
    }
}