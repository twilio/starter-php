<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class CallController extends Controller
{

    private $twilioClient;

    /**
     * Create a new controller instance.
     *
     * @return void
     * @throws \Twilio\Exceptions\ConfigurationException
     */
    public function __construct()
    {
        $this->twilioClient = new Client(
            env('TWILIO_ACCOUNT_SID'), env('TWILIO_AUTH_TOKEN')
        );

    }

    /**
     * @param Request $request
     * @return string
     * @throws \Twilio\Exceptions\TwilioException
     */
    public function sendCall(Request $request) {
        $to = $request->input("to");
        $from = env('TWILIO_PHONE_NUMBER');
        $this->twilioClient->calls
            ->create($to, $from, array("url" => "http://demo.twilio.com/docs/voice.xml"));

        return "Call inbound!";
    }
}
