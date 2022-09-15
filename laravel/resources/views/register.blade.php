@extends('index')

@section('title', 'Страница авторизации')

@section('content')
    <div class="container p-4">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <form action="{{ route('register') }}" method="POST">
                    @if(session()->has('success'))
                        <h3>Операция регистрации успешно выполнена !</h3>
                    @endif
                    @csrf
                        <div class="mb-3">
                            <label for="inputName" class="form-label">Ваше имя:</label>
                            <input type="text" class="form-control" id="inputName" name="name">

                        </div>
                        <div class="mb-3">
                            <label for="inputEmail" class="form-label">Ваша почта:</label>
                            <input type="email" class="form-control" id="inputEmail" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword" class="form-label">Ваша пароль:</label>
                            <input type="password" class="form-control" id="inputPassword" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="inputPasswordConfirmation" class="form-label">Ваша пароль повторно:</label>
                            <input type="password" class="form-control" id="inputPasswordConfirmation" name="password_confirmation" aria-describedby="invalidPasswordConfirmation">
                            <div id="invalidPasswordConfirmation" class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Регистрация</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
