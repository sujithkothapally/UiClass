<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dataupdate extends CI_Controller {

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
	$this->load->model('update_dat');
		$this->load->model('display_dat');

  $this->load->database();
   // $this->load->model('update_dat');

  	$this->load->library('session');
//	  $this->load->library('email');
	  $this->load->helper('path');
	  $this->load->helper('url');
//	  $this->load->helper('date');
$this->load->helper('html');
}

		public function update_msrate($data)
		{
	
	
		$data = array(
                'rate' => $this->input->post('rate'),
                'rps' => $this->input->post('rate1'),
                'pcc' => $this->input->post('powder1'),
                'fan' => $this->input->post('Fangrill1'),
				'mat' => $this->input->post('Mat1'),
				'Paint' => $this->input->post('Painting1'),
				'Pac' => $this->input->post('Packing1'),	
				'tcr' => $this->input->post('total1'),	
				'status' => '1'
            );
			
			// 
//			 $inse= $this->update_dat->update_dat($data);
//			 
//				$this->load->view('bharathbk/dataupdate',array('inse'=>$inse));
			
		}
		
		public function update_status($data)
		{
	
	
			$det=$this->uri->segment(3);
			$stat=$this->uri->segment(4);
			
				
			$check=$this->display_dat->disp_msratecheck();
			
			if($stat==0)
			{
			
					if(count($check)>=1)
						{
							//$upd= $this->update_dat->upd_msrate($data);
							$resul['disp']= $this->display_dat->disp_msrate();
							$resul['alert']=2;
							$this->load->view('bharathbk/mspricedetail',$resul);
						}
						else
						{
								$data = array(
								  'status' => '1'
								);
								
								 
								 $resul['disp']= $this->display_dat->disp_msrate();

								  $resul['$inse']= $this->update_dat->update_msstatus($data,$det);
								 
								 
								$this->load->view('bharathbk/mspricedetail',$resul);
						}
				}	
				else
				{
							$data = array(
								  'status' => '0'
								);
								
								
								
								  $resul['disp']= $this->display_dat->disp_msrate();
								  $resul['$inse']= $this->update_dat->update_msstatus($data,$det);
								 $this->load->view('bharathbk/mspricedetail',$resul);
				
				}			
		}
		
	 
	 public function update_pricess202()
	 {
		
			$name = $this->input->post('rate');
			if(isset($name)) { 
	 
	 	 $data = array(
	
				'rate1' => $this->input->post('rrate'),
                'rateper' => $this->input->post('rrate1'),
                'powder' => $this->input->post('powder1'),
                'Fangrill' => $this->input->post('Fangrill1'),
				 'Mat' => $this->input->post('Mat1'),
				 'Painting' => $this->input->post('Painting1'),
				'Packing' => $this->input->post('Packing1'),	
				'total' => $this->input->post('total1'),	
				'status' => '1'
				
			
            );
			 
			
		 
			 $inse= $this->update_dat->ins_pricess202($data);
			 
				$this->load->view('bharathbk/pricess202',array('inse'=>$inse));
}		
		}
		
