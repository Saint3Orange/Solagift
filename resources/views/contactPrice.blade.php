@extends('layouts.app')

@section('content')
    <h1>Отправление заявки на получение прайса</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/contact/price/send" method="post">
        @csrf

        <div class="form-group">
            <label for="name">ФИО</label>
            <input type="text" name="name" placeholder="Введите ФИО" id="name" class="form-control">
        </div><br>

        <div class="form-group">
            <label for="city">Город</label>
            <input type="text" name="city" placeholder="Введите город" id="city" class="form-control">
        </div><br>

        <div class="form-group">
            <label for="namecom">Название организации</label>
            <input type="text" name="namecom" placeholder="Введите название организации" id="namecom" class="form-control">
        </div><br>

        <div class="form-group">
            <label for="position">Должность</label>
            <input type="text" name="position" placeholder="Введите должность" id="position" class="form-control">
        </div><br>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
        </div><br>

        <div class="form-group">
            <label for="phone">Телефонный номер</label>
            <input type="text" name="phone" placeholder="Введите телефонный номер" id="phone" class="form-control">
        </div><br>

        <button type="submit" class="btn btn-primary">Отправить заявку</button>

    </form>
@endsection

