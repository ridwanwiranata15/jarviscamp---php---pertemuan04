
<?php 
    $array = [1, 2, 3, 4, 5];

    echo "<br>";
    print_r($array);
    echo "</pre>";
    echo "<br>";

    $umur = ["wadi" => 24, "alex" => 12];
    $umur["mamat"] = 20;
    $umur["mumun"] = 24;
    print_r($umur);
    echo "<br>";
    foreach($umur as $key => $value){
        echo "Namanya :  $key <br> umurnya $value <br>";
    }

    $buah_buahan = [
        ["nama" => "apel", "warna" => "merah"],
        ["nama" => "mangga", "warna" => "kuning"],
        ["nama" => "duren", "warna" => "kuning"],
        ["nama" => "kesemek", "warna" => "jingga"]
    ]; 
    echo "<br>";
    // print_r($buah_buahan);

    echo "</pre>";
?>
<table>
    <tr>
        <th>Nama</th>
        <th>Warna</th>
    </tr>
    <?php 
        foreach($buah_buahan as $buah){?> 
            <tr>
                <th><?php echo $buah['nama'] ?></th>
                <th><?php echo $buah['warna'] ?></th>
            </tr>
        <?php } 
        ?>
   
</table>