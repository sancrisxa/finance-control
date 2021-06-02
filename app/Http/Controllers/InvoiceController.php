<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\InvoiceService;

class InvoiceController extends Controller
{
    private $invoiceService;

    public function __construct(InvoiceService $invoiceService)
    {
        $this->invoiceService = $invoiceService;
    }

    public function index()
    {
        $invoices = $this->invoiceService->findAllInvoices();

        return view('invoice.index', ['invoices' => $invoices]);
    }

    public function create()
    {
        return view('invoice.create');
    }

    public function store(Request $request)
    {

        $invoice = $request->all();

        $this->invoiceService->saveInvoice($invoice);

        echo 'salvou';
    }
}
