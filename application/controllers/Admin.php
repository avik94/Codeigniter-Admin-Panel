<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model("Model");
	}

	public function index()
	{
		$this->load->view('login');
	}
	// login form controller
	public function loginForm()
	{
		$this->form_validation->set_rules("username", "Usernmame", "required");
		$this->form_validation->set_rules("password", "Password", "required");
		if ($this->form_validation->run()==FALSE):
			$this->session->set_flashdata("userValid" , "Username and Password can't be blank");
			redirect('/');
		endif;
		$data["name"] = $this->input->post("username");
		$data["pass"] = $this->input->post("password");
		$tableName = "user_login";
		$reurnData = $this->Model->checkLoginData($tableName,$data);
		if($reurnData == 1):
			redirect(base_url().'admin_dashboard');
		else:
			$this->session->set_flashdata("message","Please Check Your Username or Password");
			redirect('/');
		endif;
	}

	// admin dashboard controller
	public function admindashboard(){
		$this->load->view("admin/admindas");
	}

	public function bannerEdit(){
		$this->load->view("banner/banner");
		$submit=$this->input->post("submit");
		if (isset($submit)) {
			$data["first_headding"] = $this->input->post("firstHeadding");
			$data["sec_headding"] = $this->input->post("secHeadding");
			$data["third_headding"] = $this->input->post("thirdHeadding");
			if(isset($_FILES['imageName'])){
				$data["background_Image"] =$_FILES['imageName']["name"];
			}
			$tableName = "first_section";
			$idName = "first_sec_ID";
			$this->Model->updateData($idName,$tableName,$data);
			$config['upload_path']     = './uploads/';
			$config['allowed_types']   = 'gif|jpg|png';
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('imageName'))
			{
				$error = array('error' => $this->upload->display_errors());
				// echo $error;
			}else{
				$this->upload->data();
			}
		}
	}

	public function bannerView(){
		$tableName = "first_section";
		$data["getBannerData"] = $this->Model->getData($tableName);
		$this->load->view("banner/banner-view",$data);
	}
	// second section edit
	public function SecondSectionEdit(){
		$this->load->view("second-section/seccondSecEdit");

	}
	// second section edit from submit function
	public function formSubmit(){
		$submit = $this->input->post("submit");
		$data["first_headding"] = $this->input->post("firstHeadding");
		$data["sec_headding"] = $this->input->post("secHeadding");
		$data["third_pragraph"] = $this->input->post("paragraph");
		$tableName = "seccond_section";
		$idName = "second_ID";
		$this->Model->updateData($idName,$tableName,$data);
	}
	// second section view
	public function SecondSectionView(){
		$tableName = "seccond_section";
		$data["getSecondSecData"] = $this->Model->getData($tableName);
		$this->load->view("second-section/secondsec-view",$data);

	}
}
