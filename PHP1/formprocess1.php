<html>
<head>
<title>say my name</title>
<body>
<?php
echo'<h1>Hello'.$_POST['a'].'!</h1>';
?>
<pre>
<strong>DEBUG:</strong>
<?php
print_r($_POST);
?>
</pre>
</body>
</html>