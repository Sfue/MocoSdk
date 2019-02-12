<?php

namespace Sfue\MocoSdk\Request\Invoice;

/**
 * Class InvoiceTimesheetRequest
 * @package Sfue\MocoSdk\Request\Invoice
 */
class InvoiceTimesheetRequest extends InvoiceRequest
{
    /** @var string */
    const ENDPOINT = 'invoices/%s/timesheet.pdf';

    /** @var string */
    const RESPONSE_CLASS = '\Sfue\MocoSdk\Response\Invoice\InvoiceTimesheetResponse';

    /** @var bool */
    protected $returnsFile = true;
}
