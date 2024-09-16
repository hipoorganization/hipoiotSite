<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class Index  {
    public function sendEmail($name,$email,$phone,$message,$company)
    {

        $Body = '<html><head><title></title><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head><body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"><table border="0" cellspacing="0" cellpadding="0" style="font-family:Arial, Helvetica, sans-serif; font-size:13px;"><tr><td width="80" height="26" style="color:#cd1314;font-weight:bold;" valign="top">Ad Soyad</td><td width="15" valign="top">:</td><td valign="top">'.$name.'</td></tr><tr><td height="26" style="color:#cd1314; font-weight:bold;" valign="top">E-posta</td><td valign="top">:</td><td valign="top">'.$email.'</td></tr><tr><td height="26" style="color:#cd1314;font-weight:bold;" valign="top">Telefon</td><td valign="top">:</td><td valign="top">'.$phone.'</td></tr><tr><td style="color:#cd1314;font-weight:bold;" valign="top">Mesaj</td><td valign="top">:</td><td valign="top">'.$message.'</td></tr></table></body></html>';
        require_once('public/function/mailPost/class.phpmailer.php');
        require 'public/vendor/phpmailer/phpmailer/src/Exception.php';
        require 'public/vendor/phpmailer/phpmailer/src/PHPMailer.php';
        require 'public/vendor/phpmailer/phpmailer/src/SMTP.php';
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPDebug = 1; // hata ayiklama: 1 = hata ve mesaj, 2 = sadece mesaj
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls'; // Güvenli baglanti icin ssl normal baglanti icin tls
        $mail->Host = "hipoiot.com"; // Mail sunucusuna ismi
        $mail->Port = 587; // Gucenli baglanti icin 465 Normal baglanti icin 587
        $mail->IsHTML(true);
        $mail->SetLanguage("tr", "phpmailer/language");
        $mail->CharSet  ="utf-8";
        $mail->Username = "info@hipoiot.com"; // Mail adresimizin kullanicı adi
        $mail->Password = "57ahTg~36"; // Mail adresimizin sifresi

        $mail->SetFrom($email); // Mail attigimizda gorulecek ismimiz
        $mail->AddAddress("info@hipoiot.com", $name); // Maili gonderecegimiz kisi yani alici
        $mail->Subject = $name; // Konu basligi
        $mail->Body = $Body; // Mailin icerigi
        if(!$mail->Send())
        {
            $error="Bir sorun oluştu. Lütfen daha sonra tekrar deneyin.";
            return 0;
            // $mailPost=0;
            // echo "Mailer Error: ".$mail->ErrorInfo;
        }
        else
        {
            setcookie("mail_cevap","Talebiniz gönderildi. En kısa sürede tarafınıza dönüş sağlanacaktır.",time()+180);
            // $mailPost=1;
            // echo "Mesaj gonderildi";

            $post = [
                "name"=> $name,
                "email"=> $email,
                "phone"=> $phone,
                "message"=>$message,
                "company"=>$company,
            ];

            $bodyJSON = json_encode($post);

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://services.hipoiot.com/contactFormReq");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_POST, TRUE);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $bodyJSON);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

            $response = curl_exec($ch);
            curl_close($ch);
            return $response;
        }
    }
}
