<!DOCTYPE HTML>
<html>
<head>
	</head>
	<body>
		<?php
		$bicyclePrice = $_POST["Bicycle"];
		$carPrice= $_POST["Car"];
		$motorcycle = $_POST["Motorbyke"];

		?>
		My ordered <?php echo $_POST["Vehicle1"]; ?>
		<?php echo $bicyclePrice ?><br>
		<?php echo $_POST["Vehicle2"]; ?>
		<?php echo $carPrice; ?><br>
		<?php echo $_POST["Vehicle3"]; ?>
		<?php echo $motorbike; ?><br>
		The totlal is <?php echo intval($bicyclePrice) + intval($carPrice) + intval($motorbike) ?>
	</body>
</html>