<?php
	

$UyeAdSoyad='Ekrem Kahraman';
$kod='kod';


error_reporting(0);
$Body = 'Sayın '.$UyeAdSoyad.',<br>Üyeliğinizin kayıt aşaması başarı ile tamamlanmıştır. Sistemimize giriş yapabilmeniz için aşağıdaki bağlantıya tıklayarak hesabınızı onaylayınız.<br><br>Saygılarımızla<br><br>BayatBlog<br><br>Aktivasyon onayı için;<br><a href="http://www.bayatblog.com/aktivasyon/'.$kod.'" target="_blank">http://www.bayatblog.com/aktivasyon/'.$kod.'</a>';


include('class.phpmailer.php');
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 1; // hata ayiklama: 1 = hata ve mesaj, 2 = sadece mesaj
$mail->SMTPAuth = true;
//$mail->SMTPSecure = 'ssl'; // Güvenli baglanti icin ssl normal baglanti icin tls
$mail->Host = "mail.bayatblog.com"; // Mail sunucusuna ismi
$mail->Port = 587; // Gucenli baglanti icin 465 Normal baglanti icin 587
$mail->IsHTML(true);
$mail->SetLanguage("tr", "phpmailer/language");
$mail->CharSet  ="utf-8";
$mail->Username = "uyelik@bayatblog.com"; // Mail adresimizin kullanicı adi
$mail->Password = "Uyelik13579+"; // Mail adresimizin sifresi
$mail->SetFrom("uyelik@bayatblog.com", "BayatBlog"); // Mail attigimizda gorulecek ismimiz
$mail->AddAddress("gokhan@webnof.com"); // Maili gonderecegimiz kisi yani alici
$mail->Subject = "Üyelik Aktivasyon"; // Konu basligi
$mail->Body = $Body; // Mailin icerigi
if(!$mail->Send()){
	echo "Mailer Error: ".$mail->ErrorInfo;
} else {
	echo "Mesaj gonderildi";
}
?>