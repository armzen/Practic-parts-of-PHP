<?php
if(!empty($_POST)){
       $name = $_POST['name'] ;
      $email = $_POST['email'];
      $phone = $_POST['phone'];
    $message = $_POST['message'];
    filter_var($email, FILTER_VALIDATE_EMAIL);
    
       $name = fix_all($name);
      $email = fix_all($email);
      $phone = fix_all($phone);
    $message = fix_all($message);
    
    //echo $name . '<br>', $email .'<br>', $phone .'<br>', $message .'<br>';
}

function fix_all($var) {
    $var = strip_tags($var);
    $var = htmlspecialchars($var);
    $var = stripcslashes($var);
    $var = trim($var);
    return $var;
}

$to = 'armencho85@yandex.com';
$subject = 'Website contact form:'.$name;
$msg_body =  "You have a message from your website.\n\n".
              "Here are the detaiols:\n\n".
              "Name: $name\n\nEmail: $email\n\nPhone: $phone\n\nMessage:\n
              $message";
$header = "From: noreply@domain.com\n";
$header.="Reply-To:$email";

$mail_ok = mail($to, $subject, $msg_body, $header);
if($mail_ok){
    echo "<h4>$name, Your message successfuly sended! </h4>";
}


?>