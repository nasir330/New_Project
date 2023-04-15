<x-header />

<body class="main-body">
    @if(empty($appData))
    @include('auth.register')
    @else
    @include('auth.login')
    @endif
<x-footer />