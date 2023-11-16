<!DOCTYPE html>
<html>
<head>
    <title>Email Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            background-image:url("https://mdbootstrap.com/img/Photos/Horizontal/Nature/full page/img(20).jpg");
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin: 20px 0;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 3rem;
            background-color: rgba(0, 0, 0, 0.1);
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        textarea {
            width: 90%;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: inset 1px 1px 2px rgba(0, 0, 0, 0.1);
        }

        button
        {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 30px;
            cursor: pointer;
        }

        button:hover {
            background-color: #21b300;
        }
    </style>
</head>
<body>
    <h1> Form</h1>

    <form method="post" action="{{ route('send.email') }}">
        @csrf

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" name="age" id="age" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <textarea name="address" id="address" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="qualification">Qualification:</label>
            <input type="text" name="qualification" id="qualification" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="subject">Subject:</label>
            <input type="text" name="subject" id="subject" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Send Email</button>
    </form>
</body>
</html>
