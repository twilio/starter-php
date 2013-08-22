<!DOCTYPE html>
<html>
<head>
    <meta name="description" content="TwilioQuest starter code">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to the PHP Guild!</title>

    <!-- A little CSS to make our page prettier -->
    <link href="//fonts.googleapis.com/css?family=Press+Start+2P" 
        rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/app.css"/>
    <link rel="icon" type="image/png" href="/favicon.png">

    <!-- Include jQuery to help us with some UI stuff -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
    </script>
</head>
<body>
    <!-- A simple UI to test our Twilio back end -->
    <div id="content">

        <div id="flash" style="display:none;">
            <p><span id="flash-message"></span> <a href="#">Close</a></p>
        </div>

        <div id="welcome">
            <img src="/php_shield256.png" alt="PHP Shield"/>
            <h1><span>PHP</span> Guild</h1>
            <p>
                Welcome to the PHP Guild! The language that powers the internet
                will now power you to victory in TwilioQuest.
            </p>
            <p>
                <a href="http://quest.twilio.com">Gather your party and
                venture forth</a>
            </p>
        </div>

        <h3>Hello World</h3>
        <p>
            Below, we have two simple demos that will confirm your environment
            has been properly configured.  Please refer to the 
            <a href="https://github.com/twilio/starter-php">README.md in your 
            starter app repository</a> to see how to configure this application.
        </p>
        <br/>
        <ul id="tabs">
            <li id="messaging" class="current">Messaging</li>
            <li id="call">Voice Call</li>
        </ul>
        <form>
            <p>Enter your mobile phone number:</p>
            <input id="to" type="text" 
                placeholder="ex: +16518675309"/>
            <button>Send me a message</button>
        </form>
    </div>
    <div id="footer">
        <span>Twilio</span><img src="/TwilioQuest32.png" alt="TwilioQuest"/>Quest
        <p>
            Made with <img src="/heart.gif" alt="heart"> by your pals 
            <a href="http://www.twilio.com">@twilio</a>.
        </p>
    </div>

    <!-- Some dirty JavaScript to help drive our UI -->
    <script src="/js/ui.js"></script>
    <!-- Some ajax magic to hit our back end and make calls/send messages -->
    <script src="/js/form.js"></script>
</body>
</html>