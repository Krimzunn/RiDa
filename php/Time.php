<html>
<head>
<Title> Time and Date
</Title>
</head>

<body>
<?php echo "<p>Today it's ". Date("l") . "</p>"; ?>
<?php echo "<p> The ". Date("jS") . "</p>"; ?>
<?php echo "<p>of ".date("F") . "</p>"; ?>
<?php echo "<p>The Year is ".date("Y") . "</p>"; ?>


Whole Date:
<p><?php echo date('l jS \of F Y '); ?>
</p>
</body>
</html>