public function update_pricess304()
	 {
	 $data = array(
	 
	'rate304' => $this->input->post('rate'),
                'rateper304' => $this->input->post('rate1'),
               
                'Fangrill304' => $this->input->post('Fangrill1'),
				 'Mat304' => $this->input->post('Mat1'),
				  'Painting304' => $this->input->post('Painting1'),
				'Packing304' => $this->input->post('Packing1'),	
				'total304' => $this->input->post('total1'),	
				
				'status' => '1'
            );
			 
			 $inse= $this->update_dat->ins_pricess304($data);
			 
				$this->load->view('bharathbk/pricess304',array('inse'=>$inse));
			
		}		
		
		
		 public function update_hospms()
	 {
	 $data = array(
	 
	'hosprate1' => $this->input->post('rate'),
                'hosprateper' => $this->input->post('rate1'),
                'hosppowder' => $this->input->post('powder1'),
                'hospFangrill' => $this->input->post('Fangrill1'),
				 'hospMat' => $this->input->post('Mat1'),
				  'hospPainting' => $this->input->post('Painting1'),
				'hospPacking' => $this->input->post('Packing1'),	
				'hosptotal' => $this->input->post('total1'),	
				'status' => '1'
            );
			 
			 $inse= $this->update_dat->ins_hospms($data);
			 
				$this->load->view('bharathbk/hospms',array('inse'=>$inse));
			
		}
		
		 public function update_hospss202()
	 {
	 $data = array(
	 
	'hosp202rate1' => $this->input->post('rate'),
                'hosprateper202' => $this->input->post('rate1'),
               
                'hospFangrill202' => $this->input->post('Fangrill1'),
				 'hospMat202' => $this->input->post('Mat1'),
				  'hospPainting202' => $this->input->post('Painting1'),
				'hospPacking202' => $this->input->post('Packing1'),	
				'hosptotal202' => $this->input->post('total1'),	
				'status' => '1'
            );
			 
			 $inse= $this->update_dat->ins_hospss202($data);
			 
				$this->load->view('bharathbk/hospss202',array('inse'=>$inse));
			
		}
		
		public function update_hospss304()
	 {
	 $data = array(
	 
	'hosp304rate1' => $this->input->post('rate'),
                'hosprateper304' => $this->input->post('rate1'),
               
                'hospFangrill304' => $this->input->post('Fangrill1'),
				 'hospMat304' => $this->input->post('Mat1'),
				  'hospPainting304' => $this->input->post('Painting1'),
				'hospPacking304' => $this->input->post('Packing1'),	
				'hosptotal304' => $this->input->post('total1'),	
				'status' => '1'
            );
			 
			 $inse= $this->update_dat->ins_hospss304($data);
			 
				$this->load->view('bharathbk/hospss304',array('inse'=>$inse));
			
		}
		
		public function update_goodsms()
	 {
	 $data = array(
	 
	'goodsmsrate1' => $this->input->post('rate'),
                'ratepergoodsms' => $this->input->post('rate1'),
               
                'Fangrillgoodsms' => $this->input->post('Fangrill1'),
				 'Matgoodsms' => $this->input->post('Mat1'),
				  'Paintinggoodsms' => $this->input->post('Painting1'),
				'Packinggoodsms' => $this->input->post('Packing1'),	
				'Powdergoodsms' => $this->input->post('powder1'),
				'totalgoodsms' => $this->input->post('total1'),	
				'status' => '1'
            );
			 
			 $inse= $this->update_dat->ins_goodsms($data);
			 
				$this->load->view('bharathbk/goodsms',array('inse'=>$inse));
			
		}
		
public function update_goodss202()
	 {
	 $data = array(
	 
	'goodss202rate1' => $this->input->post('rate'),
                'ratepergoodss202' => $this->input->post('rate1'),
               
                'Fangrillgoodss202' => $this->input->post('Fangrill1'),
				 'Matgoodss202' => $this->input->post('Mat1'),
				  'Paintinggoodss202' => $this->input->post('Painting1'),
				'Packinggoodss202' => $this->input->post('Packing1'),	

				'totalgoodss202' => $this->input->post('total1'),	
				'status' => '1'
            );
			 
			 $inse= $this->update_dat->ins_goodss202($data);
			 
				$this->load->view('bharathbk/goodss202',array('inse'=>$inse));
			
		}	
		
		
		public function update_goodss304()
	 {
	 $data = array(
	 
	'goodss304rate1' => $this->input->post('rate'),
                'ratepergoodss304' => $this->input->post('rate1'),
               
                'Fangrillgoodss304' => $this->input->post('Fangrill1'),
				 'Matgoodss304' => $this->input->post('Mat1'),
				  'Paintinggoodss304' => $this->input->post('Painting1'),
				'Packinggoodss304' => $this->input->post('Packing1'),	

				'totalgoodss304' => $this->input->post('total1'),	
				'status' => '1'
            );
			 
			 $inse= $this->update_dat->ins_goodss304($data);
			 
				$this->load->view('bharathbk/goodss304',array('inse'=>$inse));
			
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