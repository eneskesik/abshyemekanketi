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

    // Verileri bir veritabanına veya başka bir depolama yöntemine kaydetmek için bu noktada kod ekleyebilirsiniz.
    // Örneğin, MySQL veritabanına veri eklemek için aşağıdaki gibi bir kod kullanabilirsiniz:

    // Veritabanı bağlantısını oluşturun
    $servername = "localhost";
    $username = "kullanici_adi";
    $password = "parola";
    $dbname = "veritabani_adi";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Bağlantıyı kontrol edin
    if ($conn->connect_error) {
        die("Veritabanına bağlanılamadı: " . $conn->connect_error);
    }

    // Veriyi veritabanına ekle
    $sql = "INSERT INTO anket_sonuclari (ad_soyad, email, tarih, ogun, corba, ana_yemek, salata, tatli_meyve)
    VALUES ('$adSoyad', '$email', '$tarih', '$ogun', '$corbaDegerlendirme', '$anaYemekDegerlendirme', '$salataDegerlendirme', '$tatliMeyveDegerlendirme')";

    if ($conn->query($sql) === TRUE) {
        echo "Anket sonucu başarıyla kaydedildi.";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }

    // Veritabanı bağlantısını kapat
    $conn->close();
}
?>
