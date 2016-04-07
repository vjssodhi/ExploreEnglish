<html lang="en">

<head>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/css/login.css">
    <!-- Font Awesome -->
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>ExploreEnglish</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- CSS
  ================================================== -->

  <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>

  <div class="container">
    <div class="flat-form">
      <ul class="tabs">
        <li>
          <a href="#login" class="active">Login</a>
        </li>
        <li>
          <a href="#register">Register</a>
        </li>
        <li>
          <a href="#reset">Reset Password</a>
        </li>
      </ul>
      <div id="login" class="form-action show">
        <h1>Login on ExploreEnglish</h1>
        <p>
          Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas sed diam eget risus varius bladit sit amet non
        </p>
        <form>
          <ul>
            <li>
              <input type="text" placeholder="Username" />
            </li>
            <li>
              <input type="password" placeholder="Password" />
            </li>
            <li>
              <input type="submit" value="Login" class="button" />
            </li>
          </ul>
        </form>
      </div>
      <!--/#login.form-action-->
      <div id="register" class="form-action hide">
        <h1>Register</h1>
        <p>
          You should totally sign up for our super awesome service. It's what all the cool kids are doing nowadays.
        </p>
        <form>
          <ul>
            <li>
              <input type="text" placeholder="Username" />
            </li>
            <li>
              <input type="password" placeholder="Password" />
            </li>
            <li>
              <input type="submit" value="Sign Up" class="button" />
            </li>
          </ul>
        </form>
      </div>
      <!--/#register.form-action-->
      <div id="reset" class="form-action hide">
        <h1>Reset Password</h1>
        <p>
          To reset your password enter your email and your birthday and we'll send you a link to reset your password.
        </p>
        <form>
          <ul>
            <li>
              <input type="text" placeholder="Email" />
            </li>
            <li>
              <input type="text" placeholder="Birthday" />
            </li>
            <li>
              <input type="submit" value="Send" class="button" />
            </li>
          </ul>
        </form>
      </div>
      <!--/#register.form-action-->
    </div>
  </div>
  <script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/backend/js/login.js"></script>
</body>
</html>