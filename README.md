# Welcome to the PHP Guild!

As members of the PHP guild, you will be completing the challenges of TwilioQuest using PHP, the language that powers the web.  This project is pre-configured with some useful Twilio functionality using the [Twilio helper library for PHP](https://github.com/twilio/twilio-php).

## Setting Up
If you're in need of a PHP development environment, the quickest way to get one set up is to use [MAMP on OS X](http://www.mamp.info/en/index.html) or [XAMPP on Windows (or Linux)](http://www.apachefriends.org/en/xampp-windows.html).  Follow the instructions on their respective websites to download and install their software.

Once you have a local PHP stack you are happy with, either dump the contents of this project's `www` directory into your server's web root, or configure your Apache server to serve files out of the `www` directory as the web root.  Using MAMP, this looks like this:

![preferences](http://demo.kevinwhinnery.com/upload/MAMP-20130827-143058.png)

...and then this...

![web root](http://demo.kevinwhinnery.com/upload/MAMP-20130827-143227.png)

Then, start your servers by clicking the "Start Servers" button - on MAMP it looks like this after starting:

![servers](http://demo.kevinwhinnery.com/upload/MAMP-20130827-143407.png)

Now, navigate to the `www` folder of this project.  Rename `config.php.sample` to `config.php`.  Open this file and locate the following three lines of configuration:

    <?php
    $TWILIO_ACCOUNT_SID = 'CHANGE_ME';
    $TWILIO_AUTH_TOKEN  = 'CHANGE_ME';
    $TWILIO_NUMBER = 'CHANGE_ME';

These values inside quotes will need to be replaced with the following information from your Twilio account:

* `TWILIO_ACCOUNT_SID` : Your Twilio "account SID" - it's like your username for the Twilio API.  This and the auth token (below) can be found [on your account dashboard](https://www.twilio.com/user/account).
* `TWILIO_AUTH_TOKEN` : Your Twilio "auth token" - it's your password for the Twilio API.  This and the account SID (above) can be found [on your account dashboard](https://www.twilio.com/user/account).
* `TWILIO_NUMBER` : A Twilio number that you own, that can be used for making calls and sending messages.  You can find a list of phone numbers you control (and buy another one, if necessary) [in the account portal](https://www.twilio.com/user/account/phone-numbers/incoming).

Now your project should be all set!

## Running the Application

If you successfully started your MAMP or XAMPP server, it is likely to be running locally on [port 8080](http://localhost:8080/).  Navigate to [this page](http://localhost:8080/), and you should find a UI which looks similar to this:

![php guild](http://demo.kevinwhinnery.com/upload/Welcome_to_the_PHP_Guild%21-20130827-143920.png)

Try out the voice and messaging demos by entering your mobile phone number and pressing the button.  If you receive a voice call and a text message from your Twilio number, you're all set!

## Begin Questing!
This is but your first step into a larger world.  [Return to TwilioQuest](http://quest.twilio.com) to continue your adventure.  Huzzah!

