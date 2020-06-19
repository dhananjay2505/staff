<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (isset($_SESSION['otp'])) {
    $this->session->set_tempdata('otp', $_SESSION['otp'], 120);
}
if ($this->session->userdata('user_token')) {
    redirect('/letsstart/');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="WeThink Studio is an award winning UX Agency with practices spanning User Experience, Mobility, Service Design, Digital Transformation, User Research and Agile UX" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css'); ?>">
    <style type="text/css">
       
        .wrapper{ width: 28%; padding: 20px; float: none; margin: 0 auto; display: block; background: #fff; margin-top: 6%; border-radius: 4px; }
        .login_bg {
            width: 100%; float: left; background: #fff; height: 100%; background: url(<?php echo base_url('assets/images/login_bg.jpg'); ?>); background-position: 50% 50%; background-repeat: no-repeat; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; position: fixed; min-height: 100%; display: block;
        }
    </style>
</head>
<body>
    <!-- <div class="login_bg">
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        
    </div>    
    </div> -->


<div class="container main_wrapper">
    <div class="login_box">
        <div class="col-md-6 float-left col-12 no-padding">
            <img src="<?php echo base_url('assets/images/hero_2.jpg'); ?>" class="w-100">
        </div>
        <div class="col-md-5 float-left col-12 pl_20">
            <h1 class="section_title mt_20">Connect with us</h1>
            <span class="second_subtitle float-left w-100 pb_30"> Create an account to search jobs and apply </span>

            <?php
            $attributes = array('id' => 'myform');
            echo form_open('/register/', $attributes); ?>
            <div class="col-md-6 float-left col-12 no-padding mb_20">
                
                <input type="text" name="firstname" class="form-control" value="<?php echo set_value('firstname'); ?>" placeholder="First Name">
                <span class="help-block"><?php echo form_error('firstname'); ?></span>
            </div>
            <div class="col-md-6 float-left col-12 no-padding mb_20">
                
                <input type="text" name="lastname" class="form-control" value="<?php echo set_value('lastname'); ?>" placeholder="Last Name">
                <span class="help-block"><?php echo form_error('lastname'); ?></span>
            </div>    
            <div class="col-md-6 float-left col-12 no-padding mb_20">
                
                <input type="text" name="email" class="form-control" value="<?php echo set_value('email'); ?>" placeholder="Enter Email ID">
                <span class="help-block"><?php echo form_error('email'); ?></span>
            </div>
            <div class="col-md-6 float-left col-12 no-padding mb_20">
                <input type="text" name="number" id="number" class="form-control" value="<?php echo set_value('number'); ?>" placeholder="Enter Mobile Number">
                <script type="text/javascript">
                    
                </script>
                <a href="" id="getotp">Get OTP</a>
                <span class="help-block number-error"><?php echo form_error('number'); ?></span>
            </div>
            <div class="col-md-12 float-left col-12 no-padding mb_20">
                <input type="password" maxlength="6" name="otp" class="form-control" id="otphere" placeholder="Enter OTP">
                <span class="help-block"><?php echo form_error('otp'); echo @$errordata; ?></span>
                <span id="timer"></span>
                <span id="timer1"></span>
                <a href="" id="resend">Re Send</a>
            </div>
            <div class="col-md-6 float-left col-12 no-padding mb_20">
                
                <input type="password" name="password" class="form-control" value="" placeholder="Password">
                <span class="help-block"><?php echo form_error('password'); ?></span>
            </div>
            <div class="col-md-6 float-left col-12 no-padding mb_20">
                
                <input type="password" name="confirm_password" class="form-control" value="" placeholder="Confirm Password">
                <span class="help-block"><?php echo form_error('confirm_password'); ?></span>
            </div>

            <div class="col-md-12 float-left col-12 no-padding mb_20">
                
                <label style="text-transform: none;"><input type="checkbox" name="checked">  I agree to Terms & Conditions and have read and understood the Privacy Policy.</label>
                <span class="help-block"><?php echo form_error('checked'); ?></span>
            </div>

            <div class="col-md-7 float-left col-12 no-padding">
                <input type="submit" class="primary_btn" value="Connect us">
            </div>
            <span class="w-100 float-left pb_10">
                Have an account?<a href="<?php echo base_url(); ?>" class="pl_20">Login in</a> 
            </span>
        </form>
        </div> <!--Col-md 5 End here ===================-->
    </div> <!--Login box-->
</div>
</body>
</html>

<script src="<?php echo base_url('assets/js/jquery-3.4.0.min.js'); ?>"></script>
<!-- <script type="text/javascript" src="<?php echo base_url('assets/js/validation.js'); ?>"></script> -->
<script type="text/javascript">
$(document).ready(function() {
    $("#resend").hide();
    $("#getotp").click(function(e){

      e.preventDefault();

      var n = $("input[name='number']").val();
      /*var f = $("input[name='firstname']").val();
      var l = $("input[name='lastname']").val();*/
      if (n!="") {
        $(".number-error").html("");
        let timerOn = true;

        function timer(remaining) {
          var m = Math.floor(remaining / 60);
          var s = remaining % 60;
          
          m = m < 10 ? '0' + m : m;
          s = s < 10 ? '0' + s : s;
          document.getElementById('timer').innerHTML = m + ':' + s;
          remaining -= 1;
          if (remaining===60) {
            $("#resend").show();
          }
          if(remaining >= 0 && timerOn) {
            setTimeout(function() {
                timer(remaining);
            }, 1000);
            return;
          }

          if(!timerOn) {
            // Do validate stuff here
            return;
          }
          
          // Do timeout stuff here
          document.getElementById('timer').innerHTML = "Your otp has been expired";
        }

        timer(120);
        $.ajax({

          url: "<?php echo base_url('/ajax-otp_check_registration'); ?>",

          type:"POST",
          data: {n:n},

          success: function(data) {
            

                $(".number-error").html(data);
          }

      });
     }else{
        $(".number-error").html("Please enter your mobile number");
     }

  });
    $("#resend").click(function(e){
        e.preventDefault();
        $("#timer").hide();
        $("#resend").hide();
        $(".number-error").hide();
      var n = $("input[name='number']").val();
      if (n!="") {
        $(".number-error").html("");
        let timerOn = true;

        function timer(remaining) {
          var m = Math.floor(remaining / 60);
          var s = remaining % 60;
          
          m = m < 10 ? '0' + m : m;
          s = s < 10 ? '0' + s : s;
          document.getElementById('timer1').innerHTML = m + ':' + s;
          remaining -= 1;
          if (remaining===60) {
            $("#resend").show();
          }
          if(remaining >= 0 && timerOn) {
            setTimeout(function() {
                timer(remaining);
            }, 1000);
            return;
          }

          if(!timerOn) {
            // Do validate stuff here
            return;
          }
          
          // Do timeout stuff here
          document.getElementById('timer1').innerHTML = "Your otp has been expired";
        }

        timer(120);
        $.ajax({

          url: "<?php echo base_url('/ajax-otp_check_registration'); ?>",

          type:"POST",

          data: {n:n},

          success: function(data) {
                $(".number-error1").html(data);
          }

      });
     }else{
        $(".number-error").html("Please enter your mobile number");
     }

    });

});
</script>