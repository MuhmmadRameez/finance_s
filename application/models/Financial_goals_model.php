<?php 
	class Financial_goals_model extends CI_Model
	{
		public function save_saving_plan()
		{
			$array = array(
					'user_id'					=>$this->input->post('id'),
					'saving_goal'				=>$this->input->post('saving_goals'),
					'period'					=>$this->input->post('peroid'),
					'per_period_amount_to_saved'=>$this->input->post('saved'),
					'period_type'				=>$this->input->post('period_type'),
					'created_at'				=>date('Y-m-d'),
					'created_by'				=>$this->input->post('id'),
			);
			$this->db->insert('fs_saving_goal',$array);
			if ($this->db->affected_rows()>0) 
			{
			 echo	json_encode("Saving Plan Add Successfully");
			 exit();
				$this->session->set_flashdata("success_msg",'Saving Plan Updated Successfully');
				return redirect('Financial_goal/saving_plan');
			}
		}

		public function fetch_record($id)
		{
			$this->db->where('user_id',$id);
			return $this->db->get('fs_saving_goal')->result();
		}

		public function save_home_plan()
		{
			$array = array(
				'user_id'			 =>$this->input->post('id'),
				'loan_amount'		 =>$this->input->post('loan_amount'),
				'deposit'			 =>$this->input->post('deposit'),
				'annual_intrest_rate'=>$this->input->post('annual_intrest'),
				'loan_term'			 =>$this->input->post('loan_term'),
				'payment_frequency'  =>$this->input->post('payment_frequency'),
				'created_at'		 =>date('Y-m-d'),
				'created_by'		 =>$this->input->post('id'),
			);
		$this->db->insert('fs_house_plan_wizard',$array);
		if ($this->db->affected_rows()>0) 
			{
			  echo	json_encode("Home Plan Add Successfully");
			 exit();
				$this->session->set_flashdata("success_msg",'Saving Plan Updated Successfully');
				return redirect('Financial_goal/house_plan');
			}
		}

		public function update_home_plan()
		{
			$id = $this->input->post('id');
			$array = array(
				'loan_amount'		 =>$this->input->post('loan_amount'),
				'deposit'			 =>$this->input->post('deposit'),
				'annual_intrest_rate'=>$this->input->post('annual_intrest'),
				'loan_term'			 =>$this->input->post('loan_term'),
				'payment_frequency'  =>$this->input->post('payment_frequency'),
				'updated_at'		 =>date('Y-m-d'),
				'updated_by'		 =>$this->input->post('id'),
			);
			$this->db->where('id',$id);
			$this->db->update('fs_house_plan_wizard',$array);
			if ($this->db->affected_rows()>0) 
			{
				return redirect('Financial_goal/house_plan');
			}
		}

		public function fetch_house_plan()
		{
			$this->db->where('user_id',$_SESSION['id']);
			return $this->db->get('fs_house_plan_wizard')->result();
		}

		public function save_investment_plan()
		{
			$user_id = $this->input->post('user_id');
			$contribution = $this->input->post('contribution');
			$period = $this->input->post('period');
			$intrest = $this->input->post('intrsest');
			$investment = $this->input->post('investment');

			foreach($user_id as $key=>$value)
			{
					$array = array(
				'user_id'						=>$value,
				'per_period_contribution'		=>$contribution[$key],
				'periods'						=>$period[$key],
				'intrest_rate_on_investment'	=>$intrest[$key],
				'value_of_investment'			=>$investment[$key],
					);
					$this->db->insert('fs_investment_wizard',$array);
					if ($this->db->affected_rows()>0) 
					{
						return redirect('Financial_goal/investment_plan');
					}
			}
		}
		public function fetch_investment_planner()
		{
			$this->db->where('user_id',$_SESSION['id']);
			return $this->db->get("fs_investment_wizard")->result();
		}

		public function save_car_purchasing()
		{
			$user_id = $this->input->post('user_id');
			$loan_amount = $this->input->post('loan');
			$anual_intrest = $this->input->post('anual');
			$loan_terms = $this->input->post('term');
			$payment_frequency = $this->input->post('frequency');
			$resedual_value = $this->input->post('value');
			foreach ($user_id as $key => $value) 
			{
				$array = array(
						'user_id'=>$value,
						'loan_amount'=>$loan_amount[$key],
						'annula_intrest_rate'=>$anual_intrest[$key],
						'loan_term'=>$loan_terms[$key],
						'payment_frequency'=>$payment_frequency[$key],
						'resedual_value'=>$resedual_value[$key],
						'created_by'=>$value,
						'created_at'=>date('Y-m-d'),
				);
				$this->db->insert('fs_car_saving',$array);
				
			}
			if ($this->db->affected_rows()>0) 
				{
					return redirect('FInancial_goal/carpurchase_wizard');
				}
		}
		public function fetch_car_investment()
		{
			$this->db->where('user_id',$_SESSION['id']);
			return $this->db->get("fs_car_saving")->result();
		}

		public function update_car_investment_plan()
		{
			
			$id =  $this->input->post('id');
			$update = array(
					'loan_amount'		 =>$this->input->post('loan'),
					'annula_intrest_rate'=>$this->input->post('anual'),
					'loan_term'    		 =>$this->input->post('term'),
					'payment_frequency'  =>$this->input->post('frequency'),
					'resedual_value'	 =>$this->input->post('value'),
			);
			$this->db->where('id',$id);
			$this->db->update('fs_car_saving',$update);
			if ($this->db->affected_rows()>0) 
			{
				$this->session->set_flashdata('success_msg','Update Record Successfully');
				return redirect('FInancial_goal/carpurchase_wizard');
			}
		}

		public function update_investment_plan()
		{
			$id = $this->input->post('id');
			$investment_update = array(
				'per_period_contribution'	=>$this->input->post('contribution'),
				'periods'				 	=>$this->input->post('period'),
				'intrest_rate_on_investment'=>$this->input->post('intrsest'),
				'value_of_investment'		=>$this->input->post('investment'),
				'updated_by'				=>$_SESSION['id'],
				'updated_at'				=>date('Y-m-d'),
			);
			$this->db->where('id',$id);
			$this->db->update('fs_investment_wizard',$investment_update);
			if ($this->db->affected_rows()>0) 
			{
				$this->session->set_flashdata('success_msg','Investment Plan updated');
				return redirect('Financial_goal/investment_plan');
			}
		}
		
	}
?>