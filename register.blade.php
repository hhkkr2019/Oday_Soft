<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #f3f4f6;
        }

        .form-container {
            background: #ffffff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .registration-form h2 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .form-group input:focus {
            border-color: #007bff;
            outline: none;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background: #0056b3;
        }

        .error {
            color: red;
            font-size: 13px;
        }

        .success {
            color: green;
            margin-bottom: 15px;
            text-align: center;
        }
    </style>

    <div class="form-container">

       
        <form class="registration-form" wire:submit.prevent="register">
            <h2>Register</h2>

            @if ($message)
                <div class="success">{{ $message }}</div>
            @endif
            {{-- @if (session()->has('success'))
                <div class="success">{{ session('success') }}</div>
            @endif --}}

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" wire:model.defer="name" placeholder="Enter your name" required>
                @error('name') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" wire:model.defer="email" placeholder="Enter your email" required>
                @error('email') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" wire:model.defer="password" placeholder="Enter your password" required>
                @error('password') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" id="password_confirmation" wire:model.defer="password_confirmation" placeholder="Confirm password" required>
                @error('password_confirmation') <span class="error">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="btn">Register</button>
        </form>
    </div>
    </div>
    




</body>
</html>