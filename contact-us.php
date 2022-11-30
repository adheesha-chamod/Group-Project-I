<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
	<link rel="stylesheet" href="./css/contact-us.css">
    <title>Contact us</title>
</head>
<body>
    <div class="navbar">
        <h2>TapToBus</h2>

        <ul>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./terms-conditions.php">Terms & Conditions</a></li>
            <li><a href="./contact-us.php">Contact Us</a></li>
        </ul>
    </div>

    <div class="content">
        <h1>Contact Us</h1>

        <form name="contact-us-form" action="" method="" onsubmit="return isvalid()" novalidate>
            <div class="name">
                <label for="name">Name</label> <br>
                <input type="text" name="name" placeholder="Enter your name" maxlength="50">
                <p class="error"><i id="name-error"></i></p>
            </div>

            <div class="email">
                <label for="email">Email</label> <br>
                <input type="email" name="email" placeholder="Enter your email" maxlength="100">
                <p class="error"><i id="email-error"></i></p>
            </div>

            <div class="mobile">
                <label for="mobile">Mobile No</label> <br>
                <input type="tel" name="mobile" placeholder="Enter your mobile no" maxlength="10">
                <p class="error"><i id="mobile-error"></i></p>
            </div>

            <div class="sub">
                <label for="sub">Subject</label> <br>
                <select name="sub">
                    <option value="" disabled selected>Select subject</option>
                    <option value="info">Getting information</option>
                    <option value="tech">Technical issue</option>
                    <option value="pay">Payment issue</option>
                    <option value="serv">Service issue</option>
                    <option value="other">Other</option>
                </select>
                <p class="error"><i id="sub-error"></i></p>
            </div>

            <div class="msg">
                <label for="msg">Message</label> <br>
                <textarea name="msg" rows="4" placeholder="Enter your message..." maxlength="200"></textarea>
                <p class="error"><i id="msg-error"></i></p>
            </div>

            <div class="btn">
                <button><span></span>Send</button>
            </div>
        </form>
    </div>

    <div class="footer">
        <p>© 2022, All rights reserved by TapToBus Cooperation Pvt. Ltd.<br>
            No: 1001, Reid Avenue, Colombo 7, Sri Lanka.</p>
    </div>

    <script src="./js/contact-us.js"></script>
</body>
</html>