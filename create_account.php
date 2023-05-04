<!DOCTYPE html>
<html>
<head>
	<title>Créer un compte</title>
	<!--Link JQuery-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Link bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script> 
    </script>
</head>
    <body>
        <div class="container">
		  <h1 class="text-center">Créer un compte</h1>
		  <form method="post" action="register.php">
			<div class="form-group">
				<label for="username">Nom d'utilisateur :</label>
				<input type="text" class="form-control" name="username" id="username" required>
			</div>
			<div class="form-group">
				<label for="email">Adresse email :</label>
				<input type="email" class="form-control" name="email" id="email" required>
			</div>
			<div class="form-group">
				<label for="password">Mot de passe :</label>
				<input type="password" class="form-control" name="password" id="password" required>
			</div>
			<button type="submit" class="btn btn-primary">Créer un compte</button>
		</form>
	</div>
</body>
</html>





