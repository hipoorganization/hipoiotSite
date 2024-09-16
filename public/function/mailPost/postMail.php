<?php
function postMail($mesaj, $tel, $email, $adSoyad)
{
	$Body = '<html><head><title></title><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head><body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"><table border="0" cellspacing="0" cellpadding="0" style="font-family:Arial, Helvetica, sans-serif; font-size:13px;"><tr><td width="80" height="26" style="color:#cd1314;font-weight:bold;" valign="top">Ad Soyad</td><td width="15" valign="top">:</td><td valign="top">'.$adSoyad.'</td></tr><tr><td height="26" style="color:#cd1314; font-weight:bold;" valign="top">E-posta</td><td valign="top">:</td><td valign="top">'.$email.'</td></tr><tr><td height="26" style="color:#cd1314;font-weight:bold;" valign="top">Telefon</td><td valign="top">:</td><td valign="top">'.$tel.'</td></tr><tr><td style="color:#cd1314;font-weight:bold;" valign="top">Mesaj</td><td valign="top">:</td><td valign="top">'.$mesaj.'</td></tr></table></body></html>';
	include('class.phpmailer.php');
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPDebug = 1; // hata ayiklama: 1 = hata ve mesaj, 2 = sadece mesaj
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'tls'; // Güvenli baglanti icin ssl normal baglanti icin tls
	$mail->Host = "mail.altiliprof.com"; // Mail sunucusuna ismi
	$mail->Port = 587; // Gucenli baglanti icin 465 Normal baglanti icin 587
	$mail->IsHTML(true);
	$mail->SetLanguage("tr", "phpmailer/language");
	$mail->CharSet  ="utf-8";
	$mail->Username = "info@altiliprof.com"; // Mail adresimizin kullanicı adi
	$mail->Password = "3gDm6d4!"; // Mail adresimizin sifresi
	
	$mail->SetFrom($email); // Mail attigimizda gorulecek ismimiz
	$mail->AddAddress("info@altiliprof.com", $name); // Maili gonderecegimiz kisi yani alici
	$mail->Subject = "Site İletişim Maili"; // Konu basligi
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
		setcookie("msg","Talebiniz gönderildi. En kısa sürede tarafınıza dönüş sağlanacaktır.",time()+180);
		return 1;
		// $mailPost=1; 
		// echo "Mesaj gonderildi";
	}
	
		

}

?>