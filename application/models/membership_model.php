<?php

class Membership_model extends CI_Model 
{
	function checkValidation($username_lowercase,$password_md5)
	{
		$this->db->where('username',$username_lowercase);
		$this->db->where('password',$password_md5);
		$result = $this->db->get('membership_table');

		if($result->num_rows() == 1) return true; 
		else return false;
	}
	
	function addMember($new_member_data)
	{
		$add_member_result = $this->db->insert('membership_table',$new_member_data);
		return $add_member_result;
	}

	function duplicateUsername($username)
	{
		$this->db->where('username',$username);
		$result = $this->db->get('membership_table');

		if($result->num_rows() > 0) return true;
		else return false;
	}

	function getUserID($username)
	{
		$this->db->where('username',$username);
		$query = $this->db->get('membership_table');
		return $query->result()[0]->user_id;
	}	
}

?>