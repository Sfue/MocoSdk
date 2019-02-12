<?php

namespace MocoSdk\Request\Invoice;

/**
 * Class InvoicePdfRequest
 * @package MocoSdk\Request\Invoice
 */
class InvoicePdfRequest extends InvoiceRequest
{
    /** @var string */
    const ENDPOINT = 'invoices/%s.pdf';

    /** @var string */
    const RESPONSE_CLASS = '\MocoSdk\Response\Invoice\InvoicePdfResponse';

    /** @var bool */
    protected $returnsFile = true;
}
