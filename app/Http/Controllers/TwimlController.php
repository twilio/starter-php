<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Twilio\TwiML\VoiceResponse;

class TwimlController extends Controller
{

    public function helloWebhook(Request $request) {

        $response = new VoiceResponse();
        $response->say("Hello there! You have successfully configured a web hook.");
        $response->say("Good luck on your Twilio quest!");

        return response($response)
            ->header('Content-Type', 'text/xml');
    }
}
