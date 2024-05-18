<?php
$array = [1, 2, 3 , 4, 5];

echo $array [1];
echo "<br><pre>";
print_r($array);
echo "</pre>";


$umur = ["Wafi" => 23, "dendy" => 16];

echo "<br><pre>";
print_r($umur);
echo "</pre>";

foreach ($umur as $name => $umur) {
    echo "Namanya : $name <br> Umurnya : $umur <br>";


    //array multidimensi
    $buahbuahan = [
        ["nama" => "apel", "warna" => "merah"],
        ["nama" => "mangga", "warna"=> "hijau"],
        ["nama" => "pisang", "warna"=> "kuning"],
        ["nama" => "kesemek", "warna"=> "jingga"],
    ];
}

echo "<br><pre>";
//print_r(buah buahan);
echo "</pre>";


?>

<table>
    <tr>
        <th>nama</th>
        <th>warna</th>
    </tr>
    <?php foreach ($buahbuahan as $buah => $value) { ?>
    <tr>
        <td><?php echo $buah['nama']?> </td>
        <td><?php echo $buah['nama']?> </td>
    </tr>
    <?php }?>
</table>