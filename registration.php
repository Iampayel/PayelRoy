<!DOCTYPE html>
<html>
<head>
<meta charset="utd-8">
<meta http-equiv="X-UA-compatible">
<meta name="viewport" content="width-device-width, initial-scale=1">
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="col-md-12" ><h3 style="background-color:#29447B;text-align:center;color:white;padding-top:40px;padding-bottom:40px">Registration</h3> </div>
<div class="col-sm-6 " style="width:500px;height:700px;font:20px;float:right">

<?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
<form action=" " method="POST">
<div class="form-group" >
<label for="username">Name</label>
<input class="form-control" type="text"  id="name" name="username" required>
</div>
<div class="form-group">
<label for="email">Email</label>
<input class="form-control" type="text"  id="email" name="email" required>
</div>


<div class="form-group">
<label for="password">Password</label>
<input class="form-control" type="password"  id="password" name="password" required>
</div>

<div class="form-group">
<label for="mobile">Phone</label>
<input class="form-control" type="text"  id="mobile" name="mobile" required>
</div>

<div class="form-group">
<label for="state">State</label>
<input class="form-control" type="text"  id="state" name="state" required>
</div>

<div class="form-group">
<label for="gender">Gender</label>
<select class="form-control" id="gender" name="gender">

<option value="Male">Male</option>
<option value="Female">Female</option></select>
</div>
<div class="text-center">
<button class="btn btn-primary" name="registration">Register</button>
</div>
</form>
</div>
<div class="col-md-6" >
<image width="570" height="734" src="<?php echo base_url();?>assets/images/reg.png" alt=" width:600px">

</div>



<script src="<?php echo base_url() ;?>assets/js/bootstrap.min.js"></script>
</body>
</html>