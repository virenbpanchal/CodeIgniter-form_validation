<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CodeIgniter Form-Validation</title>

	<style type="text/css">
	body {
		background-color: #fff;
		margin: 40px;
		font: 16px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}
	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 20px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}
	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	.field
	{
		padding: 10px;
	}
	legend
	{
		font-weight: bold;
		font-style:italic;
	}
	label
	{
	   font-weight: bold;
	}
	.error
	{
	   font-family: Verdana, Arial, sans-serif; 
	   font-size: 0.8em;
	   color: #F00;
	}
	</style>
</head>
<body>

<div id="container">
	<h1><a href="<?php echo site_url(); ?>" title="CodeIgniter Form-Validation">CodeIgniter Form-Validation</a></h1>
    
	<?php echo form_open('form_controller'); ?>
    <fieldset>
    <legend>User Registration Form</legend>
    
    <?php echo validation_errors(); ?>
    
    <div class="field">
    <label for="firstname">First Name</label><br/>
    <input type="text" name="firstname" id="firstname" value="<?php echo set_value('firstname');?>">
    <?php echo form_error('firstname');?>
    </div>
    
    <div class="field">
    <label for="lastname">Last Name</label><br/>
    <input type="text" name="lastname" id="lastname" value="<?php echo set_value('lastname');?>">
    <?php echo form_error('lastname');?>
    </div>
    
    <div class="field">
    <label>Gender</label><br/>
    <input type="radio" name="gender" id="male" value="male" <?php echo set_radio('gender', 'male');?>>
    <label for="male">Male</label>
    <input type="radio" name="gender" id="female" value="female" <?php echo set_radio('gender', 'female');?>>
    <label for="female">Female</label>
    <?php echo form_error('gender');?>
    </div>

    <div class="field">
    <label for="mobileno">Mobile No</label><br/>
    <input type="text" name="mobileno" id="mobileno" maxlength="10" value="<?php echo set_value('mobileno');?>">
    <?php echo form_error('mobileno');?>
    </div>

    <div class="field">
    <label for="emailid">Email</label><br/>
    <input type="text" name="emailid" id="emailid" value="<?php echo set_value('emailid');?>">
    <?php echo form_error('emailid');?>
    </div>

    <div class="field">
    <label for="password">Password</label><br/>
    <input type="password" name="password" id="password" value="<?php echo set_value('password');?>">
    <?php echo form_error('password');?>
    </div>

    <div class="field">
    <label for="confirm_password">Confirm Password</label><br/>
    <input type="password" name="confirm_password" id="confirm_password" value="<?php echo set_value('confirm_password');?>">
    <?php echo form_error('confirm_password');?>
    </div>

	<div class="field">
    <label for="country">Country</label><br/>
    <select name="country" id="country">
    	<option value="">--Select--</option>
        <option value="USA" <?php echo set_select('country', 'USA');?>>USA</option>
        <option value="India" <?php echo set_select('country', 'India');?>>India</option>
        <option value="Canada" <?php echo set_select('country', 'Canada');?>>Canada</option>
    </select>
    <?php echo form_error('country');?>
    </div>

    <div class="field">
    <label for="degree">Degree</label><br/>
    <select multiple="multiple" name="degree[]" id="degree">
        <option value="BE" <?php echo set_select('degree[]', 'BE');?>>BE</option>
        <option value="ME" <?php echo set_select('degree[]', 'ME');?>>ME</option>
        <option value="BCA" <?php echo set_select('degree[]', 'BCA');?>>BCA</option>
        <option value="MCA" <?php echo set_select('degree[]', 'MCA');?>>MCA</option>
        <option value="MBA" <?php echo set_select('degree[]', 'MBA');?>>MBA</option>
    </select>
    <?php echo form_error('degree[]');?>
    </div>

    <div class="field">
    <label for="hobby">Hobby</label><br/>
    <input type="checkbox" name="hobby[]" id="cricket" value="Cricket" <?php echo set_checkbox('hobby[]', 'Cricket'); ?>/><label for="cricket" id="sublabel">Cricket</label>
    <input type="checkbox" name="hobby[]" id="chess" value="Chess" <?php echo set_checkbox('hobby[]', 'Chess'); ?>/><label for="chess" id="sublabel">Chess</label>
    <input type="checkbox" name="hobby[]" id="football" value="Football" <?php echo set_checkbox('hobby[]', 'Football'); ?>/><label for="football" id="sublabel">Football</label>
    <input type="checkbox" name="hobby[]" id="volleyball" value="Volleyball" <?php echo set_checkbox('hobby[]', 'Volleyball'); ?>/><label for="volleyball" id="sublabel">Volleyball</label><br/>
    <?php echo form_error('hobby[]');?>
    </div>

    <div class="field">
    <input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="Reset">
    </div>

    </fieldset>
    <?php echo form_close(); ?>
</div>

</body>
</html>