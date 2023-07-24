<!DOCTYPE html>
<html>
<head>
    <title>Mails</title>
</head>
<body>
    <h1>{{ $email['subject'] }}</h1>
    <p>{{ $email['name'] }}</p>
    <p>{{ $email['email'] }}</p>
    <p>{{ $email['message'] }}</p>

    <p>Thank you</p>
</body>
</html>
