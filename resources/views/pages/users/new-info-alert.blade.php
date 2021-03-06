@extends('layouts.default')
@section('content')
    <main class="container">
        <div class="row h-100">
            <div class="col-sm-12 my-auto">
                <div class="w-100 mx-auto mb-4">
                    <h1 class="font-weight-bold text-center reset-title">Восстановление пароля</h1>
                </div>
                <div class="alert alert-primary text-center mx-auto col-lg-8" role="alert">
                    На Вашу почту ... выслана новая инструкция по восстановлению пароля.
                </div>
                <div class="text-center mx-auto">
                    <a class="text-decoration-none text-uppercase btn button-login-return"
                       href="{{ route('users.login') }}">
                        ← На страницу входа
                    </a>
                </div>
            </div>
        </div>
    </main>
@stop
