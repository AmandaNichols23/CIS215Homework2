<?php
date_default_timezone_set('America/New_York');
$d = new DateTime();
$hour = $d->format('H');

if($hour < 12){
    $greeting = "Good Morning!";
} elseif($hour < 18){
    $greeting = "Good Afternoon.";
} else{
    $greeting = "Goodnight.";
}
?>
<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8" />
</head>
<body>
<?php echo $greeting; ?>
</body>
</html>

