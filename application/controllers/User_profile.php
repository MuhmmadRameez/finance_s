<?php 
	class User_profile extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Basic_profile_model');
			$this->load->model('User_model');
		}
		public function index()
		{
			$user_id=$_SESSION['id'];
			$data['signup_record']=$this->User_model->get_user_details($user_id);
			$data['basic_profile']=$this->Basic_profile_model->fetch_basic_profile($user_id);
			$data['financial_profile']=$this->Basic_profile_model->fetch_financial_profile($user_id);
			$data['account_pay_able']=$this->Basic_profile_model->fetch_account_payable($user_id);
			$data['saving']=$this->Basic_profile_model->fetch_saving($user_id);
			$data['investment']=$this->Basic_profile_model->investment($user_id);
			$data['auto_loan']=$this->Basic_profile_model->fetch_auto_loan($user_id);
			$data['credit_card']=$this->Basic_profile_model->fetch_credit_card($user_id);
			$data['cust_loan']=$this->Basic_profile_model->fetch_customer_loan($user_id);
			$data['real_estate']=$this->Basic_profile_model->fetch_real_estate($user_id);
			$data['student_loan']=$this->Basic_profile_model->fetch_student_loan($user_id);
			$data['unpaid_tax']=$this->Basic_profile_model->fetch_unpaid_tax($user_id);
			$data['others']=$this->Basic_profile_model->fetch_others($user_id);
		
		if (!empty($data['basic_profile']) && !empty($data['financial_profile']) && !empty($data['account_pay_able'])  && !empty($data['saving'])  && !empty($data['investment']) && !empty($data['auto_loan']) && !empty($data['cust_loan']) && !empty($data['real_estate'])&& !empty($data['student_loan']) && !empty($data['unpaid_tax']) && !empty($data['others']) ) 
			{

				$this->load->view('layout/header');
				$this->load->view('layout/nav');
				$this->load->view('user_profile/basic_profile',$data);
				$this->load->view('layout/footer');
			}
			else
			{
				$this->load->view('layout/header');
				$this->load->view('layout/nav');
				$this->load->view('user_profile/basic_profile');
				$this->load->view('layout/footer');	
			}
			
		}

	public function insert_basic()
	{
		if(!empty($_FILES['profile_image']['name'])){
			$config['upload_path'] = 'assets/user_images/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['file_name'] = $_FILES['profile_image']['name'];

			//Load upload library and initialize configuration
			$this->load->library('upload',$config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('profile_image')){
				$uploadData = $this->upload->data();
				$picture = $uploadData['file_name'];
			}else{
				$picture = '';
			}
		}else{
			$picture = '';
		}
		$martial_status = $this->input->post('martial');
		$id = $this->input->post('rec_id');
		$user_id=$this->input->post('id');
			$where= [
						'id'=>$id,
						'user_id'=>$user_id,
			];
			$this->db->delete('fs_basic_profile',$where);
				
			$data = array(
				'user_id'		   =>$this->input->post('id'),
				'first_name'	   =>$this->input->post('name'),
				'last_name'		   =>$this->input->post('lastname'),
				'dob'			   =>$this->input->post('dob'),
				'adress'		   =>$this->input->post('adress'),
				'country'		   =>$this->input->post('country'),
				'province'		   =>$this->input->post('province'),
				'city'		   	   =>$this->input->post('city'),
				'language'		   =>$this->input->post('language'),
				'gender'		   =>$this->input->post('gender'),
				'age'			   =>$this->input->post('age'),
				'image'			   =>$picture,
				'martial_status'   =>$this->input->post('martial'),
				'created_at'	   =>date("Y-m-d H:i:s"),

			);
			$basic_profile = $this->Basic_profile_model->basic_profile($data);
			if ($martial_status=="yes") 
			{
				$this->add_spouce();
			}
			
			if ($basic_profile>0) 
			{
				$this->financial_income();
				$this->investment_profile();
				$this->account_payable();
				$this->auto_loan();
				$this->credit_debit();
				$this->customer_loan();
				$this->student_loan();
				$this->unpaid_tax();
				$this->other_liabilites();
				$this->real_state_mortgage();
				$this->saving();
			}
			return redirect('User/user_profile/'.$user_id);
			/*$id = $this->db->insert_id();
			$array = array(
				'success'		=>	true,
			); */
		
	}

		public function financial_income()
		{
			$id = $this->input->post('investment_id');
			$user_id = $this->input->post('id');

			$where= [
						'id'=>$id,
						'user_id'=>$user_id,
			];
			$this->db->delete('fs_financial_profile',$where);
		
			$data = array(
				'user_id'		  			=>$this->input->post('id'),
				'salary_income'	   			=>$this->input->post('salary_income'),
				'rental_income'		  		=>$this->input->post('rental_income'),
				'commision_income'			=>$this->input->post('commision_income'),
				'other_income'		   		=>$this->input->post('other_income'),
				'dividends'		   			=>$this->input->post('dividends'),
				'created_at'	   			=>date("Y-m-d H:i:s"),

			);
			$this->Basic_profile_model->financial_income($data);
	}

	/*Debits record start*/

	public function account_payable()
	{


		$payable = array(
					'user_id'				 =>$this->input->post('id'),
					'account_currency'		 =>$this->input->post('account_curruncy'),
					'account_return_annum'	 =>$this->input->post('rate_per_anum'),
					'account_frequecncy'	 =>$this->input->post('return_intrest'),
					'account_minimum_percent'=>$this->input->post('minimum_payment'),
					'created_at'			 =>date('Y-m-d H:i:s'),
					'created_by'			 =>$this->input->post('id'),
		);

		$this->db->insert('fs_account_payable',$payable);
	}

	public function auto_loan()
	{
		$auto_loan = array(
					'user_id'					 =>$this->input->post('id'),
					'auto_loan_liability'		 =>$this->input->post('auto_loan_liability'),
					'auto_loan_return_anum'		 =>$this->input->post('auto_loan_rate_per_anum'),
					'auto_loan_frequency'		 =>$this->input->post('auto_loan_return_intrest'),
					'auto_minimum_payment'	 	 =>$this->input->post('auto_loan_minimum_payment'),
					'created_at'			 	 =>date('Y-m-d H:i:s'),
					'created_by'			 	 =>$this->input->post('id'),
		);
		$this->db->insert('fs_auto_loan',$auto_loan);
	}

	public function credit_debit()
	{
		$credit_debit = array(
					'user_id'					 =>$this->input->post('id'),
					'credit_liability'		 	 =>$this->input->post('debit_credit_liability'),
					'credit_return_per_annum'	 =>$this->input->post('debit_credit_rate_per_anum'),
					'credit_frequency'		 	 =>$this->input->post('debit_credit_return_intrest'),
					'credit_minimum_payment'	 =>$this->input->post('debit_credit_minimum_payment'),
					'created_at'			 	 =>date('Y-m-d H:i:s'),
					'created_by'			 	 =>$this->input->post('id'),
		);
		$this->db->insert('fs_credit_card',$credit_debit);
	}


	public function customer_loan()
	{
		$customer_loan = array(
					'user_id'					 =>$this->input->post('id'),
					'customer_liability'		 =>$this->input->post('customer_loan_liability'),
					'customer_frequency'	 	 =>$this->input->post('customer_loan_rate_per_anum'),
					'customer_return_per_annum'	 =>$this->input->post('customer_loan_return_intrest'),
					'customer_minimum_payment'	 =>$this->input->post('customer_loan_minimum_payment'),
					'created_at'			 	 =>date('Y-m-d H:i:s'),
					'created_by'			 	 =>$this->input->post('id'),
		);
		$this->db->insert('fs_customer_loan',$customer_loan);
	}



	public function student_loan()
	{
		$id = $this->input->post('student_loan_id');
			$user_id = $this->input->post('id');

			$where= [
						'id'=>$id,
						'user_id'=>$user_id,
			];
			$this->db->delete('fs_student_loan',$where);
		$student_loan = array(
					'user_id'					=>$this->input->post('id'),
					'student_liability'		 	=>$this->input->post('student_loan_liability'),
					'student_return_per_annum'	=>$this->input->post('student_loan_rate_per_anum'),
					'student_frequency'			=>$this->input->post('student_loan_return_intrest'),
					'student_minimum_payment'	=>$this->input->post('student_loan_minimum_payment'),
					'created_at'			 	=>date('Y-m-d H:i:s'),
					'created_by'			 	=>$this->input->post('id'),
		);
		$this->db->insert('fs_student_loan',$student_loan);
	}


	public function unpaid_tax()
	{
		$id = $this->input->post('unpaid_id');
			$user_id = $this->input->post('id');

			$where= [
						'id'=>$id,
						'user_id'=>$user_id,
			];
			$this->db->delete('fs_unpaid',$where);
		$unpaid = array(
					'user_id'					=>$this->input->post('id'),
					'unpaid_liability'		 	=>$this->input->post('unpaid_tax_liability'),
					'unpaid_return_per_annum'	=>$this->input->post('unpaid_tax_rate_per_anum'),
					'unpaid_frequency'			=>$this->input->post('unpaid_tax_return_intrest'),
					'unpaid_minimum_payment'	=>$this->input->post('unpaid_tax_minimum_payment'),
					'created_at'			 	=>date('Y-m-d H:i:s'),
					'created_by'			 	=>$this->input->post('id'),
		);
		$this->db->insert('fs_unpaid',$unpaid);
	}

	public function other_liabilites()
	{

			$id = $this->input->post('other_id');
			$user_id = $this->input->post('id');

			$where= [
						'id'=>$id,
						'user_id'=>$user_id,
			];
			$this->db->delete('fs_other',$where);

		$other_liabilites = array(
					'user_id'					=>$this->input->post('id'),
					'other_liability'		 	=>$this->input->post('other_liabilities_liability'),
					'other_return_per_annum'	=>$this->input->post('money_owed_rate_per_anum'),
					'other_frequency'			=>$this->input->post('money_owed_return_intrest'),
					'other_minimum_payment'	    =>$this->input->post('money_owed_minimum_payment'),
					'created_at'			 	=>date('Y-m-d H:i:s'),
					'created_by'			 	=>$this->input->post('id'),
		);
		$this->db->insert('fs_other',$other_liabilites);
	}


	public function real_state_mortgage()
	{
		$id = $this->input->post('real_estate_id');
			$user_id = $this->input->post('id');

			$where= [
						'id'=>$id,
						'user_id'=>$user_id,
			];
			$this->db->delete('fs_real_estate',$where);
		$mortgage = array(
					'user_id'						=>$this->input->post('id'),
					'real_estate_liability'		 	=>$this->input->post('real_estate_liability'),
					'real_estate_eturn_per_annum'	=>$this->input->post('real_estate_rate_per_anum'),
					'real_estate_frequency'			=>$this->input->post('real_estate_return_intrest'),
					'real_estate_minimum_payment'	=>$this->input->post('real_estate_minimum_payment'),
					'created_at'			 	 	=>date('Y-m-d H:i:s'),
					'created_by'			 		=>$this->input->post('id'),
		);
		$this->db->insert('fs_real_estate',$mortgage);
	}
	/*Debits record end*/

	public function investment_profile()
	{
		$user_id =$this->input->post('user_id');
		$tax = $this->input->post('tax');
		$currency = $this->input->post('currency');
		$per = $this->input->post('per');
		$year_month=$this->input->post('monthly');
		foreach ($user_id as $key=>$id) 
			{
					$array = array(
						'user_id'=>$id,
						'tax'=>$tax[$key],
						'currency'=>$currency[$key],
						'percentage'=>$per[$key],
						'monthly_yearly'=>$year_month[$key],
						'created_by'=>$id,
						'created_at'=>date("Y-m-d H:i:s"),
					);
					$this->db->insert('fs_investment',$array);
				}		
			}

	public function add_spouce()
	{
		$spouce_detail = array(
		'user_id'		=>$this->input->post('id'),
		'marriage_date' =>$this->input->post('marriage_date'),
		'spouce_name'   =>$this->input->post('spouce_name'),
		'children_name' =>$this->input->post('children_name'),
		'dob' 			=>$this->input->post('date_of_birth'),
	);
	$this->db->insert('fs_spouce',$spouce_detail);
	}

	public function saving()
	{
		$id = $this->input->post('saving_id');
			$user_id = $this->input->post('id');

			$where= [
						'id'=>$id,
						'user_id'=>$user_id,
			];
			$this->db->delete('fs_saving',$where);
		$saving = array(
		'user_id'					=>$this->input->post('id'),
		'emergency_fund' 			=>$this->input->post('emergency_fund'),
		'retirement_fund'   		=>$this->input->post('retirement'),
		'education_fund'			=>$this->input->post('education_fund'),
		'car_replacement_fund' 		=>$this->input->post('car_replacement'),
		'investment' 			 	=>$this->input->post('investment'),
		'other'   		 	 		=>$this->input->post('other_fund'),
	);
	$this->db->insert('fs_saving',$saving);
	}

	}
