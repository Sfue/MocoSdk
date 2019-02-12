<?php

namespace MocoSdk\Request\Invoice;

/**
 * Class InvoiceTimesheetRequest
 * @package MocoSdk\Request\Invoice
 */
class InvoiceTimesheetRequest extends InvoiceRequest
{
    /** @var string */
    const ENDPOINT = 'invoices/%s/timesheet.pdf';

    /** @var string */
    const RESPONSE_CLASS = '\MocoSdk\Response\Invoice\InvoiceTimesheetResponse';

    /** @var bool */
    protected $returnsFile = true;
}
