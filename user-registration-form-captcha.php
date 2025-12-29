<?php
use Phppot\Member;
if (!empty($_POST["signup-btn"])) {
    require_once './Model/Member.php';
    $member = new Member();

    // Server-side reCAPTCHA validation
    $captcha = $_POST['g-recaptcha-response'];
    $key = '6Lf4BBsqAAAAAH4wz-fkiR1s7y32tcQSfpuP2ON7';  // Replace with your actual reCAPTCHA secret key
    #$key = '6LfP6DksAAAAAHUN6qwpVbGqdeQKI_UGnQWdoOWB';  // Replace with your actual reCAPTCHA secret key
    $url = 'https://www.google.com/recaptcha/api/siteverify';

    // Verify reCAPTCHA with Google
    $response = file_get_contents($url . '?secret=' . $key . '&response=' . $captcha);
    $responseKeys = json_decode($response, true);

    if (intval($responseKeys["success"]) !== 1) {
        $registrationResponse = ["status" => "error", "message" => "Please complete the reCAPTCHA."];
    } else {
        // Proceed with registration if reCAPTCHA is successful
        $registrationResponse = $member->registerMember();
    }
}

?>
<HTML>
<HEAD>
    <TITLE>Registration</TITLE>
    <link href="./assets/css/phppot-style.css" type="text/css" rel="stylesheet" />
    <link href="./assets/css/user-registration.css" type="text/css" rel="stylesheet" />
    <script src="./vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
</HEAD>
<BODY>

