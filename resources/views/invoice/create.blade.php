<form method="POST" action="/invoice">
    @csrf
    <input type="number" id="customer" name="customer"><br><br>
    <input type="date" id="due_date" name="due_date"><br><br>
    <input type="number" id="amount" name="amount"><br><br>
    <input type="submit" value="Submit">

</form>
