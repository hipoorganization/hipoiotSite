<?php
function postSifreHatirlat($name, $kod, $email, $url){
$Body = '<html><head><title>Şifre Değişikliği</title><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head><body bgcolor="#e9eaed" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"><table border="0" cellspacing="0" cellpadding="0" width="670" align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; line-height:20px; padding:0; background:#FFF; border-bottom:1px solid #d0d1d5;"><tr><td colspan="3" height="15" style="line-height:1px;font-size:1px;background:#0077b3;">&nbsp;</td></tr><tr><td width="12" style="background:#0077b3;">&nbsp;</td><td width="646" style="background:#0077b3;"><table border="0" cellspacing="0" cellpadding="0" width="646"><tr><td width="476"><a href="http://www.osgbbul.com" target="_blank"><img border="0" src="http://www.osgbbul.com/theme1/img/logo-white.png" width="170" height="28"></a></td><td width="170" height="27" style="color:#fff; font-family:Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; text-align:center;">Şifre Değişikliği <a href="http://www.ceptebakicim.com" target="_blank" style="color:#FFF; text-decoration:none;">www.osgbbul.com</a></td></tr></table></td><td width="12" style="background:#0077b3;">&nbsp;</td></tr><tr><td colspan="3" height="15" style="line-height:1px;font-size:1px;background:#0077b3;">&nbsp;</td></tr><tr><td colspan="3" height="12" style="line-height:1px;font-size:1px;">&nbsp;</td></tr><tr><td width="12">&nbsp;</td><td colspan="2" height="12" style="font-size:14px; font-weight:700; color:#d92b2b;">Sayın '.$name.',</td></tr><tr><td colspan="3" height="8" style="line-height:1px;font-size:1px;">&nbsp;</td></tr><tr><td width="12">&nbsp;</td><td width="646" style="color:#333; font-weight:400; font-size:14px; line-height:24px; font-family:Arial, Helvetica, sans-serif;">Aşağıdaki bağlantıya tıklayarak hesabınıza yeni şifre belirleyebilirsiniz.<br>Yeni şifre belirlemek için;<br></td><td width="12">&nbsp;</td></tr><tr><td colspan="3" height="8" style="line-height:1px;font-size:1px;">&nbsp;</td></tr><tr><td width="12">&nbsp;</td><td colspan="2" height="12"><a href="'.$url.'/'.$kod.'" target="_blank" style="font-size:14px; color:#d92b2b; text-decoration:none; line-height: 1.42857143; font-weight:400;">'.$url.'/'.$kod.'</a></td></tr><tr><td colspan="3" height="14" style="line-height:1px;font-size:1px;">&nbsp;</td></tr><tr><td colspan="3" height="12" style="line-height:1px;font-size:1px;background:#f9f9f9; border-top:1px solid #eee;">&nbsp;</td></tr><tr><td width="12" style="background:#f9f9f9;">&nbsp;</td><td width="646" style="background:#f9f9f9;"><table border="0" width="646" cellspacing="0" cellpadding="0" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; line-height:20px;"><tr><td width="250">&nbsp;</td><td width="146" height="40" style="background:#008bc4; text-align:center; line-height:1px;font-size:1px;"><a href="'.$url.'/'.$/kod.'" target="_blank" style="font-size:14px; color:#FFF; text-decoration:none; font-weight:bold; line-height: 1.42857143;">Yeni Şifre Oluştur</a></td><td width="250">&nbsp;</td></tr></table></td><td width="12" style="background:#f9f9f9;">&nbsp;</td></tr><tr><td colspan="3" height="12" style="line-height:1px; font-size:1px; background:#f9f9f9;">&nbsp;</td></tr></table></body></html>';

include('class.phpmailer.php');
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 1; // hata ayiklama: 1 = hata ve mesaj, 2 = sadece mesaj
$mail->SMTPAuth = true;
//$mail->SMTPSecure = 'ssl'; // Güvenli baglanti icin ssl normal baglanti icin tls
$mail->Host = "mail.ceptebakicim.com"; // Mail sunucusuna ismi
$mail->Port = 587; // Gucenli baglanti icin 465 Normal baglanti icin 587
$mail->IsHTML(true);
$mail->SetLanguage("tr", "phpmailer/language");
$mail->CharSet  ="utf-8";
$mail->Username = "info@ceptebakicim.com"; // Mail adresimizin kullanicı adi
$mail->Password = "bakicimcepte2018"; // Mail adresimizin sifresi

$mail->SetFrom("info@ceptebakicim.com", "Cepte Bakıcım"); // Mail attigimizda gorulecek ismimiz
$mail->AddAddress($email, $name); // Maili gonderecegimiz kisi yani alici
$mail->Subject = "Şifre Değişikliği"; // Konu basligi
$mail->Body = $Body; // Mailin icerigi
if(!$mail->Send()){return 0;}else{return 1;}
}
?>
