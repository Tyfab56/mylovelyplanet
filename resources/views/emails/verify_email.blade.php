<!DOCTYPE html>
<html>

<head>
    <title>Verify Your Email</title>
</head>

<body>
    <h1>Verify Your Email</h1>
    <p>Please click the link below to verify your email:</p>
    <a href="{{ url('/api/verify-email/' . $token) }}">Verify Email</a>
</body>

</html>