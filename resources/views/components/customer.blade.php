<div>
    <div class="card">
        <div class="card-body">
            <p>This is id {{ $customer["id"] }}</p>
            <p>This is name {{ $customer["name"] }}</p>
            <p>This is lastname {{ $customer["lastname"] }}</p>
            <p>This is cpf {{ $customer["cpf"] }}</p>
            <a  class="card-link" href="{{route("customers.edit", ['customer' => $customer['id']])}}">Editar</a>
        </div>
    </div>
</div>
