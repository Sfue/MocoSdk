<?php

namespace Sfue\MocoSdk\Request\Invoice;

use Sfue\MocoSdk\Request\AbstractRequest;

/**
 * Class InvoiceCollectionRequest
 * @package Sfue\MocoSdk\Request\Invoice
 */
class InvoiceCollectionRequest extends AbstractRequest
{
    /** @var string */
    const ENDPOINT = 'invoices';

    /** @var string */
    const RESPONSE_CLASS = '\Sfue\MocoSdk\Response\Invoice\InvoiceCollectionResponse';
}
