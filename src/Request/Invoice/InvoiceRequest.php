<?php

namespace Sfue\MocoSdk\Request\Invoice;

use Sfue\MocoSdk\Request\AbstractRequest;

/**
 * Class InvoiceRequest
 * @package Sfue\MocoSdk\Request\Invoice
 */
class InvoiceRequest extends AbstractRequest
{
    /** @var string */
    const ENDPOINT = 'invoices/%s';

    /** @var string */
    const RESPONSE_CLASS = '\Sfue\MocoSdk\Response\Invoice\InvoiceResponse';

    /**
     * @var string|null
     */
    protected $invoiceId;

    /**
     * InvoiceRequest constructor.
     * @param string $invoiceId
     * @param array $options
     */
    public function __construct(string $invoiceId, array $options = [])
    {
        $this->invoiceId = $invoiceId;

        parent::__construct($options);
    }

    /**
     * @return string
     */
    public function getEndpoint(): string
    {
        return \sprintf($this::ENDPOINT, $this->invoiceId);
    }
}
