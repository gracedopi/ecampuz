<?php
$aplikasi = array('id', 'gtAkademik', 'gtFinansi', 'gtPerizinan', 'eCampuz', 'eOviz');
$x = count($aplikasi);
$i = 1;
while ($i < $x) {
    echo $aplikasi[$i];
    echo "<br>";
    $i++;
}
