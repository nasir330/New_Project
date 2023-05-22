<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    section {
        text-align: center;
    }
    </style>
</head>

<body>
    <section style="align-content:center;">
        <img style="width:120px;" src="{{ $message->embed(public_path().'/logo.png') }}" alt="logo" class="img-fluid" />
    </section>
    Dear {{ $user->contactsList->name }},

    <p>
        Your account has been created successfully. Please use the following login details to access your account:
    </p>

    <p style="padding:10px; border:0.5px solid gray; background-color:lightgray; font-size:14px; width:70%;">
        Email: {{ $user->email }} <br>
        Password: {{ $password }}
    </p>

    <p>
        <button style="width:25%; padding:10px; background-color:#222; border-radius:5px 5px 5px 5px;"><a
                style="text-transform:uppercase; color:#fff; font-size:15px;"
                href="{{route('login')}}">Login</a></button>
    </p>

    <p>
        <strong>We recommend that you change your password after your first login.</strong>
    </p>
    <p>
        Best regards, <br>
        <em>Author</em> <br>
        <strong>Seba Enterprise</strong> <br>
        Shakpala Shajahanpur, Bogra
    </p>
</body>

</html>