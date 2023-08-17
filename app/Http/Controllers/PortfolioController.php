<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use SimplePie\Exception;
use Twilio\Rest\Client;

class PortfolioController extends Controller

{
    public function index(Request $request){
        return view('index');
    }


    public function save_message(Request $request)
    {
        $parms = $request->all();
        if ($request->validate([
            'full_name' => 'required|string|max:200',
            'mobile_number' => 'required|string|max:30',
            'email_address' => 'required|email',
            'subject' => 'required|string|max:150',
            'text' => 'required|string',
        ]));

        $message = new Message();
        $message->fill($parms);
        $message->save();
        return back()
            ->with('success_message', 'Your message has been sent successfully.');
    }

    public function sms(Request $request){
        return view("sms.form");
    }

    public function sms_sent(Request $request){
        $parms = $request->all();
        $receiverNumber = $parms["phone_number"];
        $message = $parms["message"];

        try {
            $account_sid = getenv("TWILIO_SID");
            $auth_token = getenv("TWILIO_AUTH_TOKEN");
            $twilio_number = getenv("TWILIO_PHONE_NUMBER");

            $client = new Client($account_sid, $auth_token);
            $client->messages->create($receiverNumber, [
                'from' => $twilio_number,
                'body' => $message]);

            return redirect()->route('sms');

        } catch (Exception $e) {
            return redirect()->route('sms');
        }
    }


}
