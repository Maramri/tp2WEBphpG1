<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$matieres=["java"=>[14,15],"html"=>[13,18],"php"=>[17,15]];
$etudiants=[
    "ali"=>["java"=>[14,5],"html"=>[13,15],"php"=>[17,14]],
    "salah"=>["java"=>[12,13],"html"=>[10,14.5],"php"=>[13,4]],
    "sami"=>["java"=>[10,15],"html"=>[13.5,18],"php"=>[15,19]]
    ];

    function affiche ($tab){
echo"<pre>";
print_r($tab);
echo"</pre>";

    }

//affiche($etudiants)

$tab5=["java","html","js","css","angular","nodejs"];
echo"<table border='1'>";
for($i=0;$i<sizeof($tab5);$i++)
{
    echo"<tr><td>$tab5[$i]</td></tr>";
}
echo"</table>";

$tab6=["java"=>[14,15,8],"html"=>[12.5,15,11],"js"=>[19.25,13,17],"css"=>[12,17,15],"angular"=>[8,14,13],"nodejs"=>[12,10,12]];
  
  echo"<table border='1'>
  <tr>
  <th> nom matiere </th>
  <th> N1</th>
  <th>N2</th>
  <th>N3</th>
  <th>Moyenne</th>
</tr>";
//echo "</table>";
foreach ($tab6 as $matiere => $value){
$som=0;

echo "<tr>
<td>$matiere</td>";
$moy=0;
foreach($value as $note){
$moy+=$note;
echo "<td>$note</td>";
}
echo "<td>".round($moy/count($value),2)."</td>";

echo "</tr>";}
  ?>
</body>
</html>