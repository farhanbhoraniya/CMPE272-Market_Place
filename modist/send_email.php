<?php
    function send_email($to, $subject, $message) {
        echo $to;
        echo $subject;
        echo $message;
        $retval = mail($to, $subject, $message);
        if( $retval == true ) {
            return true;
        }else {
            return false;
        }
    }
?>