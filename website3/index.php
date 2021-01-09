<?php

    // message vars

    $msg = '';
    $msgClass = '';

    // check for submit

    if(filter_has_var(INPUT_POST, 'submit')){
        // get form data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // check Required fields
        if (!empty($email) && !empty($name) && !empty($message)) {
            // passed
            // check email

            if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
                //FAIL
                $msg = "Please fill in a valid email";
                $msgClass = 'alert-danger';
            } else {
                // pass
                // recepient email

                $toEmail = 'thando.mini@yoyowallet.com';
                $subject = 'Contact Request From '.$name;
                $body = '<h2>Contact Request</h2>
                        <h4>Name</h4><p>'.$name.'</p>
                        <h4>Email</h4><p>'.$email.'</p>
                        <h4>Message</h4><p>'.$message.'</p>';

                // Email headers
                $headers = "MIME-Version: 1.0"."\r\n";
                $headers .= "Content-Type:text/html;charset=UTF-8"."\r\n";

                // additional headers
                $headers .= "From: ".$name. "<".$email.">"."\r\n";

                if (mail($toEmail, $subject, $body, $headers)){
                    // Email Sent
                    $msg = 'Your email has been sent';
                    $msgClass = 'alert-success';
                } else {
                    // fail
                    $msg = 'Your email was not sent';
                    $msgClass = 'alert-danger';
                }
            }
        } else {
            // failed
            $msg = 'Please fill in all fields';
            $msgClass = 'alert-danger';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/cosmo/bootstrap.min.css">
</head>
<body>

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">My Website</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php if ($msg != ''): ?>
            <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
        <?php endif; ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : '' ?>">
            </div>
            <div class="form-group">
                <label for="message">Message</label><br>
                <textarea name="message" class="forn-control" id="" cols="30" rows="10"><?php echo isset($_POST['message']) ? $message : '' ?></textarea>
            </div>

            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
</body>
</html>