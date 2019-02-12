<?php

namespace Sfue\MocoSdk\Node\Invoice;

use Sfue\MocoSdk\Node\AbstractNodeObject;

/**
 * Class InvoiceTimesheet
 * @package Sfue\MocoSdk\Node\Invoice
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