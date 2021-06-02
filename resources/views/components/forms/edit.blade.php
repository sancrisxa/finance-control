<div>
    <form action="{{route("customers.update", ['customer' => $customer['id']])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" placeholder="Enter name" name="name" id="name" value="{{$customer['name']}}">
        </div>
        <div class="form-group">
            <label for="lastname">Lastname:</label>
            <input type="text" class="form-control" placeholder="Enter lastname" name="lastname" id="lastname" value="{{$customer['lastname']}}">
        </div>
        <div class="form-group">
            <label for="cpf">Cpf:</label>
            <input type="text" class="form-control" placeholder="Enter cpf" name="cpf" id="cpf" value="{{$customer['cpf']}}">
        </div>

        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
</div>
