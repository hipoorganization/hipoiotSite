<?php
function postSignUp($name,$surname,$email,$bank,$username,$regDate)
{
$Body = $name.' '.$surname.' ,Adlı kullanıcı '.$regDate.' tarihinde sistemi kayıt olmuştur. Kullanıcı adı :  '.$username.' Ve Kullandığı Banka :  '.$bank.'.  Yönetim panelinden üyelik işlemlerini kontrol etmeyi unutmayın.';
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
	$mail->Subject = "Yeni Üyelik"; // Konu basligi
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