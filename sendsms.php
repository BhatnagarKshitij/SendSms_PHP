<?php
/**
 * @author Kshitij Bhatnagar
 * @category SMS
 * @description Request this page with get or post params
 * @param uid = Way2SMS Username
 * @param pwd = Way2SMS Password
 * @param phone = Number to send to. Multiple Numbers separated by comma (,). 
 * @param msg = Your Message ( Upto 140 Chars)
 */

include('way2sms-api.php');
session_start();
if (isset($_SESSION['sender_mobile']) && isset($_SESSION['sender_password']) && isset($_POST['mob']) && isset($_POST['msg'])) {
    $res = sendWay2SMS($_SESSION['sender_mobile'], $_SESSION['sender_password'], $_POST['mob'], $_POST['msg']);
    if (is_array($res)){
        echo $res[0]['result'] ? 'SMS send Successfully' : 'Try Again !!!';
        echo $_SESSION['sender_mobile'].$_SESSION['sender_password'];
        echo $_POST['mob'].$_POST['msg'];
    }
    else{
        echo $res;
    }
    exit;
}
