<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Services\CustomerService;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;

class CustomerController extends Controller
{
    private $customerService;

    public function __construct(CustomerService  $customerService)
    {
        $this->customerService = $customerService;
    }

    public function index()
    {
        $customers = $this->customerService->findAllCustomers();

        return view('customer.index', ['customers' => $customers]);
    }

    public function create()
    {
        if (View::exists('customer.create')) {
            return view('customer.create');
        }

    }

    public function store(Request $request)
    {

        $customer = $request->all();

        $this->customerService->saveCustomer($customer);

        return redirect()->route('customers.index')->with('status', 'Customer created!');
    }

    public function show(Customer $customer)
    {

        $customer = $this->customerService->findCustomerById($customer->id);
        return view('customer.show')->with('customer', $customer);
    }

    public function edit(Customer $customer)
    {
        $customer = $this->customerService->findCustomerById($customer->id);
        return view('customer.edit', ['customer' => $customer]);
    }

    public function update(Request $request, $customer)
    {
        $customerBYId = $this->customerService->findCustomerById($customer);

        $customerBYId['name'] = $request->input('name');
        $customerBYId['lastname'] = $request->input('lastname');
        $customerBYId['cpf'] = $request->input('cpf');

        $this->customerService->updateCustomer($customerBYId, $customer);

        return redirect()->route('customers.index')->with('status', 'Customer updated!');
    }

    public function destroy($customer)
    {
        $this->customerService->deleteCustomer($customer);
        return redirect()->route('customers.index')->with('status', 'Customer delete!');
    }

}
