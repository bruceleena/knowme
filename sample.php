<?php 

function RandomString()
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randstring = '';
    for ($i = 0; $i < 10; $i++) {
        $randstring .= $characters[rand(0, strlen($characters))];
    }
    return $randstring;
}

$pwd = RandomString();
echo $randstring;

//$err  = "Leena";
//$err .= " Dasnurkar";
//echo $err ;

echo md5($pwd);

$myfile = fopen("nikod_username_pwd.csv", "w") or die("Unable to open file!");
$txt = "John Doe\t".$pwd."\n";
$txt .= "2John Doe\t".$pwd."\n";
$txt .= "3John Doe\t".$pwd."\n";
fwrite($myfile, $txt);
fclose($myfile);


/*'Nikodemus Werk-Vorstand' => '1', 
'Geschäftsführung + Leitung + Controlling' => '2'
'Bereichsleitung + QM' => '3'
'Alle Benutzer' => '4'

$grp1  = array(101 => 1,102 => 2, 103 => 3, 104 => 4 );
$grp2  = array(1 => 101,2 => 102, 3 => 103, 4 => 104 );

//$currgrp = 3;

$id = 103;
echo "Add group ".	$id;
echo "no of group ".$grp1[$id];
for  ($i = $grp1[$id]; $i >=1 ; $i--) {
    echo "<br/>".$grp2[$i];
} */

?>