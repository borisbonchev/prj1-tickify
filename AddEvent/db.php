<?php
session_start();
include('connection.php');
?>

<?php

if (isset($_POST['submit'])) {
	$event_name = $_POST["event_name"];
	$e_location = $_POST["e_location"];
	$e_date = $_POST["e_date"];
	$price = $_POST["price"];
	$description = $_POST["description"];
	$short_description = $_POST["short_description"];
	// $user_identifier = $_SESSION["username"];

	// if($event_name !=''&& $e_location !=''&& $e_date !=''&& $price !='' && $description !='' && $short_description !='')
	// {
	// 	//  To redirect form on a particular page
	// 	header("Location:../MainPage/Home.php");
	// 	}

	$file = $_FILES['file'];

	$result = '';

	$fileName = ($_FILES['file']['name']);
	$fileTmpName = ($_FILES['file']['tmp_name']);
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = ($_FILES['file']['type']);

	$coverCheck = false;

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg', 'jpeg', 'png');
	if (in_array($fileActualExt, $allowed)) {
		if ($fileError === 0) {
			if ($fileSize < 90000000) {
				$fileNameNew = uniqid('', true) . "." . $fileActualExt;
				$fileName = $fileNameNew;
				$fileDestination = 'uploads/' . $fileName;
				move_uploaded_file($fileTmpName, $fileDestination);
			} else {
				$result .= 'Your file is too big. ';
			}
		} else {
			$result .= 'There was an error uploading your cover file. ';
		}
	} else {
		$result .= 'File is not one of the allowed formats format. ';
	}

	try {
		$stmt = $conn->prepare("insert into event (event_name, e_location, e_date, price, description, short_description, img_id) 
		values (:event_name, :e_location, :e_date, :price, :description, :short_description, :img_id);");

		// $stmt->bindValue(':id', $id, PDO::PARAM_STR);
		$stmt->bindValue(':event_name', $event_name, PDO::PARAM_STR);
		$stmt->bindValue(':e_location', $e_location, PDO::PARAM_STR);
		$stmt->bindValue(':e_date', $e_date, PDO::PARAM_STR);
		$stmt->bindValue(':price', $price, PDO::PARAM_STR);
		$stmt->bindValue(':description', $description, PDO::PARAM_STR);
		$stmt->bindValue(':short_description', $short_description, PDO::PARAM_STR);
		$stmt->bindValue(':img_id', $fileName, PDO::PARAM_STR);
		// $stmt->bindValue(':user_identifier', $user_identifier, PDO::PARAM_STR);

		$stmt->execute();
		// $result = $stmt->fetchAll();
	} catch (PDOException $e) {
		echo 'something has gone to shit: ';
		echo $e;
	}
}
?>