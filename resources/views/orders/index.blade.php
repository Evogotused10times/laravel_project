<!DOCTYPE html>
<html>
<head>
    <title>Order List</title>
</head>
<body>
    <h1>Order List</h1>
    <ul>
        @foreach($orders as $order)
            <li>{{ $order->customer_name }} - ${{ $order->amount }} - {{ $order->address }}</li>
        @endforeach
    </ul>

    <a href="{{ route('home') }}">Home</a>
</body>
</html>
