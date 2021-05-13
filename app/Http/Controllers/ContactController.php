<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhoneRequest;
use App\Http\Requests\PriceRequest;
use App\Mail\PhoneMail;
use App\Mail\PriceMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller {

    public function index(){

        return view('contactPrice');

    }

    public function showView(){

        return view('contactPhone');

    }

    public function send(PriceRequest $request)
    {
        if ($request->method() == 'POST') {
            $textMail = "<p><b>ФИО:</b>{$request->input('name')}</p><br>";
            $textMail.= "<p><b>Город:</b>{$request->input('city')}</p><br>";
            $textMail.= "<p><b>Наименование организации:</b>{$request->input('namecom')}</p><br>";
            $textMail.= "<p><b>Должность:</b>{$request->input('position')}</p><br>";
            $textMail.= "<p><b>Email:</b>{$request->input('email')}</p><br>";
            $textMail.= "<p><b>Телефон:</b>{$request->input('phone')}</p><br>";
        }

        Mail::to('mmvipstomsk@gmail.com')->send(new PriceMail($textMail));
        return response()->json([
            "status" => true,
            "request" => $request->only('name', 'city', 'namecom', 'position', 'email', 'phone')
        ])->setStatusCode(201, 'email sent');
    }

    public function store(PhoneRequest $request)
    {
        if ($request->method() == 'POST') {
            $textMail = "<p><b>Наименование организации:</b>{$request->input('namecom')}</p><br>";
            $textMail.= "<p><b>ФИО:</b>{$request->input('name')}</p><br>";
            $textMail.= "<p><b>Телефон:</b>{$request->input('phone')}</p><br>";
            $textMail.= "<p><b>Время обратного звонка:</b>{$request->input('time')}</p><br>";
                    }

        Mail::to('mmvipstomsk@gmail.com')->send(new PhoneMail($textMail));
        return response()->json([
            "status" => true,
            "request" => $request->only('namecom', 'name', 'phone', 'time')
        ])->setStatusCode(201, 'email sent');
    }

}

