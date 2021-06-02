<?php


namespace App\Repositories\Interfaces;


interface CustomerRepositoryInterface
{
    public function all(): array;
    public function save(array $customer): void;
}
