<html>
				<head><title>Login</title></head>
				<body>
				<h3>Login sencillo con PHP</h3>
				<form action="index.php" method="GET">
					Usuario:
					<input type="text" name="usuario" />
					<br/>
					Contraseña:
					<input type="text" name="passwd" />
					<br/>
					<input type="hidden" name="do" value="checklogin"/>
					<input type="submit"/>
				</form>
				</body>
</html>