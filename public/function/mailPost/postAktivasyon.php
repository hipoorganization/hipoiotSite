<?php
function postAktivasyon($name, $code, $email, $url)
{
	$Body = 'Sayın '.$name.',<br>Üyeliğinizin kayıt aşaması başarı ile tamamlanmıştır. Sistemimize giriş yapabilmeniz için aşağıdaki bağlantıya tıklayarak hesabınızı onaylayınız.<br><br>Saygılarımızla<br><br>'.$wpName.'<br><br>Aktivasyon onayı için;<br><a href="'.$url.'/'.$code.'" target="_blank">'.$url.'/'.$code.'</a>';
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
	
	$mail->SetFrom("info@altiliprof.com", "'.$wpName.'"); // Mail attigimizda gorulecek ismimiz
	$mail->AddAddress($email, $name); // Maili gonderecegimiz kisi yani alici
	$mail->Subject = "Üyelik Aktivasyon"; // Konu basligi
	$mail->Body = $Body; // Mailin icerigi
	if(!$mail->Send())
	{
		return 0;
		// $mailPost=0; 
		// echo "Mailer Error: ".$mail->ErrorInfo;
	}
	else 
	{
		return 1;
		// $mailPost=1; 
		// echo "Mesaj gonderildi";
	}
	
		

}

?>