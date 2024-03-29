<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Customers extends Component
{
    /**
     * @var
     */
    public $customers;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($customers)
    {
        $this->customers = $customers;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.customers');
    }
}
