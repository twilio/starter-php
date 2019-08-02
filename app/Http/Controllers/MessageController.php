<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Twilio\Rest\Client;

class MessageController extends Controller
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
    public function sendSms(Request $request) {
        $to = $request->input("to");
        $from = env('TWILIO_PHONE_NUMBER');
        $this->twilioClient->messages
            ->create($to, array('from' => $from, 'body' => "Good luck on your Twilio quest!"));

        return "Text message incoming!";
    }
}
