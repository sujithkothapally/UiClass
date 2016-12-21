<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Delete extends CI_Controller {

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
	$this->load->model('insert_dat');
	$this->load->model('update_dat');
		$this->load->model('display_dat');

	$this->load->model('delete_dat');

  $this->load->database();
   // $this->load->model('insert_dat');

  	$this->load->library('session');
//	  $this->load->library('email');
	  $this->load->helper('path');
	  $this->load->helper('url');
//	  $this->load->helper('date');
$this->load->helper('html');
}

		
		
		
	public function bookdel()
	{
				$det=$this->uri->segment(3);
				
				//echo $unmae=$this->input->post('username1');
//			 	 $passmae=$this->input->post('password1');
						
				if(!empty($det))
				{
				
					$resul['dispss']=$this->delete_dat->delete_bookdel($det);
					
					$resul['disphb']= $this->delete_dat->disp_userbookdelt($det);
					
					$resul['hello']="hai";
					
					//$resul['disp']= $this->insert_det->display();
					$this->load->view('hotelci/roombookrec1',$resul);
														
				}	

			
	}
		
		
		public function bookdeladmin()
	{
				$det=$this->uri->segment(3);
				
				//echo $unmae=$this->input->post('username1');
//			 	 $passmae=$this->input->post('password1');
						
				if(!empty($det))
				{
				
					$resul['dispss']=$this->delete_dat->delete_bookdel($det);
					
					$resul['disp']= $this->delete_dat->disp_userbookdelt($det);
					
						$resul['hello']=  "hello";


					$this->load->view('hotelci/admin/roombookrec1',$resul);
														
				}	

			
	}
	
	
	
	public function hoteldeladmin()
	{
				$det=$this->uri->segment(3);
				
				//echo $unmae=$this->input->post('username1');
//			 	 $passmae=$this->input->post('password1');
						
				if(!empty($det))
				{
				
						
					$resul['dispss']=$this->delete_dat->delete_hoteldel($det);
					
					$resul['disp']= $this->delete_dat->disp_hoteldelt($det);
					
					$resul['hello']=  "hello";
					
					$this->load->view('hotelci/admin/hotelrec',$resul);
														
				}	

			
	}
	
		
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */


?>