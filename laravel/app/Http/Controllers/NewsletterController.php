<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;
use App\models\UserEmail;
use App\Event\SendEmail;
use DB;

class NewsletterController extends Controller
{
    public function index()
    {
        return UserEmail::all();
    }

    public function store(Request $request)
    {
            $email = event(new SendEmail($request->email));
            return $email;
    }
}