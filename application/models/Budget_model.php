<?php 
	class Budget_model extends CI_Model
	{
		public function money_in_save()
		{

			$array = array(
						'user_id' 			=>$this->input->post('id'),
						'paycheck' 			=>$this->input->post('paycheck'),
						'additional_income' =>$this->input->post('additional_amount'),
			);
			$this->db->insert('fs_budget_inflows',$array);
			if ($this->db->affected_rows()>0) 
			{
				$this->session->set_flashdata('success_msg','Money In Save');
				return redirect('Budget/money_in');
			}
		}

		public function fetch_money_in_save()
		{
			$this->db->select('fs_budget_inflows.id,fs_budget_inflows.user_id , fs_budget_inflows.paycheck , fs_budget_inflows.additional_income');
			$this->db->where('fs_budget_inflows.user_id',$_SESSION['id']);
			return $this->db->get("fs_budget_inflows")->row_array();
		}

		public function get_money_in()
		{
				$this->db->where('fs_budget_inflows.user_id',$_SESSION['id']);
			return $this->db->get("fs_budget_inflows")->result();	
		}

		public function fetch_money_out()
		{
			$this->db->select('fs_money_out_flow.id,fs_money_out_flow.user_id , fs_money_out_flow.groceries , fs_money_out_flow.transpotation,fs_money_out_flow.utilities,fs_money_out_flow.dining_traveling,fs_money_out_flow.education');
			$this->db->where('fs_money_out_flow.user_id',$_SESSION['id']);
			return $this->db->get("fs_money_out_flow")->row_array();
		}


		public function money_out_save()
		{

			$array = array(
						'user_id' 			=>$this->input->post('id'),
						'groceries' 			=>$this->input->post('groceries'),
						'transpotation' =>$this->input->post('transpotation'),
						'utilities' =>$this->input->post('utilities'),
						'dining_traveling' =>$this->input->post('dining_traveling'),
						'education' =>$this->input->post('education'),
			);
			$this->db->insert('fs_money_out_flow',$array);
			if ($this->db->affected_rows()>0) 
			{
				$this->session->set_flashdata('success_msg','Money In Save');
				return redirect('Budget/money_out');
			}
		}

		
	}
?>