@if(empty($appData))
    @include('auth.register')
    @else
    @include('auth.login')
    @endif