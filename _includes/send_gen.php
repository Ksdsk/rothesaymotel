<?php

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/home2/smdanang/PHPMailerTest/PHPMailer/src/Exception.php';
require '/home2/smdanang/PHPMailerTest/PHPMailer/src/PHPMailer.php';
require '/home2/smdanang/PHPMailerTest/PHPMailer/src/SMTP.php';

//Create a new PHPMailer instance
$mail = new PHPMailer(true);

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
//SMTP::DEBUG_OFF = off (for production use)
//SMTP::DEBUG_CLIENT = client messages
//SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = 0;
$mail->do_debug = 0;

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
//Use `$mail->Host = gethostbyname('smtp.gmail.com');`
//if your network does not support SMTP over IPv6,
//though this may cause issues with TLS

//Set the SMTP port number:
// - 465 for SMTP with implicit TLS, a.k.a. RFC8314 SMTPS or
// - 587 for SMTP+STARTTLS
$mail->Port = 465;

//Set the encryption mechanism to use:
// - SMTPS (implicit TLS on port 465) or
// - STARTTLS (explicit TLS on port 587)
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'rothesaymotelnoreply@gmail.com';

//Password to use for SMTP authentication
$mail->Password = 'ynx8p2cr';

//Set who the message is to be sent from
//Note that with gmail you can only use your account address (same as `Username`)
//or predefined aliases that you have configured within your account.
//Do not use user-submitted addresses in here
$mail->setFrom('rothesaymotelnoreply@example.com', 'No Reply');

//Set an alternative reply-to address
//This is a good place to put user-submitted addresses
$mail->addReplyTo($_POST["email"], $_POST["fname"].' '.$_POST["lname"]);

//Set who the message is to be sent to
$mail->addAddress('rothesaymotel@gmail.com', 'K.K.');

//Set the subject line
$mail->Subject = 'New Inquiry From '.$_POST["fname"];

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
// $mail->msgHTML(file_get_contents('content.html'), __DIR__);

//Replace the plain text body with one created manually
$mail->Body = 'Name: '.$_POST["fname"].' '.$_POST["lname"].nl2br('<br>Phone Number: ').$_POST["phone"]
            .nl2br('<br>Email: ').$_POST["email"].nl2br('<br>Message: <br>').nl2br($_POST["inquiry"]);
$mail->AltBody = 'Name: '.$_POST["fname"].' '.$_POST["lname"].nl2br('\n Phone Number: ').$_POST["phone"]
                .nl2br('\n Email: ').$_POST["email"].nl2br('\n Message: \n').nl2br($_POST["inquiry"]);

//send the message, check for errors
if (!$mail->send()) {
    // echo 'Mailer Error: ' . $mail->ErrorInfo;
    header('Location: ../contact-us?failure');

} else {
    // echo 'Message sent!';
    header('Location: ../contact-us?success');
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}



//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
// function save_mail($mail)
// {
//     //You can change 'Sent Mail' to any other folder or tag
//     $path = '{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail';

//     //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
//     $imapStream = imap_open($path, $mail->Username, $mail->Password);

//     $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
//     imap_close($imapStream);

//     return $result;
// }