<!DOCTYPE html>
<html>
<head>
    <title>Deliveries List</title>
</head>
<body>
    <h1>List of Deliveries</h1>

    <ul>
        @foreach($deliveries as $delivery)
            <li>
                Order ID: {{ $delivery->order_id }} <br>
                Status: {{ $delivery->delivery_status }} <br>
                Created At: {{ $delivery->created_at }}
            </li>
        @endforeach
    </ul>

    <a href="{{ route('deliveries.create') }}">Create New Delivery</a>
	<a href="{{ route('home') }}">Home</a>

</body>
</html>
