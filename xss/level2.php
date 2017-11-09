<html>
	<body>
		<h1>Login Page</h1>

		<form action="testify2.php" onsubmit="sanitize()" method="post">
			 <table>
    			<tr>
      				<td align="left">Username:</td>
      				<td align="center"><input type="text" id="username" name="user"></td>
      			</tr>

            <tr>
        				<td align="left">Password:</td>
        				<td align="center"><input type="text" name="name"></td>
        			</tr>
    		</table>
			<br><input type="submit">
		</form>
		<script>
			function sanitize() {
					/*alert("asdasd");*/
					var x = document.getElementById("user").value;
					document.getElementById("username").innerHTML = x;
					/*alert(document.getElementById("username"));*/
			}
		</script>
	</body>
</html>