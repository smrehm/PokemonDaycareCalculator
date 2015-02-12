<?php
	include calculator.php;
?>
<html>
<head>
<script src="http://code.jquery.com/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="timer.js"></script>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div>
    <h1>Countdown</h1>
    <span id="cd_h">00</span>:
    <span id="cd_m">00</span>:
    <span id="cd_s">00</span>:
    <span id="cd_ms">00</span>
    <br/>
    <br/>
    <input type="button" value="Start" id="cd_start" />
    <input type="button" value="Pause" id="cd_pause" />
    <input type="button" value="Stop"  id="cd_stop" />
    <input type="button" value="Reset" id="cd_reset" />
    <br/>
    <br/>
    <input type="text" value="<?php echo $seconds; ?>" id="cd_seconds" />
    secs
    <br/>
    <br/>
    <span id="cd_status">Idle</span>
</div>
<p>
<?php 
printClock(calculateTime($pokemon,$currentLevel, $targetLevel));
?>
</p>
</body>
</html>