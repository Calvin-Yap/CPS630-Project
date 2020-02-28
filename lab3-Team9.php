<!DOCTYPE html>
<html>
<head>
  <title>Lab3</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>

  .item1 {
    grid-area: menu;
  }
  .item2 {
    grid-area: main;
  }
  .padding {
    padding-top: 50px;
    padding-bottom: 50px;
  }
  .item3 {
    grid-area: footer;
    position: relative;
  }

  .grid-container {
    display: grid;
    grid-template-areas:
      'menu main main main main main'
      'menu footer footer footer footer footer';
    grid-gap: 10px;
    background-color: #CCB5B1;
    padding: 10px;
  }

  .grid-container > div {
    background-color: #FFE2DD;
    text-align: center;
    padding: 20px;
    font-size: 20px;
  }
.center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
  </style>
</head>
<body>
<h1>Enter Data into DB </h1>
<form action="lab3.php" method="POST">
	<table>
		<tr>
			<td>ID</td>
			<td> 
				<input type="number" placeholder="ID" name="id" >
			</td>
    </tr>
    <tr>
			<td>Date</td>
			<td> 
				<input type="date" placeholder="Date" name="date" >
			</td>
		</tr>
		<tr>
			<td>File Name</td>
			<td> 
				<input type="text" placeholder="File Name" name="fname" required>
			</td>
		</tr>
		<tr>
			<td> Description </td>
			<td> 
				<input type="text" placeholder="Description" name="descr" required>
			</td>
		</tr>
		<tr>
			<td> Title </td>
			<td> 
        <input type="text" placeholder="Title" name="title" required>
			</td>
		</tr>
		   <tr>
			<td>Latitude</td>
			<td><input type="number" step="any" placeholder="Latitude" name="lat" required></td>
		   </tr> 
    <td>Longitude</td>
			<td><input type="number" step = "any" placeholder="Longitude" name="lon" required></td>
		   </tr> 
		<tr>
			<td> <input type="submit" value="Submit"></td>
		</tr>
	</table>
</form>
<h1>Delete Entry</h1>
<form action="lab3d.php" method="POST">
<table>
		<tr>
			<td> Student id</td>
			<td> 
				<input type="text" placeholder="id" name="id" required>
			</td>

			<td> <input type="submit" value="Submit"></td>
		</tr>
	</table>
</form>

<h1>Display Table</h1>
<table>
<tr>
<th>Id</th>
<th>Date</th>
<th>File Name</th>
<th>Description</th>
<th>Title</th>
<th>Latitude</th>
<th>Longitude</th>

</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "cps630");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, date, filename , description, title, latitude, longitude FROM travelPhoto";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["date"] . "</td><td>". $row["filename"]. "</td><td>". $row["description"]. "</td><td>". $row["title"]. "</td><td>". $row["latitude"]. "</td><td>".$row["longitude"]."</td></tr>" ;
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

</body>
</html>
