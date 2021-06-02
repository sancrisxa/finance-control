<?php


namespace App\Services;

use App\Repositories\Interfaces\InvoiceRepositoryInterface;



class InvoiceService
{
    private $invoiceRepository;

    public function __construct(InvoiceRepositoryInterface $invoiceRepository)
    {
        $this->invoiceRepository = $invoiceRepository;
    }

    public function findAllInvoices(): array
    {
        return $this->invoiceRepository->all();
    }

    public function saveInvoice(array $invoice): void
    {
        $this->invoiceRepository->save($invoice);
    }
}
