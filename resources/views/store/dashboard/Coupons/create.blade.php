<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Coupon</title>
    <style>
        /* Form Container */
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Card */
        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Card Header */
        .card-header {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            font-weight: bold;
            border-bottom: none;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        /* Card Body */
        .card-body {
            padding: 20px;
        }

        /* Form Labels */
        label {
            font-weight: bold;
            margin-bottom: 10px;
            display: block;
        }

        /* Form Inputs */
        input[type="text"],
        input[type="number"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            transition: border-color 0.3s;
        }

        /* Form Inputs on Focus */
        input[type="text"]:focus,
        input[type="number"]:focus,
        input[type="date"]:focus,
        select:focus {
            outline: none;
            border-color: #007bff;
        }

        /* Error Messages */
        .invalid-feedback {
            color: #dc3545;
            font-size: 12px;
            margin-top: 4px;
        }

        /* Submit Button */
        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">Add Coupon</div>
            <div class="card-body">
                <form method="post" action="{{ route('add.coupon') }}">
                    @csrf
                    <label for="code">Coupon Code:</label>
                    <input type="text" name="code" id="code" required>
                    @error('code')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror

                    <label for="discount_percentage">Discount Percentage:</label>
                    <input type="number" name="discount_percentage" id="discount_percentage" min="0" max="100" required>
                    @error('discount_percentage')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror

                    <label for="expires_at">Expires At:</label>
                    <input type="date" name="expires_at" id="expires_at" required>
                    @error('expires_at')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror

                    <label for="number_of_uses">Number of Uses:</label>
                    <input type="number" name="number_of_uses" id="number_of_uses" min="0" required>
                    @error('number_of_uses')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror

                    <label for="store_id">Store ID:</label>
                    <input type="number" name="store_id" id="store_id" required>
                    @error('store_id')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror

                    <button type="submit">Add Coupon</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
