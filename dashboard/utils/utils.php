<?php
class Utils{

    public function message($message)
    {
        echo "<script>document.getElementById('message').innerText='".$message."'</script>";
    }

    // public function sendMail($to,$subject,$message)
    // {
    //     $mail = new PHPMailer();
    //     $mail->IsSMTP();
    //     $mail->SMTPAuth = true;
    //     $mail->SMTPSecure ="ssl";
    //     $mail->Host = "smtp.gmail.com";
    //     $mail->Port = "465";
    //     $mail->Username="";
    //     $mail->Password ="";
    //     $mail->From="";
    //     $mail->FromName=""
    //     $mail_status = mail($to,$subject,$message);
    //     if ($mail_status==true) {
    //         return "Message sent Successfully...";
    //     }
    //     return "Message could not be sent...";
    // }
    
}
?>