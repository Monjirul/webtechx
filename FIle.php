<?php
$Ema_name=$_GET['Ema_name'];
$Ema_country=$_GET['Ema_country'];

$my_file = 'Stage2F.txt';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);

$MainString=$Ema_name."\n"."\r".$Ema_country;
//echo $data;
fwrite($handle,$MainString);

$array1=array();
$array2=array();
$array2[0]="Name Of Emergency Contact";
$array2[1]="Country Of Emergency Contact";

$file = "./Stage2F.txt";
$test1=file_get_contents($file);
$lines = explode ("\n",$test1);

//foreach($lines as $newline)
//{
	//echo '<b>' . $newline .'</b><br>';
//}
foreach ($lines as $line_num => $file) {
    $array1{$line_num} = htmlspecialchars($file) ;
	//  echo "array1{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
}

for($i=0;$i<2;$i++)
{
	echo $array2[$i]." : ".$array1[$i]."<br>";
	
}

?>