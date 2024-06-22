<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .container {
            margin-top: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .form-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            text-align: center; /* Центрирование логотипа */
        }
        .custom-width-btn {
            width: 100%;
        }
        .message-item {
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 15px;
        }
        .message-item h5 {
            margin: 0 0 10px 0;
        }
        .form-control {
            width: 100%;
        }
        .logo {
            max-width: 100px; /* Установка максимальной ширины логотипа */
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="text-center">Contact Form</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="form-container">
        <!-- Логотип -->
        <img src="{{ asset('images/logo.jfif') }}" alt="Logo" class="logo">
        
        <form action="{{ route('messages.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea class="form-control" id="message" name="message" rows="4">{{ old('message') }}</textarea>
                @error('message')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary custom-width-btn">Submit</button>
            </div>
        </form>
    </div>

    <h2 class="text-center mt-5">All Messages</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($messages as $message)
                    <tr>
                        <td>{{ $message->name }}</td>
                        <td>{{ $message->email }}</td>
                        <td>{{ $message->message }}</td>
                        <td>{{ $message->created_at->format('d.m.Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>