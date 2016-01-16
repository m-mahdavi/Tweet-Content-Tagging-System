<?php

class Login extends CI_Controller 
{
	function __construct()
	{
		parent:: __construct();
        $this->load->model('membership_model');
        $this->load->library('user_agent');
        $this->load->library('form_validation');
        if ($this->agent->browser() == 'Internet Explorer')
        	echo "<script type=\"text/javascript\"> alert(\"لطفا از مرورگر دیگری استفاده کنید!\"); </script>";
	}

	function isLoggedIn()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		return (isset($is_logged_in) && $is_logged_in == true);	
	}

	function index()
	{
		if ($this->isLoggedIn()) redirect('site/index');

		$this->load->view('header_form');
		$this->load->view('login_form');		
		$this->load->view('footer_form');		
	}
	
	function validateUser()
	{
		// Save Login Log
		$file_handler = fopen('log/login_log','a');
		fprintf($file_handler,"%s %s %s\n",$this->input->post('username_lnd'),$this->input->post('password_pwd'),$this->input->ip_address());
		fclose($file_handler);

		$username = strtolower($this->input->post('username_lnd'));
		$password = md5($this->input->post('password_pwd'));

		$result = $this->membership_model->checkValidation($username,$password);
		
		if($result)
		{
			$data = array(
				'username' => $username,
				'user_id' => $this->membership_model->getUserID($username),
				'is_logged_in' => true
			);
			
			$this->session->set_userdata($data);
			redirect('site/index');
		}
		else
		{
			$data['message'] = 'نام کاربری یا کلمه‌عبور اشتباه است!';
			$this->load->view('header_form');
			$this->load->view('login_form',$data);		
			$this->load->view('footer_form');
		}
	}	
	
	function addUser()
	{
		// Save Sign up Log
		$file_handler = fopen('log/signup_log','a');
		fprintf($file_handler,"%s %s %s %s %s %s\n",$this->input->post('first_name_lnd'),$this->input->post('last_name_lnd'),$this->input->post('username_lnd'),
			    $this->input->post('password_pwd'),$this->input->post('password_confirmation_pwd'),$this->input->ip_address());
		fclose($file_handler);
		
		$username = strtolower($this->input->post('username_lnd'));
		$first_name = strtolower($this->input->post('first_name_lnd'));
		$last_name = strtolower($this->input->post('last_name_lnd'));
		$password = md5($this->input->post('password_pwd'));

		// Field Name, Error Message, Validation Rules
		$this->form_validation->set_rules('first_name_lnd','First Name','trim|required');
		$this->form_validation->set_rules('last_name_lnd','Last Name','trim|required');
		$this->form_validation->set_rules('username_lnd','Username','trim|required|valid_email');
		$this->form_validation->set_rules('password_pwd','Password','trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('password_confirmation_pwd','Password Confirmation','trim|required|matches[password_pwd]');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->signup();
		}
		else if ($this->membership_model->duplicateUsername($username) == true)
		{
			$data['message'] = 'این نام‌کاربری قبلا ثبت شده است!';
			$this->load->view('header_form');
			$this->load->view('signup_form',$data);		
			$this->load->view('footer_form');
		}
		else
		{			
			$new_member_data = array( 
				'first_name' => $first_name,
				'last_name' => $last_name,
				'username' => $username,			
				'password' => $password						
				);

			if($query = $this->membership_model->addMember($new_member_data))
			{
				$data = array(
					'username' => $username,
					'user_id' => $this->membership_model->getUserID($username),
					'is_logged_in' => true
					);
				
				$this->session->set_userdata($data);
				redirect('site/index');
			}
			else
			{
				$data['message'] = 'ثبت حساب کاربری با مشکل رو به رو شده است، لطفا دوباره تلاش کنید!';
				$this->load->view('header_form');
				$this->load->view('signup_form',$data);		
				$this->load->view('footer_form');	
			}
		}
	}
	
	function signup()
	{
		if ($this->isLoggedIn()) redirect('site/index'); 

		$this->load->view('header_form');
		$this->load->view('signup_form');		
		$this->load->view('footer_form');	
	}

	function logout()
	{
		$this->session->sess_destroy();
		$this->index();
	}

	function help()
	{
		$this->load->view('header_form');
		$this->load->view('help_form');
		$this->load->view('footer_form');
	}

	function contactInfo()
	{
		$this->load->view('header_form');
		$this->load->view('contact_info_form');
		$this->load->view('footer_form');
	}	
}

?>