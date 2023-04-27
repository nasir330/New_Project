<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
Dear {{ $user->employees->firstName. ' '.$user->employees->lastName }},

<p>
Your account has been created successfully. Please use the following login details to access your account:
</p>

<p>
Email: {{ $user->email }} <br>
Password: {{ $password }}
</p>

<p>
    <button>Login</button>
</p>
<p>
<strong>We recommend that you change your password after your first login.</strong>
</p>
<p>
Best regards, <br>
<em>Author</em> <br>
<strong>Prison Management</strong>
</p>
</body>
</html>