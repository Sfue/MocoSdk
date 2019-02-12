<?php

namespace Sfue\MocoSdk\Request\Invoice;

/**
 * Class InvoicePdfRequest
 * @package Sfue\MocoSdk\Request\Invoice
 */
class InvoicePdfRequest extends InvoiceRequest
{
    /** @var string */
    const ENDPOINT = 'invoices/%s.pdf';

    /** @var string */
    const RESPONSE_CLASS = '\Sfue\MocoSdk\Response\Invoice\InvoicePdfResponse';

    /** @var bool */
    protected $returnsFile = true;
}
