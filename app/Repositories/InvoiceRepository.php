<?php


namespace App\Repositories;

use App\Models\Invoice;
use App\Repositories\Interfaces\InvoiceRepositoryInterface;


class InvoiceRepository implements InvoiceRepositoryInterface
{

    private $invoice;

    public function __construct(Invoice $invoice)
    {
        $this->invoice = $invoice;
    }

    public function all(): array
    {
        return $this->invoice::all()->toArray();
    }

    public function save(array $invoice): void
    {
        $this->invoice->customer_id = $invoice['customer'];
        $this->invoice->due_date = $invoice['due_date'];
        $this->invoice->amount = $invoice['amount'];

        $this->invoice->save();
    }
}
