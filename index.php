<!DOCTYPE>
$connection = mysql_connect('localhost', 'root', ''); 
mysql_select_db('subjects');

$query = "EXPLAIN SELECT * FROM `subjects` PROCEDURE ANALYSE();";
$query2 = "SELECT * FROM `students`;";
$result = mysql_query($query);
$result2 = mysql_query($query2);

echo "<table>";

while($row = mysql_fetch_array($result)){
echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "<tr><td>" . $row["lastname"] . "<tr><td>" . $row["age"] . "</td><td>" . $row["gender"] . "<tr><td>" . $row["phone"] . "<tr><td>" . $row["address"] . "</td><td>" .;
}

echo "</table>";

while($row = mysql_fetch_array($result2)){
echo "<tr><td>" . $row["id"] . "</td><td>" . $row["title"] . "<tr><td>" . $row["descriotion"] . "<tr><td>" .;
}

echo "</table>";

mysql_close();
