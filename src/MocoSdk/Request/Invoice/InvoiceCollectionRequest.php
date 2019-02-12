<?php

namespace MocoSdk\Request\Invoice;

use MocoSdk\Request\AbstractRequest;

/**
 * Class InvoiceCollectionRequest
 * @package MocoSdk\Request\Invoice
 */
class InvoiceCollectionRequest extends AbstractRequest
{
    /** @var string */
    const ENDPOINT = 'invoices';

    /** @var string */
    const RESPONSE_CLASS = '\MocoSdk\Response\Invoice\InvoiceCollectionResponse';
}
