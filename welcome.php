<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	 public  function __construct() {
	
	parent::__construct();

 //$this->load->library('form_validation');
	  $this->load->model('Insert_dat');
	  $this->load->model('Insert_dat');
	  $this->load->model('display_dat');
      $this->load->database();
  	  $this->load->library('session');
	  $this->load->library('email');
	  $this->load->helper('path');
	  $this->load->helper('url');
      $this->load->helper('date');
      $this->load->helper('html');
}

	 
	public function index()
	{
		//$this->load->helper('url');
	            $this->base = $this->config->item('base_url');
		//$this->load->view('welcome_message');
				$this->load->view('hotelci/welcome');
	}
	
	public function userlog()
	{
	$this->load->view('hotelci/welcome');
	}
	
			public function login_user()
		{
		
			$this->base = $this->config->item('base_url');

			 $unmae=$this->input->post('username1');
			 $passmae=$this->input->post('password1');
			 
			$fg=$this->Insert_dat->login_check($unmae,$passmae);
			
			if($argu=$fg->num_rows()>0)
				{
				 $this->session->set_userdata('some_name', $unmae);
			 	 $userName = $this->session->userdata('some_name');
				 $displayhbook['disphb']= $this->display_dat->disp_userbook($unmae,$passmae);
			     $this->load->view('hotelci/roombookrec1',$displayhbook);
					
				}
	
				else
						{
						$data['hello']=  "hello";
						$this->load->view('hotelci/login',$data);
						}

		}


        public function login_user1()
		{
			$unmae=$this->input->post('username1');
			 $passmae=$this->input->post('password1');
			$fg=$this->Insert_dat->login_check1($unmae,$passmae);
			
			if($argu=$fg->num_rows()>0)
				{
				
				$this->session->set_userdata('some_name', $unmae);
			 	 $userName = $this->session->userdata('some_name');
				$this->load->view('hotelci/admin/welcome');
		
				}
				else
				{
				 	$data['hello']=  "hello";
			    	$this->load->view('hotelci/admin/index',$data);
				}

		}

	    public function userbookdisp()
		{
	
		//$this->load->helper('url');
//		$this->base = $this->config->item('base_url');
//		$this->load->view('welcome_message');
				$semt=$this->uri->segment(3);
			
				 $displayhbook['disphb']= $this->display_dat->disp_pric($semt);
			
				 $this->load->view('hotelci/userbook',$displayhbook);
		}
	


public function hom()
		{
	
		//$this->load->helper('url');
//		$this->base = $this->config->item('base_url');
//		$this->load->view('welcome_message');

  	  $location['loct']= $this->display_dat->display_loc();
 
		$this->load->view('hotelci/home',$location);
		}
		

public function hotelvie()
		{
	
		//$this->load->helper('url');
//		$this->base = $this->config->item('base_url');
//		$this->load->view('welcome_message');

		 $price=$this->input->post('pricedetails');
		 $loce=$this->input->post('location');
		 
		$displayh['disph']= $this->display_dat->display_filtr($price,$loce);


		$this->load->view('hotelci/hotelview',$displayh);
		}
		
		public function profi()
		{
	
		//$this->load->helper('url');
//		$this->base = $this->config->item('base_url');
//		$this->load->view('welcome_message');
		$this->load->view('hotelci/userregrec');
		}
		
		public function bookrec()
		{
	
		//$this->load->helper('url');
//		$this->base = $this->config->item('base_url');
//		$this->load->view('welcome_message');

      				$this->load->view('hotelci/login');


		


		//$this->load->view('hotelci/roombookrec1');
		}
		
		public function about()
		{
	
		//$this->load->helper('url');
//		$this->base = $this->config->item('base_url');
//		$this->load->view('welcome_message');

      				$this->load->view('hotelci/about');


		


		//$this->load->view('hotelci/roombookrec1');
		}
		public function contact()
		{
	
		//$this->load->helper('url');
//		$this->base = $this->config->item('base_url');
//		$this->load->view('welcome_message');

      				$this->load->view('hotelci/contact');


		


		//$this->load->view('hotelci/roombookrec1');
		}
		
		public function sing()
		{
	
		//$this->load->helper('url');
//		$this->base = $this->config->item('base_url');
//		$this->load->view('welcome_message');
		$this->load->view('hotelci/signout');
		}
		
		
		public function change()
		{
	
		//$this->load->helper('url');
//		$this->base = $this->config->item('base_url');
//		$this->load->view('welcome_message');
		$this->load->view('hotelci/changepassword');
		}
		
		public function log()
		{
	
		//$this->load->helper('url');
//		$this->base = $this->config->item('base_url');
//		$this->load->view('welcome_message');
		$this->load->view('hotelci/admin/index');
		}		
		
		public function reg()
		{
	
		//$this->load->helper('url');
//		$this->base = $this->config->item('base_url');
//		$this->load->view('welcome_message');
		$this->load->view('hotelci/admin/reg');
		}	
		
		
		public function regrec()
		{
	
		//$this->load->helper('url');
//		$this->base = $this->config->item('base_url');
//		$this->load->view('welcome_message');
		$this->load->view('hotelci/admin/regrec');
		}	
		
		public function booking()
		{
	
		//$this->load->helper('url');
//		$this->base = $this->config->item('base_url');
//		$this->load->view('welcome_message');
		$display['disp']= $this->display_dat->display_userbookrecord();
		
		$this->load->view('hotelci/admin/roombookrec1',$display);
		}	
		
		public function hotelreg()
		{
	
		//$this->load->helper('url');
//		$this->base = $this->config->item('base_url');
//		$this->load->view('welcome_message');
		$this->load->view('hotelci/admin/hotelreg');
		}	
		
		public function hotelrec()
		{
	
		//$this->load->helper('url');
//		$this->base = $this->config->item('base_url');
//		$this->load->view('welcome_message');
		  $display['disp']= $this->display_dat->display_loc();
		$this->load->view('hotelci/admin/hotelrec',$display);
		}	
		
		public function signout()
		{
	
		//$this->load->helper('url');
//		$this->base = $this->config->item('base_url');
//		$this->load->view('welcome_message');
		$this->load->view('hotelci/admin/signout');
		}	
		
		public function changepa()
		{
	
		//$this->load->helper('url');
//		$this->base = $this->config->item('base_url');
//		$this->load->view('welcome_message');
		$this->load->view('hotelci/admin/changepassword');
		}	
		
		
		
		public function logout()
	{
	
	
			 $this->session->unset_userdata('some_name');
				$this->session->sess_destroy();
				$this->load->view('hotelci/admin/index');

	}
		
		
		
		
		
		
		
	
	
		
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */


?>