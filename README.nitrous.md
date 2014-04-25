# Setup for Nitrous.IO

These instructions assume you have downloaded the starter-php repo to a PHP Template.  If not then you will need to install PHP with [Autoparts](http://help.nitrous.io/autoparts).

Before you can run this project, you will need to set three system environment variables.  These are:

* `TWILIO_ACCOUNT_SID` : Your Twilio "account SID" - it's like your username for the Twilio API.  This and the auth token (below) can be found [on your account dashboard](https://www.twilio.com/user/account).
* `TWILIO_AUTH_TOKEN` : Your Twilio "auth token" - it's your password for the Twilio API.  This and the account SID (above) can be found [on your account dashboard](https://www.twilio.com/user/account).
* `TWILIO_NUMBER` : A Twilio number that you own, that can be used for making calls and sending messages.  You can find a list of phone numbers you control (and buy another one, if necessary) [in the account portal](https://www.twilio.com/user/account/phone-numbers/incoming).

Environment Variables can be set by opening a terminal window and typing the following three commands - replace all the characters after the `=` with values from your Twilio account:

    export TWILIO_ACCOUNT_SID=ACXXXXXXXXX
    export TWILIO_AUTH_TOKEN=XXXXXXXXX
    export TWILIO_NUMBER=+16518675309

Note: The next step will copy the project into your DocumentRoot.  If you have any existing projects in `~/workspace/www/`, move them into a subdirectory.

Run the following commands in the terminal:

1. `cp -r ~/workspace/starter-php/www/* ~/workspace/www/`
2. `cd ~/workspace/www/starter-php/`
3. `mv config.php.sample config.php`

Go to the "Preview Menu" and click "Port 3000"
