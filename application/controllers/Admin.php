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

	// second section service edit
	public function SecondSectionServiceEdit(){
		$this->load->view("seccond-section-service/seccond-service-edit");

	}

	// second section service edit form1 submit function
	public function SecondServiceForm1Submit(){
		$data["icon"] = $this->input->post("icon");
		$data["tittle"] = $this->input->post("tittle");
		$data["text"] = $this->input->post("paragraph");
		$tableName = "seccond_section_service";
		$id = 1;
		$idName = "service_ID";
		$this->Model->updateDataById($idName,$id,$tableName,$data);

	}
	// second section service edit form2 submit function
	public function SecondServiceForm2Submit(){
		$data["icon"] = $this->input->post("icon");
		$data["tittle"] = $this->input->post("tittle");
		$data["text"] = $this->input->post("paragraph");
		$tableName = "seccond_section_service";
		$id = 2;
		$idName = "service_ID";
		$this->Model->updateDataById($idName,$id,$tableName,$data);

	}
	// second section service edit form2 submit function
	public function SecondServiceForm3Submit(){
		$data["icon"] = $this->input->post("icon");
		$data["tittle"] = $this->input->post("tittle");
		$data["text"] = $this->input->post("paragraph");
		$tableName = "seccond_section_service";
		$id = 3;
		$idName = "service_ID";
		$this->Model->updateDataById($idName,$id,$tableName,$data);

	}

	// second section service view function
	public function SecondServiceView(){
		$crud = new grocery_CRUD();

		// $crud->set_theme('datatables');

		$crud->set_table('seccond_section_service');

		$crud->set_subject('Groups');

		// $crud->columns('subject_name','status');

		//$this->config->config['grocery_crud_file_upload_allow_file_types']  = 'gif|jpeg|jpg|png|svg';

		// $crud->required_fields('subject_name', 'status');

		//$crud->set_field_upload('logo','assets/uploads/images');

		// $crud->field_type('status', 'true_false');

	  $crud->callback_after_upload(array($this,'callback_after_upload'));

		$crud->unset_delete();

		// $crud->unset_export();

		// $crud->unset_fields('created_at','updated_at');

		// $crud->unset_print();

		$crud->unset_add();

		$output = $crud->render();

		$this->SeccondServiceOutput($output);
		}
	function SeccondServiceOutput($output = null){
		$this->load->view("seccond-section-service/seccond-service-view.php",$output);

	}

	// expertise Section
	public function expertiseSection(){

		$crud = new grocery_CRUD();
		// $crud->set_theme('datatables');
		$crud->set_table('skill_section');

		$this->config->config['grocery_crud_file_upload_allow_file_types']  = 'gif|jpeg|jpg|png|svg';

		$crud->set_field_upload('image','uploads/');
		$crud->unset_delete();
		$crud->unset_add();
		$crud->callback_before_delete(array($this,'log_user_before_delete'));
		$output = $crud->render();
		$this->expertiseSectionView($output);
		}
	function expertiseSectionView($output = null){
		$this->load->view("expertise-skill/skill.php",$output);

	}
	// Our service Section Headding
	public function ourServiceSectionHeadding(){

		$crud = new grocery_CRUD();
		// $crud->set_theme('datatables');
		$crud->set_table('our_service_headding');
		$crud->unset_delete();
		$crud->unset_add();
		$crud->callback_before_delete(array($this,'log_user_before_delete'));
		$output = $crud->render();
		$this->ourServiceSectionHeaddingView($output);
		}
	function ourServiceSectionHeaddingView($output = null){
		$this->load->view("our-service/service-headding.php",$output);

	}

	// Our service Section Headding
	public function ourServiceSectionFeature(){

		$crud = new grocery_CRUD();
		// $crud->set_theme('datatables');
		$crud->set_table('our_service_feature');
		$crud->unset_delete();
		$crud->unset_add();
		$crud->callback_before_delete(array($this,'log_user_before_delete'));
		$output = $crud->render();
		$this->ourServiceSectionFeatureView($output);
		}
	function ourServiceSectionFeatureView($output = null){
		$this->load->view("our-service-feature/our-feature.php",$output);

	}

	// Client Counter Section Edit
	public function ourClientCounterSection(){

		$crud = new grocery_CRUD();
		// $crud->set_theme('datatables');
		$crud->set_table('counter');
		$crud->unset_delete();
		$crud->unset_add();
		$crud->callback_before_delete(array($this,'log_user_before_delete'));
		$output = $crud->render();
		$this->ourClientCounterSectionView($output);
		}
	function ourClientCounterSectionView($output = null){
		$this->load->view("client-counter/client-counter.php",$output);

	}
}
