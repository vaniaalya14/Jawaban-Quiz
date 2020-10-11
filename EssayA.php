<?php
function hitung($string_data) {
    $result = 0;
    $data = (int)$string_data;
    $result = eval($data);
    echo $result;
}
?>