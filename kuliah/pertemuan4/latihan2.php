<?php
// sisis kubus a = 9 sisi kubus b = 4
// hitumh total volume kedua kubus
// $sisi_a = 9;
// $sisi_b = 4;
// $volume_a = $sisi_a * $sisi_a * $sisi_a;
// $volume_b = $sisi_b * $sisi_b * $sisi_b;
// $totalAB = $volume_a + $volume_b;

// echo "tolal volume kubus A & B adalah = $totalAB";
// echo "<br>";

// $sisi_c = 10;
// $sisi_d = 15;
// $volume_c = $sisi_c * $sisi_c * $sisi_c;
// $volume_d = $sisi_d * $sisi_d * $sisi_d;
// $totalCD = $volume_c + $volume_d;

// echo "tolal volume kubus C & D adalah = $totalCD";
// echo "<br>";

function total_volume_dua_kubus($a, $b) {
    $volume_a = $a * $a * $a;
    $volume_b = $b * $b * $b;
    $total = $volume_a + $volume_b;

    return $total;
}

echo "total volume kubus A & B = " . total_volume_dua_kubus(9, 4);
echo "<br>";
echo "total volume kubus A & B = " . total_volume_dua_kubus(10, 15);
// return
