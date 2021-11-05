<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 2px solid black;
  text-align: left;
  padding: 12px;
}
h2{
    text-align: left;
}
h3{
    text-align: right;
    margin-top: -1.5em
}
</style>
<body>
    <button onclick="document.location='timeline.php'">Back</button>
    <h2><img class="img img-responsive" src="img/rdpweb-180x66.png" /></h2>
    <h3>5 November 2021</h3>
</body>
</html>
<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'rdpweb'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT *
		FROM trenddb';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

echo '<table>
		<thead>
			<tr>
				<th>No</th>
				<th>Reason</th>
				<th>Trend of Reason</th>
			</tr>
		</thead>
		<tbody>';
		
while ($row = mysqli_fetch_array($query))
{
	echo '<tr>
			<td>'.$row['nomor'].'</td>
			<td>'.$row['reason'].'</td>
            <td>'.$row['trend'].'</td>
		</tr>';
}
echo '
	</tbody>
</table>';

mysqli_free_result($query);

mysqli_close($conn);