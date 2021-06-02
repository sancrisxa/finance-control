<?php


namespace App\Repositories\Interfaces;


interface InvoiceRepositoryInterface
{
    public function all(): array;

    public function save(array $invoice): void;
}
