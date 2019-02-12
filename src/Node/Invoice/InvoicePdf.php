<?php

namespace Sfue\MocoSdk\Node\Invoice;

use Sfue\MocoSdk\Node\AbstractNodeObject;

/**
 * Class InvoicePdf
 * @package Sfue\MocoSdk\Node\Invoice
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