<?php 
  
   $nama_provinsi = array("Aceh" => "11",
                        "sumatra Utara" => "12",
                        "Sumatra Barat" => "13",
                        "riau" => "14",
                        "jambi" => "15",
                        "sumatra selatan" => "16",
                        "bengkulu" => "17",
                        "lampung" => "18",
                        "kepulauan bangka belitung" => "19",
                        "kepulauan riau" => "20",
                        "DKI Jakarta" => "31",
                        "Jawa Barat" => "32" ,
                        "jawa tengah" => "33",
                        "DI Yogyakarta" => "34",
                        "jawa timur" => "35",
                        "banten" => "36",
                        "bali" => "51",
                        "nusa tenggara barat" => "52",
                        "nusa tenggara timur" => "53",
                        "kalimantan barat" => "61",
                        "kalimantan tengah" => "62",
                        "kalimantan selatan" => "63",
                        "kalimantan timur" => "64",
                        "kalimantan utara" => "65",
                        "sulawesi utara" => "71",
                        "sulawesi tengah" => "72",
                        "sulawesi selatan" => "73",
                        "sulawesi tenggara" => "74",
                        "gorontalo" => "75",
                        "sulawesi barat" => "76",
                        "maluku" => "81",
                        "maluku utara" => "82",
                        "papua barat" => "91",
                        "papua" => "94");

  //looping array menggunakan foreach
  echo "<h2> nama provinsi dan idnya menggunakan foreach: </h2>";
  foreach($nama_provinsi as $val => $val_value){
      echo "<i> ID :".$val_value."</i><br><b> nama provinsi : ". $val. "</b> <br>";
  }
  echo "<br>";
  //array top and bottom sesuai kondisi di atas
  
  echo"<br>";
  echo"<h2><b> penggunaan prulangan array top and bottom dalam key value array sesuai kondisi diatas </b></h2><br>";
  
  Print "original\n<br>";
 
  foreach($nama_provinsi as $val => $val_value){
    echo "<i> ID :".$val_value."</i><br><b> nama provinsi : ". $val. "</b> <br>";
}
  print "<br>";
  print "<br>";

print "Move Jawa barat to the top\n";
move_to_top($nama_provinsi, 'DI Yogyakarta');
move_to_top($nama_provinsi, 'DKI Jakarta');
move_to_top($nama_provinsi, 'Jawa Barat');

print "<br>";
print"<br>";
foreach($nama_provinsi as $val => $val_value){
    echo "<i> ID :".$val_value."</i><br><b> nama provinsi : ". $val. "</b> <br>";
}


print "Move Aceh to the bottom\n";
move_to_bottom($nama_provinsi, 'Sumatra Barat');
move_to_bottom($nama_provinsi, 'Aceh');


print "<br>";
print "<br>";
foreach($nama_provinsi as $val => $val_value){
    echo "<i> ID :".$val_value."</i><br><b> nama provinsi : ". $val. "</b> <br>";
}

function move_to_top(&$array, $key){
    $temp = array ($key => $array[$key]);
    unset($array[$key]);
    $array = $temp + $array;
}

function move_to_bottom(&$array, $key){
    $value = $array[$key];
    unset($array[$key]);
    $array [$key] = $value;
}

?>