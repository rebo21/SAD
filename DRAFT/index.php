<?php
	
	include 'config.php';

	if (isset($_POST['post_comment'])) {

		$name = $_POST['name'];
		$message = $_POST['message'];
		
		$sql = "INSERT INTO c_job_posting (name, message)
		VALUES ('$name', '$message')";

		if ($conn->query($sql) === TRUE) {
		  echo "";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Comment System PHP | National Coding</title>
</head>
<body>
	<div class="wrapper">
		<form action="" method="post" class="form">
			<input type="text" class="name" name="name" placeholder="Name">
			<br>
			<textarea name="message" cols="30" rows="10" class="message" placeholder="Message"></textarea>
			<br>
			<button type="submit" class="btn" name="post_comment">Post Comment</button>
		</form>
	</div>

	<div class="content">
		<?php

			$sql = "SELECT * FROM c_job_posting";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
			   
		?>
		<h3><?php echo $row['name']; ?></h3>
		<p><?php echo $row['message']; ?></p>

		<?php } } ?>
	</div>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Comment System PHP | National Coding</title>
</head>
<body>
	<div class="wrapper">
		<form action="" method="post" class="form">
    <input type="text" name="jobTitle" placeholder="JOB TITLE">
		<input type="number" name="salary" placeholder="SALARY">
    <input type="text" name="workLocation" placeholder="WORK LOCATION">
    <input type="text" name="jobIndustry" placeholder="JOB INDUSTRY">	
    <input type="number" name="numSlot" placeholder="SLOTS">
    <input type="text" name="skills" placeholder="SKILLS">
			<br>
			<button type="submit" class="btn" name="post_comment">Post Comment</button>
		</form>
	</div>

	<div class="content">
		<?php

			$sql = "SELECT * FROM c_job_posting";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
			   
		?>
		<h3><?php echo $row['jobTitle']; ?></h3>
		<p><?php echo $row['salary']; ?></p>
    <p><?php echo $row['workLocation']; ?></p>
    <p><?php echo $row['jobIndustry']; ?></p>
    <p><?php echo $row['numSlot']; ?></p>
    <p><?php echo $row['skills']; ?></p>

		<?php } } ?>
	</div>
</body>
</html>