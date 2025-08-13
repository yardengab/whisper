<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.7/css/bootstrap.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/plyr/3.7.8/plyr.min.css" />

		<link rel="stylesheet" href="./assets/css/main.css?v=<?php echo time(); ?>" />
		<link rel="stylesheet" href="./assets/css/mobile.css?v=<?php echo time(); ?>" />

		<title>login page</title>
	</head>
<body>
  <div class="container py-5">
    <div class="mx-auto" style="max-width:420px">
      <form id="login-form" action="login_auth.php" method="post">
        <div class="mb-3">
          <label for="username" class="form-label">user name</label>
          <input type="text" id="username" name="username" class="form-control" required>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">password</label>
          <input type="password" id="password" name="code" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Log In</button>
      </form>
    </div>
  </div>
</body>
</html>