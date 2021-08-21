<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- TODO: Add Page Title -->
  <title>Tulip Retreats | Responsive HTML Template</title>

  <!-- TODO: Add Meta Tags -->
  <meta name="author" content="Samita Mondal">
  <meta name="description" content="Template created by Samita Monda, CEO & Founder at Redmonk Studios">
  <meta name="keywords" content="samita, littlemissbot, samita mondal, samitalinx, connect2samita, redmonk, redmonk studios, web developer, freelancer">

  <!-- STYLESHEETS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha256-L/W5Wfqfa0sdBNIKN9cG6QA5F2qx4qICmU2VgLruv9Y=" crossorigin="anonymous" />
  <link rel="stylesheet" href="styles/custom.css">

  <!-- TODO: Add Favicon -->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body>
    <main>
        <section class="no-wrapper">
            <div class="d-flex flex-column justify-content-center align-items-center text-center min-vh-100">
            <a class="navbar-brand mb-3" href="index.html">tulip<strong>retreats</strong></a>
                <?php
                    if(isset($_POST['email_address'])) {
                    // TODO: EDIT THE 2 LINES BELOW AS REQUIRED
                    $email_to = "enquire@redmonk.in";
                    $email_subject = "Tulip Retreats | Responsive HTML Template";

                    $email_from = $_POST['email_address'];
                    $Message = $_POST['message'];

                    $Message = $Message . "\r\n\r\n Email: " . $email_from;
                    $Message = wordwrap($Message, 70, "\r\n");

                    $Header = // 'To:'. $ToEmail . "\r\n" .
                              'From:'. $email_from . "\r\n" .
                              'Reply-To:'. $email_from . "\r\n" .
                              'MIME-Version: 1.0' . "\r\n";
                              // 'Content-type: text/html; charset=iso-8859-1';

                    $MailSent = mail($email_to, $email_subject, $Message, $Header);

                    if ($MailSent) {
                ?>
                <h2 class="mb-md-5 mb-0">Your mail was successfully sent <br> <span class="display-2 fw-bold">Thank you!</span></h2>
                <p class="mt-2 text-muted">Our team will reach out to you shortly. Meanwhile you can visit our website at <a href="https://redmonk.in">redmonk.in</a></p>
                <?php
                    } else {
                ?>
                <h2 class="mb-md-5 mb-0">Couldn't send your email <br> <span class="display-2 fw-bold">Sorry!</span></h2>
                <p class="mt-2 text-muted">Something went wrong. Server failed to send email, please try again after sometime.</p>
                <?php
                    }
                } else {
                ?>
                <h2 class="mb-md-5 mb-0">Couldn't send your email <br> <span class="display-2 fw-bold">Sorry!</span></h2>
                <p class="mt-2 text-muted">Email address is invalid or empty, please enter correct email.</p>
                <?php
                }
                ?>
            </div>
        </section>
    </main>

    <!-- STYLESHEETS -->
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.9.55/css/materialdesignicons.min.css"
    integrity="sha512-vIgFb4o1CL8iMGoIF7cYiEVFrel13k/BkTGvs0hGfVnlbV6XjAA0M0oEHdWqGdAVRTDID3vIZPOHmKdrMAUChA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- JAVASCRIPT -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha256-WqU1JavFxSAMcLP2WIOI+GB2zWmShMI82mTpLDcqFUg=" crossorigin="anonymous"></script>
  <script src="scripts/custom.js"></script>
</body>

</html>