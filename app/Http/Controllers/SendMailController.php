<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;


class SendMailController extends Controller
{
    public function send(Request $request)
    {
        $recaptcha_url = env('RECAPTCHAV3_URL');
        $recaptcha_secret = env('RECAPTCHAV3_SECRET');
        $recaptcha_response = $_POST['recaptcha_response'];

        // Make and decode POST request:
        $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
        $recaptcha = json_decode($recaptcha);
        if ($recaptcha->success == true) {
            if ($recaptcha->score >= 0.7) {
                $to = $request->input('friendsemail');
                $data = array(
                    'FriendsName' => $request->input('friendsname'),
                    'YourName' => $request->input('yourname')
                );

                Mail::to($to)->send(new SendMail($data));
                return redirect('/thanks');
            } else {
                return redirect('/')->with('recaptcha-error-popup', 'open');
            }
        } else {
            return redirect('/')->with('recaptcha-error-popup', 'open');
        }
    }

}
