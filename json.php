<?php 

$mysql = new mysqli('localhost', 'root', '', 'users_bd');


$sql="SELECT * FROM  `user`";
$l= array();
$result = $mysql -> query($sql);
while ($row = mysqli_fetch_assoc($result)) {
  $l[] = $row;
}
$j = json_encode($l);
echo $j;
