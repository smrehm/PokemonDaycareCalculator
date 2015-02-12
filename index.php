<?php
	include "calculator.php";
?>
<html>
<head>
<script src="http://code.jquery.com/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="timer.js"></script>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<?php include "clock.html"; ?>
<p>
<?php 
printClock(calculateTime($pokemon,$currentLevel, $targetLevel));
?>
</p>
<p>
<?php 
printClock(calculateTime($pokemon));
?>
</p>
</body>
</html>