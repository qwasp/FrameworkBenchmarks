<!DOCTYPE html>
<html>
<head>
<title>Fortunes</title>
</head>
<body>
<table>
<tr>
<th>id</th>
<th>message</th>
</tr>
<?php foreach ($model['fortunes'] as $fortune) {
	echo '<tr><td>' . $fortune->Id . '</td><td>' . htmlspecialchars($fortune->Message) . '</td></tr>' . "\n";
} ?>
</table>
</body>
</html>