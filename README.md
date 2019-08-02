# Welcome to the PHP Guild!

As members of the PHP guild, you will be completing the challenges of TwilioQuest using PHP, the language that powers the web.  This project is pre-configured with some useful Twilio functionality using the [Twilio helper library for PHP](https://github.com/twilio/twilio-php).

## Setting Up
We will be using the [Lumen Framework by Laravel](https://lumen.laravel.com/) for this tutorial and [composer](http://getcomposer.org/) to manage its dependencies . Check [the requirements](https://lumen.laravel.com/docs/5.8/installation#installation) to have your system ready to run the project.

Once your system setup is ready, clone [this repo](git@github.com:twilio/starter-php.git) and `cd` into it..

Copy the sample configuration file and edit it to match your configuration.

```bash
cp .env.example .env
```

These environment variable need to be replaced with the following information from your Twilio account:

* `TWILIO_ACCOUNT_SID` : Your Twilio "account SID" - it's like your username for the Twilio API.  This and the auth token (below) can be found [on the console](https://www.twilio.com/console).
* `TWILIO_AUTH_TOKEN` : Your Twilio "auth token" - it's your password for the Twilio API.  This and the account SID (above) can be found [on the console](https://www.twilio.com/console).
* `TWILIO_PHONE_NUMBER` : A Twilio number that you own, that can be used for making calls and sending messages.  You can find a list of phone numbers you control (and buy another one, if necessary) [in the console](https://www.twilio.com/console/phone-numbers/incoming).

## Running the Application

Now that our project is ready, we need to install its dependencies using [composer](http://getcomposer.org/) 

```bash
composer install
```

Start the application:

```bash
php -S localhost:4567 -t public
```

Now you can visit [http://localhost:4567/](http://localhost:4567)

Try out the voice and messaging demos by entering your mobile phone number and pressing the button.  If you receive a voice call and a text message from your Twilio number, you're all set!

## Begin Questing!
This is but your first step into a larger world.  [Return to TwilioQuest](http://quest.twilio.com) to continue your adventure.  Huzzah!

