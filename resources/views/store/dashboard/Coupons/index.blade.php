<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Coupon</title>
    <style>
        /* Add your CSS styles here */
        /* Container Styles */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Form Styles */
        .signup-form {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .signup-form h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        select.form-control {
            height: 40px;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        /* Coupon List Styles */
        .coupon-list {
            margin-top: 40px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th, table td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #007bff;
            color: #fff;
        }

        table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tbody tr:hover {
            background-color: #cce5ff;
        }
    </style>
</head>
<body>
    <div class="container">
        <form class="signup-form" method="post" action="{{ route('list.coupon') }}">
            {{-- method="post" action="{{ route('list.coupon') }}" --}}
            @csrf
            <h2>Welcome</h2>
            {{-- <div class="welcome-message">
                <h2>Welcome, {{ $firstName }} {{ $lastName }}</h2>
            </div>
            <div class="form-group">
                <input type="text" placeholder="Code" name="code" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="text" placeholder="Discount Percentage" name="discount_percentage" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="date" placeholder="Expires At" name="expires_at" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="number" placeholder="Number of Uses" name="number_of_uses" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="number" placeholder="Store ID" name="store_id" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Add Coupon</button> --}}
        </form>

        <div class="coupon-list">
            <h3>Coupon List</h3>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Discount Percentage</th>
                            <th>Expires At</th>
                            <th>Number of Uses</th>
                            <th>Store ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($coupons as $coupon)
                            <tr>
                                <td>{{ $coupon->code }}</td>
                                <td>{{ $coupon->discount_percentage }}</td>
                                <td>{{ $coupon->expires_at }}</td>
                                <td>{{ $coupon->number_of_uses }}</td>
                                <td>{{ $coupon->store_id }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
