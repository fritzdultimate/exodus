<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller {
    public function sendNewsLetter(Request $request) {
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;
        $details = [
            'message' => $message,
            'subject' => $subject,
            'view' => 'emails.newsletter'
        ];
        try {
                $mailer = new \App\Mail\MailSender($details);
                Mail::to($email)->queue($mailer);

                return response()->json(
                    [
                    'success'=> ['message' => ["Email sent successfully"]]
                    ], 201
                );
                // $request->session()->flash('success', 'Newsletter sent successfully');
                // return back();

        } catch(\Exception $e){
            return response()->json(
                [
                'success'=> ['message' => ["Email error"]]
                ], 201
            );
            // $request->session()->flash('error', 'Something went wrong');
            // return back();
        }

    }
}
