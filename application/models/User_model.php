<?php
class User_model extends CI_Model
{
	/*function fetch_all()
	{
		$this->db->order_by('id', 'DESC');
		return $this->db->get('tbl_sample');
	}*/

	function insert_api($data)
	{
		$this->db->insert('fs_signup', $data);

	}

	function fetch_single_user()
	{
		$query = $this->db->get('fs_signup');
		return $query->result();
	}

	function update_api()
	{
		$id   =$this->input->post('id');
		$verification_code =$this->input->post('code');
		$array = array(
			'is_approved'=>1,
		);
		$this->db->where('id', $id);
		$this->db->where('verification_code',$verification_code);
		$this->db->update('fs_signup',$array);
	}


	function update_verification_status($user_id,$verification_code,$verification_status=null)
	{
		/*$id   =$this->input->post('id');*/
		/*$verification_code =$this->input->post('code');*/
		$verification_code;
		$user_id ;
		$verification_status ;
		if ($verification_status=="0") 
		{
			$array = array(
			'is_approved'=>0,
		);
		}
		else
		{

		}
		$array = array(
			'is_approved'=>1,
		);
		$this->db->where('id', $user_id);
		$this->db->where('verification_code',$verification_code);
		$this->db->update('fs_signup',$array);
		if ($this->db->affected_rows()>0) 
		{
			$record = $this->get_verificaton_status($user_id,$verification_code);
			echo json_encode($record);
			
		}
		
	}

	public function get_verificaton_status($id,$code)
	{
		$this->db->select('fs_signup.id , fs_signup.verification_code,fs_signup.is_approved');
		$this->db->where('id',$id);
		$this->db->where('verification_code',$code);
		return $this->db->get('fs_signup')->result();
	}


	/*user info fetch after verification required id*/
	public function get_info($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('fs_signup')->row_array();
		

	}

	function delete_single_user($user_id)
	{
		$this->db->where('id', $user_id);
		$this->db->delete('tbl_sample');
		if($this->db->affected_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function check_email($email)
	{
		$this->db->select('fs_signup.email');
		$this->db->where('fs_signup.email',$email);
		$query = $this->db->get('fs_signup');
		if ($query->num_rows()>0) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function get_user_details($user_id)
	{
		$this->db->select('fs_signup.id,fs_signup.first_name,fs_signup.last_name,fs_signup.email,fs_signup.phone,account_creation_date,fs_signup.updated_at');
		$this->db->where('fs_signup.id',$_SESSION['id']);
		return $this->db->get('fs_signup')->row_array();
	}

	/*update profile*/
		public function update_user_account()
		{
			$id = $this->input->post('id');
			$update_array = array(
				'first_name'=>$this->input->post('name'),
				'last_name'=>$this->input->post('lastname'),
				'email'=>$this->input->post('email'),
				'phone'=>$this->input->post('contact'),
				'updated_at'=>date("Y-m-d H:i:s"),
				'updated_by'=>$this->input->post('id')
			);
			$this->db->where('id',$id);
			$this->db->update('fs_signup',$update_array);
			if ($this->db->affected_rows()>0) 
			{
				$this->session->set_flashdata('success_msg','Account information updated successfully');
				return redirect('User/user_profile');	
			}
		}
	/*update profile*/
	
}
