@extends('layout')

@section('title')All feedback @endsection

@section('main_content')
    <h1>Feedback form</h1>
    <!-- Если есть какие либо ошибки они будут показаны на review под названием-->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="/review/check">
        <!--что бы увидеть обработануюформу добаляем csrf токен  -->
        @csrf
        <input type="email" name="email" id="email" placeholder="write your email" class="form-control"><br>
        <input type="text" name="subject" id="subject" placeholder="write your feedback" class="form-control"><br>
        <textarea name="message" id="message" class="form-control" placeholder="write your message here"></textarea><br>
        <button type="submit" class="btn btn-success">Send</button>
    </form>

@endsection