<div class="phppot-container">
    <div class="sign-up-container">
        <div class="login-signup">
            <a href="index.php">Home</a>
        </div>
        <div class="">
            <form name="sign-up" action="" method="post" onsubmit="return validateForm()">
                <div class="signup-heading">Registration</div>
                <?php
                if (!empty($registrationResponse["status"])) {
                    ?>
                    <?php
                    if ($registrationResponse["status"] == "error") {
                        ?>
                        <div class="server-response error-msg"><?php echo $registrationResponse["message"]; ?></div>
                        <?php
                    } else if ($registrationResponse["status"] == "success") {
                        ?>
                        <div class="server-response success-msg"><?php echo $registrationResponse["message"]; ?></div>
                        <?php
                    }
                    ?>
                    <?php
                }
                ?>

                <div class="error-msg" id="error-msg"></div>
                <!-- Form fields here -->
                <div class="row">
                    <div class="inline-block">
                        <div class="form-label">
                            Username<span class="required error" id="username-info"></span>
                        </div>
                        <input class="input-box-330" type="text" name="username" id="username">
                    </div>
                </div>

                <div class="row">
                    <div class="inline-block">
                        <div class="form-label">
                            Name<span class="required error" id="name-info"></span>
                        </div>
                        <input class="input-box-330" type="name" name="name" id="name">
                    </div>
                </div>
                <div class="row">
                    <div class="inline-block">
                        <div class="form-label">
                            Institution<span class="required error" id="instit-info"></span>
                        </div>
                        <input class="input-box-330" type="instit" name="instit" id="instit">
                    </div>
                </div>
                <div class="row">
                    <div class="inline-block">
                        <div class="form-label">
                            Department<span id="dept-info"></span>
                        </div>
                        <input class="input-box-330" type="dept" name="dept" id="dept">
                    </div>
                </div>
                <div class="row">
                    <div class="inline-block">
                        <div class="form-label">
                            Email<span class="required error" id="email-info"></span>
                        </div>
                        <input class="input-box-330" type="email" name="email" id="email">
                    </div>
                </div>
                <div class="row">
                    <div class="inline-block">
                        <div class="form-label">
                            Password<span class="required error" id="signup-password-info"></span>
                        </div>
                        <input class="input-box-330" type="password"
                               name="signup-password" id="signup-password">
                    </div>
                </div>
                <div class="row">
                    <div class="inline-block">
                        <div class="form-label">
                            Confirm Password<span class="required error"
                                                  id="confirm-password-info"></span>
                        </div>
                        <input class="input-box-330" type="password"
                               name="confirm-password" id="confirm-password">
                    </div>
                </div>
                <div class="g-recaptcha" data-sitekey="6Lf4BBsqAAAAAMVvcqeLEkTrtHbmB4oy-8IP_NyW"></div>



                <div class="row">
                    <input class="sign-up-btn" type="submit" name="signup-btn" id="signup-btn" value="Sign up">
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function validateRecaptcha() {
        const recaptchaResponse = document.querySelector('.g-recaptcha-response').value;
        if (!recaptchaResponse) {
            alert("Please complete the reCAPTCHA before submitting.");
            return false;  // Prevent form submission
        }
        return true;  // Allow form submission
    }

    function signupValidation() {
        var valid = true;

        $("#username").removeClass("error-field");
        $("#name").removeClass("error-field");
        $("#instit").removeClass("error-field");
        $("#dept").removeClass("error-field");
        $("#email").removeClass("error-field");
        $("#password").removeClass("error-field");
        $("#confirm-password").removeClass("error-field");

        var UserName = $("#username").val();
        var name = $("#name").val();
        var instit = $("#instit").val();
        var dept = $("#dept").val();
        var email = $("#email").val();
        var Password = $('#signup-password').val();
        var ConfirmPassword = $('#confirm-password').val();
        var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

        $("#username-info").html("").hide();
        $("#name-info").html("").hide();
        $("#instit-info").html("").hide();
        $("#dept-info").html("").hide();
        $("#email-info").html("").hide();

        if (UserName.trim() == "") {
            $("#username-info").html("required.").css("color", "#ee0000").show();
            $("#username").addClass("error-field");
            valid = false;
        }
        if (name.trim() == "") {
            $("#name-info").html("required.").css("color", "#ee0000").show();
            $("#name").addClass("error-field");
            valid = false;
        }
        if (instit.trim() == "") {
            $("#instit-info").html("required.").css("color", "#ee0000").show();
            $("#instit").addClass("error-field");
            valid = false;
        }
        if (email == "") {
            $("#email-info").html("required").css("color", "#ee0000").show();
            $("#email").addClass("error-field");
            valid = false;
        } else if (email.trim() == "") {
            $("#email-info").html("Invalid email address.").css("color", "#ee0000").show();
            $("#email").addClass("error-field");
            valid = false;
        } else if (!emailRegex.test(email)) {
            $("#email-info").html("Invalid email address.").css("color", "#ee0000")
                .show();
            $("#email").addClass("error-field");
            valid = false;
        }
        if (Password.trim() == "") {
            $("#signup-password-info").html("required.").css("color", "#ee0000").show();
            $("#signup-password").addClass("error-field");
            valid = false;
        }
        if (ConfirmPassword.trim() == "") {
            $("#confirm-password-info").html("required.").css("color", "#ee0000").show();
            $("#confirm-password").addClass("error-field");
            valid = false;
        }
        if (Password != ConfirmPassword) {
            $("#error-msg").html("Both passwords must be same.").show();
            valid = false;
        }
        if (valid == false) {
            $('.error-field').first().focus();
            valid = false;
        }
        return valid;

        if (isset($_POST['g-recaptcha-response'])) {
            // RECAPTCHA SETTINGS
            $captcha = $_POST['g-recaptcha-response'];
            $ip = $_SERVER['REMOTE_ADDR'];
            $key = 'mykey';
            $url = 'https://www.google.com/recaptcha/api/siteverify';

            // RECAPTCH RESPONSE
            $recaptcha_response = file_get_contents($url.
            '?secret='.$key.
            '&response='.$captcha.
            '&remoteip='.$ip
        )
            ;
            $responseKeys = json_decode($recaptcha_response, true);

            if (intval($responseKeys["success"]) !== 1) {
                // Failed reCAPTCHA
                echo "<p>Please complete the reCAPTCHA.</p>";
            } else {
                // reCAPTCHA successful, proceed with form handling
                echo "<p>reCAPTCHA completed successfully!</p>";

            }
        }

    }

    function validateForm() {
        // Run both validations
        return validateRecaptcha() && signupValidation();
    }
</script>

</BODY>
</HTML>
