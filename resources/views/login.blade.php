@extends('layout')
<link rel="stylesheet" href="{{ asset('assets/css/sign.css') }}">

@section('content')
    <section class="container forms">
        <a href="home.html" class="back-to-home">
            <i class='bx bx-arrow-back'></i>
        </a>
        <div class="form login">
            <div class="form-content">
                <header>Login</header>
                <form action="{{ route('submitLogin') }}" method="POST">
                    @csrf
                    <div class="field input-field">
                        <input type="email" placeholder="Email" class="input" name="email">
                    </div>
                    <div class="field input-field">
                        <input type="password" placeholder="Password" name="password" class="password" id="password">
                        <i class='bx bx-hide eye-icon' id="togglePassword"></i>
                    </div>
                    <div class="field button-field">
                        <input type="submit" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const icon = this;
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('bx-hide');
                icon.classList.add('bx-show');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('bx-show');
                icon.classList.add('bx-hide');
            }
        });
    </script>
@endsection
