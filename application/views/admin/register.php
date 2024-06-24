<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Register - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url();?>Backend_assetss/assets/img/favicon.png" rel="icon">
  <link href="<?= base_url();?>Backend_assetss/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url();?>Backend_assetss/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url();?>Backend_assetss/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url();?>Backend_assetss/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url();?>Backend_assetss/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?= base_url();?>Backend_assetss/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?= base_url();?>Backend_assetss/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url();?>Backend_assetss/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url();?>Backend_assetss/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<?php echo $this->session->flashdata('verify_msg'); ?>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="<?= base_url();?>index.html" class="logo d-flex align-items-center w-auto">
                  <img src="<?= base_url();?>Backend_assetss/assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">NiceAdmin</span>
                  <?php $attributes = array("name" => "registrationform");
                        echo form_open("user/register", $attributes);?>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate>
                    <div class="col-12">
                      <label for="yourName" class="form-label">Your Name</label>
                      <input type="text" name="first-name" class="form-control" id="yourName" value="<?php echo set_value('fname'); ?>">
                      <span style="color:red"><?php echo form_error('firstname'); ?></span>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourName" class="form-label">Last Name</label>
                      <input type="text" name="last-name" class="form-control" id="lastName" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <label for="conformPassword" class="form-label">Conform Password</label>
                      <input type="password" name="conform-password" class="form-control" id="conformPassword" required>
                      <div class="invalid-feedback">Please enter conform password!</div>
                    </div>


                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="<?= base_url();?>pages-login.html">Log in</a></p>
                    </div>
                  </form>
                  <?php echo form_close(); ?>

            <p style="color:green; font-style:bold"><?php echo $this->session->flashdata('msg_success'); ?></p>
            <p style="color:red; font-style:bold"><?php echo $this->session->flashdata('msg_error'); ?></p>


                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url();?>Backend_assetss/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?= base_url();?>Backend_assetss/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url();?>Backend_assetss/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="<?= base_url();?>Backend_assetss/assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?= base_url();?>Backend_assetss/assets/vendor/quill/quill.js"></script>
  <script src="<?= base_url();?>Backend_assetss/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?= base_url();?>Backend_assetss/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?= base_url();?>Backend_assetss/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url();?>Backend_assetss/assets/js/main.js"></script>

</body>

</html>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php echo $this->session->flashdata('verify_msg'); ?>


<h4>User Registration Form</h4>

<?php $attributes = array("name" => "registrationform");
echo form_open("user/register", $attributes);?>
<table>
    <tr>
        <td><label for="name">First Name</label></td>
        <td><input name="firstname" placeholder="First Name" type="text" value="<?php echo set_value('fname'); ?>" /> <span style="color:red"><?php echo form_error('firstname'); ?></span></td>
    </tr>   
    <tr>
        <td><label for="name">Last Name</label></td><td><input name="lastname" placeholder="Last Name" type="text" value="<?php echo set_value('lname'); ?>" /> <span style="color:red"><?php echo form_error('lastname'); ?></span></td>
    </tr>   
    <tr>    
        <td><label for="email">Email ID</label></td><td><input class="form-control" name="email" placeholder="Email-ID" type="text" value="<?php echo set_value('email'); ?>" /> <span style="color:red"><?php echo form_error('email'); ?></span></td>
    </tr>   
    <tr>    
        <td><label for="subject">Password</label></td><td><input class="form-control" name="password" placeholder="Password" type="password" /> <span style="color:red"><?php echo form_error('password'); ?></span></td>
    </tr>   
    <tr>    
        <td><label for="subject">Confirm Password</label></td><td><input class="form-control" name="cpassword" placeholder="Confirm Password" type="password" /> <span style="color:red"><?php echo form_error('cpassword'); ?></span></td>
    </tr>   
    <tr>    
        <td></td>
        <td><button name="submit" type="submit">Signup</button></td>        
    </tr>
</table>    
<?php echo form_close(); ?>

<p style="color:green; font-style:bold"><?php echo $this->session->flashdata('msg_success'); ?></p>
<p style="color:red; font-style:bold"><?php echo $this->session->flashdata('msg_error'); ?></p>
    
</body>
</html>