<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $data['subject'] }}</title>
</head>
<body>
    <div>
        <h2>{{ $data['subject'] }}</h2>
        <p>Hello {{ $data['name'] }}</p>
        <p>"Added you as a  member"</p>
        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Age:</strong> {{ $data['age'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Address:</strong> {{ $data['address'] }}</p>
        <p><strong>Qualification:</strong> {{ $data['qualification'] }}</p>
    </div>
</body>
</html>
