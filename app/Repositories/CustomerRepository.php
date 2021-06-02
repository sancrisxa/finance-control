<?php


namespace App\Repositories;


use App\Models\Customer;
use App\Repositories\Interfaces\CustomerRepositoryInterface;
use Illuminate\Support\Facades\DB;

class CustomerRepository implements CustomerRepositoryInterface
{

    private $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function all(): array
    {
        return $this->customer::all()->toArray();
    }

    public function save(array $customer): void
    {
        $this->customer->name = $customer['name'];
        $this->customer->lastname = $customer['lastname'];
        $this->customer->cpf = $customer['cpf'];

        $this->customer->save();
    }

    public function find($id): array
    {
        return $this->customer::find($id)->toArray();
    }

    public function update($customerBYId, $customer)
    {
        DB::table('customers')
            ->where('id', $customer)
            ->update([
                'name' => $customerBYId['name'],
                'lastname' => $customerBYId['lastname' ],
                'cpf' => $customerBYId['cpf']
            ]);
    }

    public function delete($id)
    {
        $customer = $this->customer::find($id);
        $customer->delete();
    }
}
