<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Basic Login System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="navbar bg-dark">
    <nav class="w-100">
      <div class="container-fluid w-100">
        <div class="d-flex w-100 justify-content-between align-items-center">
          <a class="navbar-brand text-light" href="https://github.com/JoeCalvi">Joe Calvi</a>
          <h4 class="text-light">Basic Login System</h4>
          <div div class="d-flex gap-2">
            <button class="btn btn-outline-light">Login</button>
            <button class="btn btn-light">Sign Up</button>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <div class="container-fluid h-100">
      <div class="row h-50 bg-secondary">
        <div class="col-12 h-100 d-flex justify-content-center align-items-center">
            <div>
              <h4 class="text-light">What you see below is a basic login system where users can either</h4>
              <h4 class="text-light text-center">create an account or log in with an existing account.</h4>
              <p class="text-light text-center">The info is stored in an SQL database (passwords are hashed and secure).</p>
            </div>
        </div>
      </div>
      <div class="row h-50">
          <div class="col-6 h-100 d-flex justify-content-end align-items-center">
            <div class="border-start border-info border-3 p-3">
              <h4>Sign Up</h4>
              <p>Don't have an account yet? Sign up here.</p>
              <form action="includes/signup.inc.php" method="post">
                <div class="mb-3">
                  <input class="form-control w-100" type="text" name="uid" placeholder="Username">
                </div>
                <div class="mb-3">
                  <input class="form-control w-100" type="password" name="pwd" placeholder="Password">
                </div>
                <div class="mb-3">
                  <input class="form-control w-100" type="password" name="pwdRepeat" placeholder="Repeat Password">
                </div>
                <div class="mb-3">
                  <input class="form-control w-100" type="text" name="email" placeholder="Email">
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary" name="submit" type="submit">Sign Up</button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-6 h-100 d-flex justify-content-start align-items-center">
            <div class="bg-dark text-light rounded p-3">
              <h4 class="text-center">Login</h4>
              <p>Already have an account? Log in here.</p>
              <form action="login.inc.php" method="post">
                <div class="mb-3">
                  <input class="form-control w-100" type="text" name="uid" placeholder="Username">
                </div>
                <div class="mb-3">
                  <input class="form-control w-100" type="password" name="pwd" placeholder="Password">
                </div>
                <div class="mb-3 text-center">
                  <button class="btn btn-primary" name="submit" type="submit">Login</button>
                </div>
              </form>
            </div>
          </div>
      </div>
    </div>
  </main>

  <footer class="bg-dark"></footer>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>