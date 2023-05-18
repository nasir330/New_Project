<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section style="align-content:center;">
        <img style="width:120px;" src="{{ $message->embed(public_path().'/logo.png') }}" alt="logo"
            class="img-fluid" />
    </section>
Dear {{ $user->contactsList->name }},

<p>
Your account has been created successfully. Please use the following login details to access your account:
</p>

<p>
Email: {{ $user->email }} <br>
Password: {{ $password }}
</p>

<p>
<strong>We recommend that you change your password after your first login.</strong>
</p>
<p>
Best regards, <br>
<em>Author</em> <br>
<strong>WDDC Apps</strong>
</p>
</body>
</html>