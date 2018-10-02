<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	 
	public function __construct(){ 

        parent::__construct();
		//$this->load->library('session');
		$this->load->helper('url');

    }
	 
	public function index() {  $this->load->view('home');  }
	
	public function share_fb() { 
		
		define('HOST', 'localhost:52827');
		define('USER', 'userDO6');
		define('PASS', '5hphBUWguugkOHo6');
		define('DB', 'maratona');
		
		$conn = mysqli_connect(HOST, USER, PASS, DB);
	
		$id=$this->input->post('id');
		$sql = "SELECT *FROM website_competitor_shares WHERE competitor_id='$id'";
		$query = mysqli_query($conn, $sql);
		$resposta = mysqli_fetch_array($query);
		$total = $resposta['total'];
		$total +=1;
		$sql = "UPDATE website_competitor_shares SET total='$total' WHERE competitor_id='$id'";
		mysqli_query($conn, $sql);
		if(mysqli_query($conn, $sql)){
			print 'Contabilizado';//remover
		}else{
			print 'erro';//remover
		}
		
	}
	
	public function shake() { 
		
		define('HOST', 'localhost:52827');
		define('USER', 'userDO6');
		define('PASS', '5hphBUWguugkOHo6');
		define('DB', 'maratona');
		
		
		$conn = mysqli_connect('localhost:52827', 'userDO6', '5hphBUWguugkOHo6', 'maratona');
		
	
	
		$id=$this->input->post('id');
		$sql = "SELECT *FROM shakes WHERE competitor_id='$id'";
		$query = mysqli_query($conn, $sql);
		$resposta = mysqli_fetch_array($query);
		$total = $resposta['total'];
		$total +=1;
		$sql = "UPDATE shakes SET total='$total' WHERE competitor_id='$id'";
		mysqli_query($conn, $sql);
		if(mysqli_query($conn, $sql)){
			print 'Contabilizado';
		}
		
	}
		
	
	
}
