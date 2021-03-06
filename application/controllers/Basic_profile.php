<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Basic_profile extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  $this->load->model('Basic_profile_model');
  $this->load->library('form_validation');
 }

 function index()
 {
  $this->load->view('layout/header');
  $this->load->view('layout/nav');
  $this->load->view('basic_information/user_basic_information');
  $this->load->view('layout/footer');
  

  /*$data = $this->api_model->fetch_all();
  echo json_encode($data->result_array());*/
 }
 
 function insert()
 {
  $this->form_validation->set_rules("own_information", "First Name", "required");
  $this->form_validation->set_rules("dependants_information", "Last Name", "required");
  $this->form_validation->set_rules("education", "First Name", "required");
  $this->form_validation->set_rules("work_history", "Last Name", "required");
  $array = array();
  if($this->form_validation->run())
  {
   $data = array(
    'own_information' => trim($this->input->post('own_information')),
    'dependants_information'  => trim($this->input->post('dependants_information')),
     'education' => trim($this->input->post('education')),
    'work_history'  => trim($this->input->post('work_history'))
   );
   $this->Basic_profile_model->insert_api($data);
   $array = array(
    'success'  => true
   );
  }
  else
  {
   $array = array(
    'error'    => true,
    'own_information' => form_error('own_information'),
    'dependants_information' => form_error('dependants_information'),
    'education' => form_error('education'),
    'work_history' => form_error('work_history'),
   );
  }
  echo json_encode($array, true);
 }

 function fetch_single()
 {
    $this->load->view('layout/header');
    $this->load->view('layout/nav');
   $this->load->view('basic_information/view_basic_infomation');
   $this->load->view('layout/footer');

 /* if($this->input->post('id'))
  {
   $data = $this->api_model->fetch_single_user($this->input->post('id'));
   foreach($data as $row)
   {
    $output['own_information'] = $row["own_information"];
    $output['dependants_information'] = $row["dependants_information"];
    $output['education'] = $row["education"];
    $output['work_history'] = $row["work_history"];
   }
   echo json_encode($output);
  }*/
 }

 function update()
 {
  $this->form_validation->set_rules("first_name", "First Name", "required");
  $this->form_validation->set_rules("last_name", "Last Name", "required");
  $array = array();
  if($this->form_validation->run())
  {
   $data = array(
    'first_name' => trim($this->input->post('first_name')),
    'last_name'  => trim($this->input->post('last_name'))
   );
   $this->api_model->update_api($this->input->post('id'), $data);
   $array = array(
    'success'  => true
   );
  }
  else
  {
   $array = array(
    'error'    => true,
    'first_name_error' => form_error('first_name'),
    'last_name_error' => form_error('last_name')
   );
  }
  echo json_encode($array, true);
 }

 function delete()
 {
  if($this->input->post('id'))
  {
   if($this->api_model->delete_single_user($this->input->post('id')))
   {
    $array = array(
     'success' => true
    );
   }
   else
   {
    $array = array(
     'error' => true
    );
   }
   echo json_encode($array);
  }
 }
 
}