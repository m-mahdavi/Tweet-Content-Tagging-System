<?php
// Tweet Content Tagging System
// Author: Mohammad Mahdavi
// Email: moh.mahdavi@ut.ac.ir
// Date: Winter 2015
?> 

<div class="login_signup_div">
	<h3 class="my_h persian_font center_font"> لطفا حساب کاربری خود را ایجاد کنید: </h3>
	<?php
	echo form_open('login/addUser');
	echo form_input('first_name_lnd',set_value('first_name_lnd',$this->input->post('first_name_lnd')),'placeholder="First Name"');
	echo form_input('last_name_lnd',set_value('last_name_lnd',$this->input->post('first_name_lnd')),'placeholder="Last Name"');
	echo form_input('username_lnd',set_value('username_lnd',$this->input->post('first_name_lnd')),'placeholder="Email Address"');
	echo form_password('password_pwd','','placeholder="Password"');
	echo form_password('password_confirmation_pwd','','placeholder="Password Confirmation"');
	echo "<div class='button_div' align='center'>";
	echo anchor('login/index','بازگشت');
	echo form_submit('submit','ایجاد حساب کاربری');
	echo "</div>";
	?>
</div>

<?php 
	echo validation_errors('<h4 class="english_font center_font" style="color:red">');
	if (isset($message)) echo "<div class='error_div'> $message </div>";
?>