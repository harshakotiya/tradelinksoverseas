<?php
if(isset($_POST)){
	$name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    $phone=$_REQUEST['phone'];
    if (($name=="")||($email=="")||($message==""))
    {
        echo "All fields are required, please fill again.";
        
    }
    else
    {       
        $to      = 'contact@tradelinksoverseas.com';
        $subject = 'Message sent using your contact form';
        $message = $message."\r\n \r\n Name- ".$name."\r\n Phone- ".$phone;
        $headers = 'From: '.$email . "\r\n" .
        'Reply-To: '.$email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
        
        if(mail($to, $subject, $message, $headers))
        {
            echo 'success';
        } else {
            echo 'failed';
        }
    }
}
?>