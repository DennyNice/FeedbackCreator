@extends('layout')

@section('title')All feedback @endsection

@section('main_content')
    <h1>Feedback form</h1>
    <form method="post" action="/review/check">
        <input type="email" name="email" id="email" placeholder="write your email" class="form-control"><br>
        <input type="text" name="subject" id="subject" placeholder="write your feedback" class="form-control"><br>
        <textarea name="message" id="message" class="form-control" placeholder="write your message here"></textarea><br>
        <button type="submit" class="btn btn-success">Send</button>
    </form>

@endsection
