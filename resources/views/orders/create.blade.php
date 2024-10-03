<!DOCTYPE html>
<html>
<head>
    <title>Create New Order</title>
</head>
<body>
    <h1>Create a New Order</h1>

    <form action="{{ route('orders.store') }}" method="POST">
        @csrf <!-- This is necessary for form submission in Laravel -->
        
        <div>
            <label for="customer_name">Customer Name:</label>
            <input type="text" name="customer_name" id="customer_name" required>
        </div>

        <div>
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" required>
        </div>

        <div>
            <label for="amount">Order Amount:</label>
            <input type="number" name="amount" id="amount" step="0.01" required>
        </div>

        <button type="submit">Create Order</button>
    </form>

    <a href="{{ route('orders.index') }}">Back to Order List</a>
    <a href="{{ route('home') }}">Home</a>
</body>
</html>
