<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Userlist extends CI_Controller {

	public function __construct()
        {
        		// parent init
                parent::__construct();
                // Your own constructor code

                // We can load some helper (remember to not put the sufix _helper! )
                $this->load->helper('ejemplo');
                $this->load->helper('form');
 		$this->load->model('Model_List');       
        }

    public function index(){

        // Passind data to header
        $hdata['titulo'] = "Principal";

        // Get data from model!
	$data['query'] = $this->Model_List->get_user_list();

	$this->load->view('layout/Header', $hdata);
    	$this->load->view('userlist/index', $data);
    	$this->load->view('layout/Footer');
    }

    public function add(){


    	$hdata['titulo'] = "Agregar User";

	$this->load->view('layout/Header', $hdata);
    	$this->load->view('userlist/add');
    	$this->load->view('layout/Footer');

    }

    public function detail($id){

    	// Passind data to header
        $hdata['titulo'] = "User Detail";
    	$data['query'] = $this->Model_List->get_user_by_id($id);

    	$this->load->view('layout/Header', $hdata);
    	$this->load->view('userlist/detail', $data);
    	$this->load->view('layout/Footer');
    }

    public function edit_data(){
    	if($this->input->post('sbm') == "Back"){
    		redirect(base_url().'index.php/userlist/');
    	} else 

    	if($this->input->post('sbm') == "Edit") { 
    		//Si el elemento submit con atributo sbm es Edit
    		$data['item'] = $this->input->post('id');
    		$data['name'] = $this->input->post('name');
    		$data['email'] = $this->input->post('mail');
    		$data['date'] = $this->input->post('date');
    		$data['description'] = $this->input->post('description');


    		$hdata['titulo'] = "Agregar User";
		$this->load->view('layout/Header', $hdata);
    		$this->load->view('userlist/update',$data);
    		$this->load->view('layout/Footer');
		} else {
			//Si el elemento submit con atributo sbm es otro
			$id = $this->input->post('id');
			$this->Model_List->delete_user($id);
			redirect(base_url().'index.php/userlist/');
		}
    }

    public function update_data(){
    	$data = array(
    			//Izquiera (tal como aparece en la base de datos) =>
    			// derecha (el nombre con el que se identifica el form)
    			'ID' => $this->input->post('id'),
				'Name' => $this->input->post('name'),
				'Mail' => $this->input->post('mail'),
				'Description' => $this->input->post('descritpion'),
				'Date' => $this->input->post('date')
		);

    	$this -> Model_List -> update_user($data);
    	redirect(base_url().'index.php/userlist');
    }

    public function recive_data(){

    	//param 1: form componenet name
    	//param 2: Error label
    	//param 3: 
    	$this -> form_validation -> set_rules('name','Name','required|max_length[20]');
    	$this -> form_validation -> set_rules('mail','Mail','required|valid_email');
    	$this -> form_validation -> set_rules('date','Date','required');

    	if($this -> form_validation -> run() == FALSE){
    		// Something is wrong
    		redirect(base_url().'index.php/userlist/add');
    	} else {
    		// Seccessss
    		$data = array(
    			//Izquiera (tal como aparece en la base de datos) =>
    			// derecha (el nombre con el que se identifica el form)
				'Name' => $this->input->post('name'),
				'Mail' => $this->input->post('mail'),
				'Description' => $this->input->post('descritpion'),
				'Date' => $this->input->post('date')
    		);

			// data insert example :)! 
			/*$data = array(
		        'Name' => "Gamma",
		        'Mail' => "Gamma@mymail.com",
		        'Date' => "2016-06-01"
	        );
	        $this->db->insert('users', $data);
			*/

    		$this -> Model_List -> add_user_to_list($data);

    		//Redirect to index()
    		redirect(base_url().'index.php/userlist');
    	}
    }

}
?>
