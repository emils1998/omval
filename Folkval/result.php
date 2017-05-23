<?php
 include("/databas.php")

 ?>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="">
  <head>
    <title>Folkval</title>
    <meta charset="UTF-8">
  </head>
  <body>
    <table class="table table-striped">
  			<tr>
  				<th> <div>Namn </div></th>
  				<th> <div>Mejl </div></th>
  				<th> <div>Ort </div></th>
  				<th> <div>Personnummer </div></th>
  			</tr>
  			<?php
  				$sql = "SELECT * FROM lista";
  				$result = $conn->query($sql);
  				if ($result->num_rows > 0) {
  					while($row = $result->fetch_assoc()) {
  			?>
  			<tr>
  				<td><?php echo $row['namn'];?></td>
  				<td><?php echo $row['mail'];?></td>
  			    <td><?php echo $row['ort'];?></div></td>
  			    <td><?php echo $row['personNr'];?></td>
  			</tr>
  			<?php
  				}
  				}
  				else {
  					echo "0 results";
  				}
  			?>
  		</table>
      <a href="index.html"><button type="button" class="btn btn-primary">Startsida</button></a>
  </body>
</html>
