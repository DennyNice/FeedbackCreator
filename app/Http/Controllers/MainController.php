<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function review()
    {
        $reviews = new Contact();
        return view('review',['reviews'=>$reviews->all()]);
    }

// Что бы получить все данные с формы используем параметр Request
// Функция dd() выводит все содержимое  dd($request);
    public function review_check(Request $request)
    {
// Для валидации нужно создать ассоциативный массив с ключами нашей формы
        $valid = $request->validate([
            'email' => 'required|min:4|max:100',
            'subject' => 'required|min:4|max:100',
            'message' => 'required|min:15|max:500'
        ]);

// Получаем данные пользователя из формы которые получили ранее
        $review = new Contact();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();

        return redirect()->route('review');
    }
}

