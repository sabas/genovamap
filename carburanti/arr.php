<?php
$f=file_get_contents("benzinaiGe.csv.json");
$j=json_decode($f,true);

$na=[];
foreach($j as $b){
$na[$b['id']]=['lat'=>$b['lat'],'lon'=>$b['lon'],'bnd'=>$b['bnd'],'sameAs'=>$b['sameAs']];
}
echo json_encode($na);
?>
