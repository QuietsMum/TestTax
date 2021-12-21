@extends('dashboard')

@section('content')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    Выберите страницу
                </div>
                <div class="card-body">
                    <ul>
                        <li>
                            <a href="{{ route('training') }}">Тренажерный модуль</a>
                        </li>
                        <li>
                            <a href="{{ route('test') }}">Тестовый модуль</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection