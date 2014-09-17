<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
	   echo "Truonglq dang hoc CI";
	}
    
    	public function hello($a =0, $b=0, $c=0)
	{
	   echo "Truonglq có ".$a.' tay và '.$b.' chân';
	}
    
    public function hello_view(){
        $this->load->view('home/view');
    }
    
    // ket noi csdl
    public function show(){
        $data['category']  = $this->db->select('*')->from('category')->get()->result_array();
        $this->load->view('home/show',$data);
    }
}
