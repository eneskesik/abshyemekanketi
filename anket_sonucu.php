<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ad_soyad = $_POST["ad_soyad"];
    $email = $_POST["email"];
    $tarih = $_POST["tarih"];
    $ogun = $_POST["ogun"];
    $corba = $_POST["corba"];
    $ana_yemek = $_POST["ana_yemek"];
    $salata = $_POST["salata"];
    $tatli_meyve = $_POST["tatli_meyve"];

    // Verileri işleme ve e-posta gönderme kodunu burada ekleyebilirsiniz

    // Örneğin, e-posta gönderme işlemi için PHP'nin mail() fonksiyonunu kullanabilirsiniz.
    $alici_email = "eneskesik@gmail.com"; // E-postayı alacak kişinin e-posta adresi
    $gonderen_ad = $ad_soyad;
    $gonderen_email = $email;
    $mesaj = "Tarih: $tarih\n";
    $mesaj .= "Öğün: $ogun\n";
    $mesaj .= "Çorba Puanı: $corba\n";
    $mesaj .= "Ana Yemek Puanı: $ana_yemek\n";
    $mesaj .= "Salata/Yoğurt/Ayran Puanı: $salata\n";
    $mesaj .= "Tatlı/Meyve Puanı: $tatli_meyve\n";

    $baslik = "Anket Cevabı";
    $gonderildi = mail($alici_email, $baslik, $mesaj, "From: $gonderen_ad <$gonderen_email>");

    if ($gonderildi) {
        echo "Anket cevabınız başarıyla gönderildi. Teşekkür ederiz!";
    } else {
        echo "Anket cevabınız gönderilemedi. Lütfen daha sonra tekrar deneyin.";
    }
}
?>
