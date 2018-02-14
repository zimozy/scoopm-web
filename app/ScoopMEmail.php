<?php

namespace scoopm;

abstract class ScoopMEmail {

    private $subject;
    private $body;
    private $altBody;
    
    public function __construct($address, $name) {
        $this->address = $addressto;
        $this->name    = $name;
    }

    public function send() {
        
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions

        try {
            //Server settings
            $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'user@example.com';                 // SMTP username
            $mail->Password = 'secret';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('hello@scoopm.com', 'ScoopM');
            $mail->addAddress($this->address, $this->name);     // Add a recipient; name argument is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $this->subject;
            $mail->Body    = $this->body;
            $mail->AltBody = $this->altBody;

            $mail->send();
            // echo 'Message has been sent';

        } catch (Exception $e) {
            // echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
        
    }

}