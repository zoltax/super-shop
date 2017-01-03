<?php

namespace EMBL\Helpers;


class Email {

    public function send($to, $productName, $productPrice)
    {
        $mail = new \PHPMailer();

        $mail->setFrom('contact@shop.co.uk', 'Super Shop');
        $mail->addAddress($to);     // Add a recipient


        $mail->Subject = 'Order Confirmation';
        $mail->Body    = "Thank you for purchasing " . $productName . " ( ".$productPrice." ). Order will be dispatched soon! ";

        return $mail->send();
    }

}