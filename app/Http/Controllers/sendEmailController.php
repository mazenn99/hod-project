<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendEmailRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class sendEmailController extends Controller
{
    // this controller to send email from the form in index page
    private $companyEmail = 'info@hod.sa';
    public function sendEmail(SendEmailRequest $request) {
        Mail::send([] , [] , function($message) use ($request) {
           $message->subject('email from site');
           $message->to($this->companyEmail);
           $message->setBody($request->input('description'));
        });
        return redirect()->back()->with(['success' => trans('home/alert.success')]);
    }
}
