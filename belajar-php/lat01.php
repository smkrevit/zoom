<?php

//   echo "saya belajar php";
//   echo "</br>";
//   echo '<h1><a href="#">Siswa SMKN 2 Buduran</a></h1>';
//   echo '<p>
//   Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic aperiam adipisci voluptas at nobis inventore architecto quasi quisquam ipsam non.
// </p>';

  // echo 10*2;
  $enter = "</br>";
  $tas = "buku pulpen penghapus";
  $piring = "wadah pisang goreng";
  $gelas = "air";
  $timba = "air sumur";
  $botol = "teh";

  echo $tas;
  // echo $enter;
  // echo $timba;
  // echo $enter;
  // echo $botol;

  echo $botol.$enter;
  echo $tas.$enter;

  $p = 5;
  $l = 6;
  $luas =  $p * $l;

  echo "luas persegi panjang dengan panjang = ".$p. " dan lebar = ".$l. " adalah ". $luas;

   

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
    <h1><?php echo $tas; ?></h1>
    <h2>web sekolah smkn 2 buduran </h2>
    <table>
        <thead>
            <tr>
              <th>isi</th>
            </tr>
        </thead>
        <tbody>
              <tr>
                <td> <h2> <?= $piring ." " . $gelas ; ?> </h2> </td>
              </tr>

              <tr>
                <td> <h2> <?= $botol; ?> </h2> </td>
              </tr>

              <tr>
                <td> <h2> <?php echo $timba; ?> </h2> </td>
              </tr>
        </tbody>
    </table>
</body>
</html>