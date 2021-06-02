<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Edit extends Component
{

    public $customer;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($customer)
    {
        $this->customer = $customer;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.forms.edit');
    }
}
