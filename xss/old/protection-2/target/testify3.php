<?php 
	function clear_input($data, $encoding = "UTF-8") {
		return htmlspecialchars($data, ENT_QUOTES, $encoding);
	}
?>
<html>
	<body>
		<h1>Testimonials</h1>

		Welcome, <?php echo clear_input($_POST["name"]); ?>!<br>
		Your email address is: <?php echo $_POST["email"]; ?>.<br>
		Your message is: <?php echo $_POST["conf"]; ?>
	</body>

	<p id="par">Stuff.</p>
</html>