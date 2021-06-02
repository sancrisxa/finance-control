<div>
    <form action="{{route('customers.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" placeholder="Enter name" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="lastname">Lastname:</label>
            <input type="text" class="form-control" placeholder="Enter lastname" name="lastname" id="lastname">
        </div>
        <div class="form-group">
            <label for="cpf">Cpf:</label>
            <input type="text" class="form-control" placeholder="Enter cpf" name="cpf" id="cpf">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
