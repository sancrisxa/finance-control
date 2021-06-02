<html>
<body>
@foreach ($invoices as $invoice)
    <p>This is user {{ $invoice['customer_id'] }}</p>
    <p>This is due date {{ $invoice['due_date'] }}</p>
    <p>This is amount {{ $invoice['amount'] }}</p>
@endforeach
</body>
</html>
