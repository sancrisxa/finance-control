<div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Lastname</th>
            <th>CPF</th>
            <th>Editar</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer["id"] }}</td>
                <td>{{ $customer["name"] }}</td>
                <td>{{ $customer["lastname"] }}</td>
                <td>{{ $customer["cpf"] }}</td>
                <td>
                    <a href="{{route("customers.edit", ['customer' => $customer['id']])}}">Edit</a>
                    <a href="{{route("customers.show", ['customer' => $customer['id']])}}">Show</a>
                    <form action="{{route("customers.destroy", ['customer' => $customer['id']])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-primary">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
