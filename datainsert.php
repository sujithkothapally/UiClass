<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Datainsert extends CI_Controller {

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

  $this->load->database();
   // $this->load->model('insert_dat');

  	$this->load->library('session');
//	  $this->load->library('email');
	  $this->load->helper('path');
	  $this->load->helper('url');
//	  $this->load->helper('date');
$this->load->helper('html');
}

		public function insert_userbook()
		{
	
					//echo $this->uri->segment(3);	
						$ctname=$this->input->post('cuname');
				if(!empty($ctname))
				{		
						
						
						$data1 = array(
						
						 'username' =>$this->input->post('cuname'),
		  				'password' =>$this->input->post('cpass'),
		  					 );
		  
		$data = array(
		 'name' => $this->input->post('name'),
		 'hid' => $this->uri->segment(3),

		 'number' => $this->input->post('number'),
		 'addre' => $this->input->post('address'),
		 'indate' => $this->input->post('indate'),
		 'nfroom' => $this->input->post('nfroom'),
		 'outdate' =>$this->input->post('outdate'),
		  'pricerange' =>$this->input->post('pricerange'),
		  'discount' =>$this->input->post('discount'),
		  'cardtype' =>$this->input->post('cardtype'),
		   'cuname' =>$this->input->post('cuname'),
		  'cupass' =>$this->input->post('cpass'),
		  'note' =>$this->input->post('note'),
          'status' => '1'
		  
		 
            );
			
				if(!empty($data) )
				{
				
							
							$inse= $this->insert_dat->ins_uname($data1);
							
							$inse= $this->insert_dat->ins_userbook($data);
						 
							$this->load->view('hotelci/userbook',array('inse'=>$inse));
							
				}
			
			}
					
			
		}
	 
	 
	 public function insert_hotelreg()
		{
	
						
		$Specilized_category = $this->input->post('ame');
		
						$target_pathn = "assets/uploads/";
						$f1= basename($_FILES['uploaded']['name']); 
						$target_pathsmn = $target_pathn .$f1; 
						move_uploaded_file($_FILES['uploaded']['tmp_name'], $target_pathsmn);
						
						 $img= img($target_pathsmn);
					if(!empty($f1))
					{	 	
			
		  $data = array(
		 'date' => $this->input->post('date'),
		'location' => $this->input->post('location'),
		'hname' => $this->input->post('hname'),
		
		'kriu'=>(implode(',', $Specilized_category)),
		
		'pricerange'=>$this->input->post('price'),
		'haddress' => $this->input->post('hoteladd'),
		'images' => $f1,

		'haddress' => $this->input->post('hoteladd'),
          'status' => '1'     
            );
			
			if(!empty($data))
			{
			
						
						
						$inse= $this->insert_dat->ins_hotelreg($data);
					 
						$this->load->view('hotelci/admin/hotelreg',array('inse'=>$inse));
						
			}
			
				}
					
			
		}
	 
	 
	 
		
	
		/*public function login_user()
		{
			$unmae=$this->input->post('username1');
			$passmae=$this->input->post('password1');
			$fg=$this->Insert_dat->login_check($unmae,$passmae);
			
			if($argu=$fg->num_rows()>0)
				{
				
				$this->session->set_userdata('some_name', $unmae);
			 	 $userName = $this->session->userdata('some_name');
				$this->load->view('bharathbk/welcome');
		
				}

		}
		*/
		
		
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */


?>