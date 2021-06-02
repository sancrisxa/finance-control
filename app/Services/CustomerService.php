<?php


namespace App\Services;

use App\Repositories\Interfaces\CustomerRepositoryInterface;

class CustomerService
{
    private $customerRepository;

    public function __construct(CustomerRepositoryInterface $customerRespository)
    {
        $this->customerRepository = $customerRespository;
    }

    public function findAllCustomers(): array
    {
        return $this->customerRepository->all();
    }

    public function saveCustomer(array $customer): void
    {
        $this->customerRepository->save($customer);
    }

    public function findCustomerById($id): array
    {
        return $this->customerRepository->find($id);
    }

    public function updateCustomer($customerBYId, $customer)
    {
        return $this->customerRepository->update($customerBYId, $customer);
    }

    public function deleteCustomer($id)
    {
        return $this->customerRepository->delete($id);
    }

}
