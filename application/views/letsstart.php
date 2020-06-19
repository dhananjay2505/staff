<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (!$this->session->userdata('user_token')) {
	redirect('/login/');
}
if ($this->session->userdata('loginin')) {
	$this->session->set_flashdata('msg','<div class="alert alert-success text-center" id="successMessage">You are successfully registered.</div>');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lets Start</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="WeThink Studio is an award winning UX Agency with practices spanning User Experience, Mobility, Service Design, Digital Transformation, User Research and Agile UX" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css'); ?>">
</head>
<body>
	<div id="h"><?php echo  $this->session->flashdata('msg');?>
	            <?php if(isset($msg)){?>
	             <?php echo $msg;?>
	               <?php } ?></div>
	<?php echo form_open('/userlogout/'); ?>
		<input type="submit" name="logout" value="Logout">
	</form>
	<?php echo form_open('/profile/'); ?>
		<input type="submit" name="" value="Let's Start">
	</form>
	</body>
</html>
<script src="<?php echo base_url('assets/js/jquery-3.4.0.min.js'); ?>"></script>
<script type="text/javascript">
	setTimeout(function () {
		$("#h").hide();
	}, 2000);
	<?php $this->session->unset_userdata('loginin'); ?>
</script>