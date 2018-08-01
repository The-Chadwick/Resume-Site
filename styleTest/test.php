<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php

$password = 'Ihatemypage2!';
$fakePassword = 'Ihatemypage!';
echo $password;
echo '<br />';
$passwordHash = password_hash($password, PASSWORD_DEFAULT);
echo $passwordHash . '<br>';
echo password_verify($password,$passwordHash) . '<br>';
echo password_verify($fakePassword, $passwordHash) .'<br>';
echo password_verify($password, $passwordHash);
if(password_verify($fakePassword, $passwordHash) == false) echo 'working';
	
echo password_hash('y2GgBvRuYL*2%p-E', PASSWORD_DEFAULT);
echo '<br>' . password_verify('y2GgBvRuYL*2%p-E', '$2y$10$5/VldK7m.Wa3XMAEWU73Duu.HLV/.uypBH2kfzgRvHNqjkml.gdNy');

?>
</body>
</html>