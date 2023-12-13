<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css"
    />
    <script
      src="https://code.jquery.com/jquery-3.1.1.min.js"
      integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
      crossorigin="anonymous"
    ></script>
  <title>LOGIN</title>
</head>
<body>
  <div class="container">
    <h1>Login</h1>
    <form method="GET" action="loginprocess.php" class="ui form">
    <div class="field">
      <label for="username">Username</label>
      <input type="text" name="id" class="id" placeholder="Username">
    </div>
    <div class="field">
      <label for="password">Password</label>
      <input type="password" name="pw" class="pw" placeholder="Password">
    </div>
    <button type="submit" class="ui button">
      LOGIN
    </button>
  </form>
</body>
</html>