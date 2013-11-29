<!DOCTYPE html>
<html>
<head>
<title>Daftar Klub</title>
<!--Bagian CSS untuk Styling Tabel-->
<style type="text/css">
          table, th, td
          {
               border: 1px solid black;
          }
</style>
</head>
<body>
 
<h3>Daftar Klub</h3>
<?php
// untuk meload data xml (fileTeam.xml) dengan cara SimpleXML 
$books = new SimpleXMLElement('fileTeam.xml', null, true);
 
// menampilkan data ke XML ke dalam tabel HTML
echo "
<table>
<tr>
<th>club</th>
<th>teamId</th>
<th>teamname</th>
</tr>
 
";
 
// melakukan looping penampilan data pemain
foreach($teams as $team)
{
        echo "
<tr>
<td width='200'>{$player->club}</td>
<td width='200'>{$player->teamId}</td>
<td width='200'>{$player->teamname}</td>
</tr>
 
";
}
echo '</table>';
?>
 
</body>
</html>

<?php
function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
?>

<?php
  echo curPageURL();
?>

<?php
function curPageName() {
 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

echo "The current page name is ".curPageName();
?>
