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
          
        </p>
		<?php echo form_open('admin/login');?>
        <!--<form>-->
          <ul>
            <li>
              <input type="email" placeholder="Email" name="loginemail"/>
            </li>
            <li>
              <input type="password" placeholder="Password" name="loginpassword" />
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
          
        </p>
		<?php echo form_open_multipart('admin/do_upload');?>
        <!--<form  method="post" action="admin/register" >-->
          <ul>
            <li>
              <input type="text" placeholder="Username" name="reg_username" />
            </li>
            <li>
              <input type="password" placeholder="Password" name="reg_password"/>
            </li>
             <li>
              <input type="email" placeholder="Email" name="reg_email" />
            </li>
             <li>
              <select name="reg_agent">
              <option value="">User Type</option>
              <option value="teacher">Teacher</option>
              <option value="agent">Agent</option>
              <option value="marketing_spl">Marketing Specialist</option>
              </select>
            </li>
             <li>
            <input type="file" placeholder="Browse" name="userfile"/>
            </li>
            <li class="captcha_bx">
            <div class="captcha"></div>
            <input type="text" placeholder="Type Here" name="reg_captcha"/>
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
          To reset your password enter your email and we'll send you a link to reset your password.
        </p>
		<?php echo form_open('admin/resetpassword');?>
        <!--<form>-->
          <ul>
            <li>
              <input type="email" placeholder="Email" name="reset_email" />
            </li>
            <!--<li>
              <input type="text" placeholder="Birthday" />
            </li>-->
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