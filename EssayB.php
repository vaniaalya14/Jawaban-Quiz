<?php
function perolehan_medali($negara){
    foreach($medali as $negara => $nama_negara, $perak => $jumlah_perak, $emas => $jumlah_emas) {
        echo $negara . "=" . $nama_negara;
        echo "<br>";
        echo $perak . "=" . $jumlah_perak;
        echo "<br>";
        echo $emas . "=" . $jumlah_emas;
        echo "<br>";
      }
}
?>