<!DOCTYPE html>
<html>
<head>
    <title>Create Delivery</title>
</head>
<body>
    <h1>Create a New Delivery</h1>

    <form action="{{ route('deliveries.store') }}" method="POST">
        @csrf

        <div>
            <label for="order_id">Order ID:</label>
            <input type="number" name="order_id" id="order_id" required>
        </div>

        <div>
            <label for="delivery_status">Delivery Status:</label>
            <select name="delivery_status" id="delivery_status">
                <option value="Pending">Pending</option>
                <option value="In Transit">In Transit</option>
                <option value="Delivered">Delivered</option>
                <option value="Cancelled">Cancelled</option>
            </select>
        </div>

        <button type="submit">Create Delivery</button>
    </form>

    <a href="{{ route('deliveries.index') }}">Back to Deliveries List</a>
</body>
</html>
