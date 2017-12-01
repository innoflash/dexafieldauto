<?php
/**
 * Created by PhpStorm.
 * User: BILL
 * Date: 1/26/2017
 * Time: 10:01 PM
 */
if (!isset($_POST['user_name']) || !isset($_POST['user_email']) || !isset($_POST['user_report'])) {
    header('Location: dexa-auto-contact.php');
} else {
    require_once('dexa-common-header.php');
    $user_name = $_POST['name'];
    $user_email = $_POST['email'];
    $user_mobile = $_POST['mobile'];
    $user_report = $_POST['message'];
    $subject = 'Subscription to DexaFieldAuto';

    $to = 'admin@dexafieldauto.co.za';
    $body = $user_report . '."\n\n".(' . $user_email.') ('.$user_mobile.')';
    $headers = 'From: ' . $user_name . ' <'.$user_email.'>';

    if (mail($to, $subject, $body, $headers)) {
        echo '<h3>Hey ' . $user_name . ', we have received your message, we will contact you shortly. Thanks for getting in touch !!!!</h3>';
    } else
        echo '<h2>Connection failure, can`t send you message at the moment</h2>';
    require_once('dexa-footer.php');
}

