<?php 
require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/Exception.php";
// include"PHPMailer/src/OAuth.php";
// include"PHPMailer/src/POP3.php";
require "PHPMailer/src/SMTP.php";
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class Mailer{
	$tieude = "TESST";
	$noidung = "Khong co gi";
	$maildathang = 'hoangxuan140202014@gmail.com';
	public function dathangmail($tieude,$noidung,$maildathang){
	print_r($mail);
		$mail = new PHPMailer(true);
		$mail->CharSet = 'UTF-8';
		try {
		    //Server settings
		    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
		    $mail->isSMTP();                                      // Set mailer to use SMTP
		    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		    $mail->SMTPAuth = true;                               // Enable SMTP authentication
		    $mail->Username = 'dh51800203@student.stu.edu.vn';                 // SMTP username
		    $mail->Password = 'XuanNgoc06051905';                           // SMTP password 
		    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		    $mail->Port = 465;                                    // TCP port to connect to
		 
		    //Recipients
		    $mail->setFrom('dh51800203@student.stu.edu.vn', 'Mailer');
		    
		    $mail->addAddress('hoangxuan140202014@gmail.com', 'Hoang Huy');     // Add a recipient
		    $mail->addAddress($maildathang,'Hoàng Kha');  
		    // Name is optional
		    // $mail->addReplyTo('info@example.com', 'Information');
		    $mail->addCC('dh51800203@student.stu.edu.vn');
		    // $mail->addBCC('bcc@example.com');
		 
		    //Attachments
		    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
		 
		    //Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = "Tesst";
		    $mail->Body    = "Tesst noi dung";
		    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		 
		    $mail->send();
		    echo 'Đã gửi';

		} catch (Exception $e) {

		    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		}
	}
}
?>