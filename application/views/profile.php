<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (!$this->session->userdata('user_token')) {
    redirect('/login/');
}

?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="WeThink Studio is an award winning UX Agency with practices spanning User Experience, Mobility, Service Design, Digital Transformation, User Research and Agile UX" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.theme.default.min.css'); ?>">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
  <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicon/apple-icon-57x57.png">
  <title>Profile Staffing Portal</title>
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->


</head>
<body>
<div class="header"> <!--it Visible For Desktop only-->
    <div class="container">
        <a href="index.html"><img src="<?php echo base_url('assets/images/logo.png'); ?>" class="top_logo float-left"></a>
        <span class="d-block d-sm-none" style="font-size: 26px; cursor: pointer; float: right; margin-top: 0; line-height: 34px; color: #2d2d2d;" onclick="openNav()">&#9776; </span>
        <ul class="navigation desktop_view">
            <li><a href="index.html" class="top_nav">Home </a></li>
            <li><a href="search_job.html" class="top_nav">Find Jobs</a></li>
            <li><a href="post_jobs.html" class="top_nav">Post Jobs</a></li>
            <li><a href="profile.html" class="top_nav">My Profile</a></li>
            <?php echo form_open('/userlogout/'); ?> <input type="submit" name="logout" value="Logout"></form>

            <li><a href="edit-profile.html" class="top_nav">Edit Profile</a></li>
        </ul>
    </div>
</div>
<!--================= Navigation End here ====================-->    
<div class="bottom_nav mobile_view">
    <a href="index.html" class="navigate active float-left">
        <span class="icon-home icon_set"></span>
        <span class="font_12">Home</span>
    </a>
    <a href="search_job.html" class="search_icon">
        <spa class="icon-tools-and-utensils icon_set"></spa>
    </a>
    <a href="profile.html" class="navigate active float-right">
        <span class="icon-social icon_set"></span>
        <span class="font_12">Profile</span>
    </a>
</div>

<div class="container main_wrapper">
<div class="col-md-4 float-left col-12">
<div class="sidebar mt_20 desktop_view float-left">
    <span style="position: absolute; right: 20px; top: 10px; font-size: 14px;"> <a href="">Edit</a> </span>
    <img src="assets/images/profile.png" class="round_img">
    <span class="primery_title float-left pt_5">Stela Maxwell</span>
    <span class="second_subtitle float-left">stelamaxwell@gmail.com</span>
</div>

</div> <!-- ===  OL_MD 4 right side section end here ========== -->
    <div class="col-md-8 float-left col-12 no-padding">
        <div class="wrapper">
            <div class="common_box mt_20 float-left gradient_bg pb_30 pt_30">
                <a href="" style="color: #fff; text-decoration: none;position: absolute; right: 20px; top: 15px; font-size: 14px;"> 
                    <span class="icon-document icon_set"></span> Edit </a> 

                <img src="assets/images/profile.png" class="round_img_big">
                <span class="primery_title float-left text-center text-white w-100">Stela Maxwell</span>
                <span class="font_14 mb_5 float-left text-center text-white w-100">stelamaxwell@gmail.com</span>
                <span class="font_14 mb_10 float-left text-center text-white w-100">98435432332</span>
                
                <div class="block_center text-white mt_10">
                    <span class="mr_10"><span class="icon_set icon-wall-clock mr_10"></span>16 years 2 Months</span> 
                    <span class="ml_10"><span class="icon_set icon-placeholders-1 mr_10"></span>Bangalore</span> 
                </div>
            </div>
            <div class="common_box mt_10 float-left">
                <h1 class="section_title">Experience </h1>
                
                <ul class="cpmmon_ul">
                    <li>
                        <div class="w-100 float-left">
                            <span class="subtitle w-100">Head Chef</span>
                            <span class="second_subtitle w-100 float-left">Behrouz biryani ltd</span>
                            <span class="second_subtitle w-100">May 2020 - Jun 2020</span>
                        </div>
                    </li>
                    <li>
                        <div class="w-100 float-left">
                            <span class="subtitle w-100">Head Chef</span>
                            <span class="second_subtitle w-100 float-left">Behrouz biryani ltd</span>
                            <span class="second_subtitle w-100">May 2020 - Jun 2020</span>
                        </div>
                    </li>
                </ul>
            </div> <!--  ================== Experience END -->
            <div class="common_box mt_10 float-left">
                <h1 class="section_title">Experience </h1>
                
                <ul class="cpmmon_ul">
                    <li>
                        <div class="w-100 float-left">
                            <span class="subtitle w-100">BBA (Distance Learning Programme ) </span>
                            <span class="second_subtitle w-100 float-left">Institutions Name</span>
                            <span class="second_subtitle w-100">May 2020 - Jun 2020</span>
                        </div>
                    </li>
                    <li>
                        <div class="w-100 float-left">
                            <span class="subtitle w-100">10th class </span>
                            <span class="second_subtitle w-100 float-left">School Name</span>
                            <span class="second_subtitle w-100">May 2020 - Jun 2020</span>
                        </div>
                    </li>
                </ul>
            </div> <!--  ================== Education END -->
            <div class="common_box mt_10 float-left">
                <h1 class="section_title">Others Information </h1>
                
                <table class="table spec_table">
                    <tr>
                        <td class="lable_text">Date of birth </td>
                        <td class="infp_text">20-12-1989</td>
                    </tr>
                    <tr>
                        <td class="lable_text">Gender </td>
                        <td class="infp_text">Female</td>
                    </tr>
                    <tr>
                        <td class="lable_text">Current Location </td>
                        <td class="infp_text">Bangalore</td>
                    </tr>
                    <tr>
                        <td class="lable_text">Preferred Location</td>
                        <td class="infp_text">Bangalore</td>
                    </tr>
                    <tr>
                        <td class="lable_text">Last Salary </td>
                        <td class="infp_text">2.3 Lakhs per year</td>
                    </tr>
                    <tr>
                        <td class="lable_text">Expecting Salary </td>
                        <td class="infp_text">2.3 Lakhs per year</td>
                    </tr>
                    <tr>
                        <td class="lable_text">Address </td>
                        <td class="infp_text">Bnaagore full address</td>
                    </tr>
                    <tr>
                        <td class="lable_text">Languages</td>
                        <td class="infp_text">English, Hindi</td>
                    </tr>
                </table>                 
            </div> <!--  ================== Other Information END -->
            <div class="common_box mt_10 float-left mb_30">
                <h1 class="section_title mb_15">Proof of identification  </h1>
                <div class="job_container">
                    <div class="job_img">
                        <img src="assets/images/3ce84aa66f840d957ac9a85a827e22ad.png" class="">
                    </div>
                    <div class="job_caption">
                        <span class="primery_title">Addhar Card</span>
                        <span class="second_subtitle">1980 18229 929230 </span>
                    </div>
                </div>
                <div class="job_container">
                    <div class="job_img">
                        <img src="assets/images/8156af6febabd15f72166d1dd7d60b9e.png" class="">
                    </div>
                    <div class="job_caption">
                        <span class="primery_title">Addhar Card</span>
                        <span class="second_subtitle">1980 18229 929230 </span>
                    </div>
                </div>
            </div>
  

        </div>
    </div><!-- ====  COL_MD 8 right side section end here ========== -->
    
    
</div>



    <script src="assets/js/jquery-3.4.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>    