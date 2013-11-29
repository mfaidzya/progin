<!DOCTYPE html>
<html>
<head>
<title>Daftar Pemain</title>
<!--Bagian CSS untuk Styling Tabel-->
<style type="text/css">
          table, th, td
          {
               border: 1px solid black;
          }
</style>
</head>
<body>
 
<h3>Daftar Pemain</h3>
<?php
// untuk meload data xml (filePlayer.xml) dengan cara SimpleXML 
$books = new SimpleXMLElement('filePlayer.xml', null, true);
 
// menampilkan data ke XML ke dalam tabel HTML
echo "
<table>
<tr>
<th>firstname</th>
<th>id</th>
<th>jerseynumber</th>
<th>lastname</th>
<th>lastspokenwords</th>
</tr>
 
";
 
// melakukan looping penampilan data pemain
foreach($players as $player)
{
        echo "
<tr>
<td width='200'>{$player->firstname}</td>
<td width='200'>{$player->id}</td>
<td width='200'>{$player->jerseynumber}</td>
<td width='200'>{$player->lastname}</td>
<td width='200'>{$player->lastspokenwords}</td>
</tr>
 
";
}
echo '</table>';
?>
 
</body>
</html>
