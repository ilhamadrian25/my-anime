@extends('layouts.app')
@section('content')
    <section class="login text-center">
        <div class="container">
            <div class="login-block">
                <div class="login-content">
                    @foreach ($errors->all() as $item)
                        {{ $item }}
                    @endforeach

                    <img src="{{ asset('media/icon/user.png') }}" alt="" class="user-icon">
                    <h3>Log in</h3>
                    <button class="hide-link"><img src="{{ asset('media/login/google.png') }}" alt=""> Continue with
                        Google</button>
                    <button class="hide-link"><img src="{{ asset('media/login/facebook-icon.png') }}" alt="">
                        Continue with Facebook</button>
                    <button id="continue-email" class="hide-link"><img src="{{ asset('media/login/email-icon.png') }}"
                            alt=""> Continue with email</button>
                    <div class="login-sec" style="display: none;">
                        <form id="loginForm" method="POST" action="{{ route('login.store') }}">
                            @csrf
                            <div class="form-group">
                                <input class="form-control" type="email" name="email" required
                                    placeholder="username or email address">
                            </div>
                            <div class="form-group password-type-field mb-0">
                                <input class="form-control" type="password" id="password-field" name="password" required
                                    placeholder="enter password">
                                <span class="text-end toggle-password" toggle="#password-field"> <i
                                        class="fal fa-eye field-icon toggle-password"></i></span>
                            </div>
                            <button type="submit" class="anime-btn btn-dark border-change">
                                Log In
                            </button>
                        </form>
                        <p><a href="reset-password.html">Forget Password</a></p>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="check">
                        <label class="custom-control-label" for="check">I wish to receive news and promotions from
                            Maonime Company by email.</label>
                    </div>
                    <p class="policy">By continuing, you agree to Maonime Terms of Use and Privacy Policy.</p>
                    <p class="guide">Create an account? <a href="/register">Sign Up</a></p>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $("#loginForm").on("submit", function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "{{ route('login.store') }}",
                data: $(this).serialize(),
                dataType:"json",
                success: function(response) {
                    console.log(response);
                    Swal.fire({
                        icon: 'success',
                        title: 'Login Berhasil...',
                        text: response.message,
                    }).then(function() {
                        location.href =response.redirect;
                    });

                    // yang atas itu cuma SweetAler
                },
                error: function(response) {
                    console.log(response.response);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error...',
                        text: response.responseJSON.message,
                    });
                }
            })
        })
    </script>
@endsection
