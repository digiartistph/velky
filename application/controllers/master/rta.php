<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rta extends CI_Controller{
	
	private $_mConfig;
	
	public function __construct() {
		parent::__construct();
	
		$params = array('sadmin_uname', 'sadmin_islog', 'sadmin_fullname');
		$this->sessionbrowser->getInfo($params);
		$arr = $this->sessionbrowser->mData;
	
		//authenticate pages 
		authUser(array('section' => 'admin', 'sessvar' => array('sadmin_uname', 'sadmin_islog', 'sadmin_fullname')));
	
		// sets default prefs
		$this->_mConfig = array('full_tag_open' => '<div class="pagination">', 'full_tag_close' => '</div>', 'first_link' => 'First', 'last_link' => 'Last', 'next_link' => '»', 'prev_link' => '«');
	
	}
	
	public function index(){
		$this->section();
	}
	
	public function section(){
		
		$section = ($this->uri->segment(4)) ? $this->uri->segment(4) : '';
		
		switch($section){
			case 'addoffice':
				$this->_addoffice();
				break;
			case 'editoffice':
					$this->_editoffice();
					break;
			case 'deleteoffice':
						$this->_deleteoffice();
						break;
			default:
				$this->_viewoffice();
		}
	}
	
	public function validatenewoffice(){
		
		$this->load->library('form_validation');
		$validation = $this->form_validation;
		
		$validation->set_rules('office', 'office', 'required');
		$validation->set_rules('address', 'address', 'required');
		$validation->set_rules('phone', 'phone', 'required');
		$validation->set_rules('contactperson', 'contactperson', 'required');
		$validation->set_rules('status', 'status', 'required');
		
		if($validation->run() ===  FALSE) {
			$this->_addoffice();
		} else {
			
			$this->load->model('mdldata');
			
			$params = array(
					'table' => array('name' => 'rta'),
					'fields' => array(
						'office' => $this->input->post('office'),
						'address' => $this->input->post('address'),
						'phone' => $this->input->post('phone'),
						'contactperson' => $this->input->post('contactperson'),
						'status' => $this->input->post('status')
						)
					);
			$this->mdldata->reset();
				
			if(! $this->mdldata->insert($params))
				echo 'Insert new record failed.';
			else
				redirect(base_url("master/rta"));
		}
	}
	
	public function validateupdateoffice(){
		
		$this->load->library('form_validation');
		$validation = $this->form_validation;
		
		$validation->set_rules('id', 'id', 'required');
		$validation->set_rules('office', 'office', 'required');
		$validation->set_rules('address', 'address', 'required');
		$validation->set_rules('phone', 'phone', 'required');
		$validation->set_rules('contactperson', 'contactperson', 'required');
		$validation->set_rules('status', 'status', 'required|integer');
		
		if($validation->run() ===  FALSE) {
			$this->_editoffice();
		} else {
			
			$strqry = sprintf('UPDATE rta SET office="%s", address="%s", phone="%s", contactperson="%s", status="%d" WHERE r_id="%s"', $this->input->post('office'), $this->input->post('address'), $this->input->post('phone'), $this->input->post('contactperson'),$this->input->post('status'), strdecode($this->input->post('id') ));
			
			if(!$this->db->query($strqry))
				echo 'update failed';
			else
				redirect(base_url("master/rta"));
		}
	}
	
	private function _viewoffice(){
		
		$data['offices'] = $this->_getoffice();
		$data['main_content'] = 'admin/rta/rta_view';
		$this->load->view('includes/template', $data);
	}
	
	private function _getoffice(){
		
		$this->load->model('mdldata');
		$params['table'] = array('name' => 'rta');
		$params['table']['order_by'] = 'r_id:asc';
		if(!$this->mdldata->select($params))
			echo 'getting rta office failed';
		else 
			return $this->mdldata->_mRecords;
	}
	
	private function _addoffice(){
		$data['main_content'] = 'admin/rta/addoffice_view';
		$this->load->view('includes/template', $data);
	}
	
	private function _editoffice(){
		$id = ($this->uri->segment(5)) ? $this->uri->segment(5) : (($this->input->post('id')) ? $this->input->post('id'): 0);
		
		$data['office'] = $this->_selectoffice($id);
		
		$data['main_content'] = 'admin/rta/editoffice_view';
		$this->load->view('includes/template', $data);
	}
	
	private function _selectoffice($config){
		$rid = strdecode($config);
		$params['querystring'] = sprintf("SELECT * FROM rta WHERE r_id=%d", $rid);
		
		$this->load->model('mdldata');
		if(!$this->mdldata->select($params))
			return false;
		else
			return $this->mdldata->_mRecords;
	}
	
	private function _deleteoffice(){
		$id = ($this->uri->segment(5)) ? $this->uri->segment(5) : show_404();
		
		$strqry = sprintf('DELETE FROM rta WHERE r_id = %d ', strdecode($id));
			
		if(!$this->db->query($strqry))
			echo 'delete failed';
		else
			redirect(base_url("master/rta"));
	}
}