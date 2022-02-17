<?php

if (isset($_POST['simpan'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $bind = $_POST['bind'];
    $bing = $_POST['bing'];
    $mtk = $_POST['mtk'];
    $prd = $_POST['prd'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Data Siswa Kelas XI RPL 1</h2>
        <table border="1">
            <tr>
                <th>Nis</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Bahasa Indonesia</th>
                <th>Bahasa Inggris</th>
                <th>Matematika</th>
                <th>Produktif</th>
                <th>Total Nilai</th>
                <th>Rata -  rata</th>
                <th>Keterangan</th>
            </tr>
            <?php

for ($a = 0; $a < count($nis); $a++) {

    ?>
            <tr>
                <td><?php echo $nis[$a]; ?></td>
                <td><?php echo $nama[$a]; ?></td>
                <td><?php echo $kelas[$a]; ?></td>
                <td><?php echo $bind[$a]; ?></td>
                <td><?php echo $bing[$a]; ?></td>
                <td><?php echo $mtk[$a]; ?></td>
                <td><?php echo $prd[$a];?></td>
                <td><?php echo
                    $nilai = $bind[$a] + $bing[$a] + $mtk[$a] + $prd[$a];
                    $nilai;
                ?>
                </td>
                <td><?php echo$rata = $nilai/4;
                            $rata;
                ?></td>
                <td><?php if ($rata >= 75){
                   echo "Lulus";
                }else if($rata <= 74){
                   echo "Tidak Lulus";
                }} 
                ?></td>
            </tr>
            </tr>
        </table>
    </center>
</body>
</html>