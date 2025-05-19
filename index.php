<?php
echo "Tên sinh viên: Trần Mạnh Tuấn" ;
echo "<br>";
echo "Lớp: 2623CNT05";
echo "<br>";
echo "Môn học: Lập trình web";
?>

<br>
<br>

<?php
$a = 10;
if ($a % 2 == 0 ) {
    echo "Số $a là số chẵn";
} else {
    echo "Số $a là số lẻ";
}
?>

<br>
<br>

<?php
$km = 150;
if ($km = 1) {
    $tien = 15000;
}
elseif (1 < $km && $km <= 5) {
    $tien = 15000 + ($km - 1) * 12000;
}
elseif ( $km > 5) {
    $tien = 15000 + 4 * 12000 + ($km - 5) * 9000;
}
else ( $km > 140); {
    $tien = ( 15000 * $km ) / 0.12;
}
echo "Số km: $km  km<br>";
echo "Tổng tiền taxi: " . number_format($tien, 0, ',', '.') . " đ";
?>