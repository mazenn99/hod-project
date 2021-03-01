<?php

namespace App\Http\Controllers;

use App\Http\Requests\askRequestPrice;
use Illuminate\Support\Facades\Mail;

class FeatureSystemController extends Controller
{
    private $companyEmail = 'mazenn99@gmail.com';

    // feature system view
    public function featureView()
    {
        return view('feature');
    }

    // ask price
    public function price(askRequestPrice $request)
    {
        $file = $request->file('image');
        Mail::send([], [], function ($message) use ($request , $file) {
            $message->subject('ask for price');
            $message->to($this->companyEmail);
            $message->setBody("
            <bold>name : </bold>  . $request->name . <br>
            <bold>number : </bold>  . $request->number . <br>
            <bold>city : </bold>  . $request->city . <br>
            <bold>phone : </bold>  . $request->phone . <br>
            <bold>job : </bold>  . $request->jop . <br>
            <bold>description : </bold>  . $request->description . <br>
            " , 'text/html');
            $message->attach($file->getRealPath());
        });
        return redirect()->back()->with(['success' => trans('home/alert.success')]);
    }
}
