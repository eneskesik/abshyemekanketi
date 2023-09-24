<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Form verilerini al
    $adSoyad = $_POST["ad_soyad"];
    $email = $_POST["email"];
    $tarih = $_POST["tarih"];
    $ogun = $_POST["ogun"];
    $corbaDegerlendirme = $_POST["corba"];
    $anaYemekDegerlendirme = $_POST["ana_yemek"];
    $salataDegerlendirme = $_POST["salata"];
    $tatliMeyveDegerlendirme = $_POST["tatli_meyve"];

    // Verileri bir metin dosyasına yaz
    $dosya = fopen("anket_sonuclari.txt", "a"); // "a" dosyayı açmak ve verileri eklemek için kullanılır

    if ($dosya) {
        // Verileri dosyaya yaz
        fwrite($dosya, "Ad Soyad: $adSoyad\n");
        fwrite($dosya, "E-posta: $email\n");
        fwrite($dosya, "Tarih: $tarih\n");
        fwrite($dosya, "Öğün: $ogun\n");
        fwrite($dosya, "Çorba Değerlendirme: $corbaDegerlendirme\n");
        fwrite($dosya, "Ana Yemek Değerlendirme: $anaYemekDegerlendirme\n");
        fwrite($dosya, "Salata/Yoğurt/Ayran Değerlendirme: $salataDegerlendirme\n");
        fwrite($dosya, "Tatlı/Meyve Değerlendirme: $tatliMeyveDegerlendirme\n");
        fwrite($dosya, "--------------------------------------\n");

        // Dosyayı kapat
        fclose($dosya);

        echo "Anket sonucu başarıyla kaydedildi.";
    } else {
        echo "Dosya açılamadı.";
    }
}
?>
