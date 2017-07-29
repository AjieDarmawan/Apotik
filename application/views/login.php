
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistem Informasi Apotik | </title>

    <!-- Bootstrap -->
    <link href="<?=base_url('')?>assets/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=base_url('')?>assets/gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=base_url('')?>assets/gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="https://colorlib.com/polygon/gentelella/css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?=base_url('')?>assets/gentelella/build/css/custom.min.css" rel="stylesheet">
  
  <script type="text/javascript">
      function validasi()
      {
        if(document.login.name.value==""){
        alert('Username tidak boleh kosong');
        login.name.focus();
        return false;
        }else if (document.login.password.value==""){
          alert('Password tidak boleh kosong');
        password.name.focus();
        return false;
        };

        if(document.login.name.value=="") && (document.login.password.value==""){
          alert('Username dan password tidak boleh kosong');
        return false;
        }
      }
    </script>


  </head>

  <body class="login">

  

    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            
            <form name="login" action="<?php echo site_url('login/masuk');?>" method="POST" >
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" id="name" name="username"   />
              </div>
              <div>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password"  />
              </div>
               <?php
                                  $info = $this->session->flashdata('info');
                                  if(!empty($info))
                                  {
                                    echo $info;
                                  }
                                ?>
              <div>
                <button type="submit" class="btn btn-primary btn-sm" onclick="validasi()">Log in</button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>
          </form>
              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Sistem Informasi Apotik!</h1>
                  <p>©2016 </p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>