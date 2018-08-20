@extends('layouts.layout')

@section('content')
    <section class="first_view login">
        <div class="container">
            <div class="login-description">
                <h2>ズボラ引っ越し</h2>
            </div>
            <div>
                <div class="login-wrapper">
                    <form action="{{ route('facebook.login')        }}">
                        <button class="btn login-way facebook">Sign Up Facebook</button>
                    </form>
                    <form action="{{ route('google.login') }}">
                        <button class="btn login-way google">Sign Up Google</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <form id="login_success" method="post" action="/login_success.php">
        <input id="csrf" type="hidden" name="csrf"/>
        <input id="code" type="hidden" name="code"/>
    </form>
@endsection