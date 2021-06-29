<?php 
    $to = $sessionArr["email"];
    $amt = $sessionArr["amt"];
    $subject = "Yogdaan Donation";
    $message = "Thank you for the kind donation of Rs ".$amt." to Yogdaan Foundation. Your contribution will have a huge impact on this fight of saving lives impacted due to COVID";

    mail($to, $subject, $message);
    echo "Message Sent";
?>