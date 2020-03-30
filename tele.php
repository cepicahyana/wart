<?php
$nama = "cepicahyana";
$to = "cahyanacepi@gmail.com";
$subject = "sub";
$messages = "halo";
    
$headers = 'From: cepi@divisionit.co.id' . "rn"; //bagian ini diganti sesuai dengan email dari pengirim
@mail($to, $subject, $messages, $headers.php);
if(@mail) 
{
    echo "pengiriman berhasil";
}
else 
{
    echo "pengiriman gagal";
}
?>