<?php
          class Basic_profile_model extends CI_Model
          {
           function fetch_all()
           {
            $this->db->order_by('id', 'DESC');
            return $this->db->get('tbl_basic_profile');
           }
           /*For Basic PRofile*/

           function basic_profile($data)
           {
            $this->db->insert('fs_basic_profile', $data);
            if($this->db->affected_rows() > 0)
            {
             return true;
            }
            else
            {
             return false;
            }
           }


           function financial_income($data)
           {
            $this->db->insert('fs_financial_profile', $data);
            if($this->db->affected_rows() > 0)
            {
             return true;
            }
            else
            {
             return false;
            }
           }

           function debits($data)
           {
            $this->db->insert('fs_debit', $data);
            if($this->db->affected_rows() > 0)
            {
             return true;
            }
            else
            {
             return false;
            }
           }

           

           function fetch_single_user($user_id)
           {
            $this->db->where("id", $user_id);
            $query = $this->db->get('tbl_basic_profile');
            return $query->result_array();
           }
           function update_api($user_id, $data)
           {
            $this->db->where("id", $user_id);
            $this->db->update("tbl_sample", $data);
           }
           
           function delete_single_user($user_id)
           {
            $this->db->where("id", $user_id);
            $this->db->delete("tbl_sample");
            if($this->db->affected_rows() > 0)
            {
             return true;
            }
            else
            {
             return false;
            }
           }
           public function fetch_basic_profile($user_id)
           {
            $this->db->select('fs_basic_profile.id , fs_basic_profile.user_id, fs_basic_profile.first_name , fs_basic_profile.last_name , fs_basic_profile.dob,fs_basic_profile.adress,fs_basic_profile.country , fs_basic_profile.province,fs_basic_profile.city,fs_basic_profile.language,fs_basic_profile.gender,fs_basic_profile.image,fs_basic_profile.martial_status,fs_basic_profile.age');
            $this->db->where('fs_basic_profile.user_id',$user_id);
            $query =  $this->db->get("fs_basic_profile");
            if ($query->num_rows()>0) 
            {
              return $query->row_array();
            }
            else
            {
                "No Record Available";
            }
           }

           public function fetch_financial_profile($user_id)
           {
            $this->db->select('fs_financial_profile.id,fs_financial_profile.user_id,fs_financial_profile.salary_income,fs_financial_profile.rental_income,fs_financial_profile.commision_income,fs_financial_profile.other_income,fs_financial_profile.dividends');
             $this->db->where('fs_financial_profile.user_id',$user_id);
            $query = $this->db->get("fs_financial_profile");
             if ($query->num_rows()>0) 
            {
              return $query->row_array();
            }
            else
            {
                "No Record Available";
            }
           }

           public function fetch_account_payable($user_id)
           {
            $this->db->select('fs_account_payable.id,fs_account_payable.user_id,fs_account_payable.account_currency,fs_account_payable.account_return_annum,fs_account_payable.account_frequecncy,fs_account_payable.account_minimum_percent,fs_account_payable.created_at');
            $this->db->where('fs_account_payable.user_id',$user_id);
            $query =  $this->db->get('fs_account_payable');
             if ($query->num_rows()>0) 
            {
              return $query->row_array();
            }
            else
            {
                "No Record Available";
            }
           }

           public function fetch_saving($user_id)
           {
            $this->db->select('fs_saving.id,fs_saving.user_id,fs_saving.emergency_fund,fs_saving.retirement_fund,fs_saving.education_fund,fs_saving.car_replacement_fund,fs_saving.investment,fs_saving.other');
            $this->db->where('fs_saving.user_id',$user_id);
            $query =  $this->db->get('fs_saving');
             if ($query->num_rows()>0) 
            {
              return $query->row_array();
            }
            else
            {
                "No Record Available";
            }

           }

           public function fetch_auto_loan($user_id)
           {
            $this->db->select('fs_auto_loan.id,fs_auto_loan.user_id,fs_auto_loan.auto_loan_liability,fs_auto_loan.auto_loan_return_anum,fs_auto_loan.auto_loan_frequency,fs_auto_loan.auto_minimum_payment');
            $this->db->where('fs_auto_loan.user_id',$user_id);
            $query =  $this->db->get('fs_auto_loan');
             if ($query->num_rows()>0) 
            {
              return $query->row_array();
            }
            else
            {
                "No Record Available";
            }
           }

           public function fetch_credit_card($user_id)
           {
            $this->db->select('fs_credit_card.id,fs_credit_card.user_id,fs_credit_card.credit_liability,fs_credit_card.credit_return_per_annum,fs_credit_card.credit_frequency,fs_credit_card.credit_minimum_payment');
            $this->db->where('fs_credit_card.user_id',$user_id);
            $query =  $this->db->get('fs_credit_card');
             if ($query->num_rows()>0) 
            {
              return $query->row_array();
            }
            else
            {
                "No Record Available";
            }

           }

           public function fetch_customer_loan($user_id)
           {
            $this->db->select('fs_customer_loan.id,fs_customer_loan.user_id,fs_customer_loan.customer_liability,fs_customer_loan.customer_return_per_annum,fs_customer_loan.customer_frequency,fs_customer_loan.customer_minimum_payment');
            $this->db->where('fs_customer_loan.user_id',$user_id);
            $query =  $this->db->get('fs_customer_loan');
             if ($query->num_rows()>0) 
            {
              return $query->row_array();
            }
            else
            {
                "No Record Available";
            }

           }

           public function fetch_real_estate($user_id)
           {
            $this->db->select('fs_real_estate.id,fs_real_estate.user_id,fs_real_estate.real_estate_liability,fs_real_estate.real_estate_eturn_per_annum,fs_real_estate.real_estate_frequency,fs_real_estate.real_estate_minimum_payment');
            $this->db->where('fs_real_estate.user_id',$user_id);
            $query =  $this->db->get('fs_real_estate');
             if ($query->num_rows()>0) 
            {
              return $query->row_array();
            }
            else
            {
                "No Record Available";
            }

           }

           public function fetch_student_loan($user_id)
           {
            $this->db->select('fs_student_loan.id,fs_student_loan.user_id,fs_student_loan.student_liability,fs_student_loan.student_return_per_annum,fs_student_loan.student_frequency,fs_student_loan.student_minimum_payment');
            $this->db->where('fs_student_loan.user_id',$user_id);
            $query =  $this->db->get('fs_student_loan');
             if ($query->num_rows()>0) 
            {
              return $query->row_array();
            }
            else
            {
                "No Record Available";
            }

           }

           public function fetch_unpaid_tax($user_id)
           {
            $this->db->select('fs_unpaid.id,fs_unpaid.user_id,fs_unpaid.unpaid_liability,fs_unpaid.unpaid_return_per_annum,fs_unpaid.unpaid_frequency,fs_unpaid.unpaid_minimum_payment');
            $this->db->where('fs_unpaid.user_id',$user_id);
            $query =  $this->db->get('fs_unpaid');
             if ($query->num_rows()>0) 
            {
              return $query->row_array();
            }
            else
            {
                "No Record Available";
            }

           }

            public function fetch_others($user_id)
           {
            $this->db->select('fs_other.id,fs_other.user_id,fs_other.other_liability,fs_other.other_return_per_annum,fs_other.other_frequency,fs_other.other_minimum_payment');
            $this->db->where('fs_other.user_id',$user_id);
            $query =  $this->db->get('fs_other');
             if ($query->num_rows()>0) 
            {
              return $query->row_array();
            }
            else
            {
                "No Record Available";
            }

           }

           

           public function investment($user_id)
           {
            $this->db->select('fs_investment.id,fs_investment.user_id,fs_investment.tax,fs_investment.currency,fs_investment.percentage,fs_investment.monthly_yearly');
            $this->db->where('fs_investment.user_id',$user_id);
            $query =  $this->db->get('fs_investment');
             if ($query->num_rows()>0) 
              {
                return $query->result();
              }
            else
            {
                "No Record Available";
            }
           }

          }