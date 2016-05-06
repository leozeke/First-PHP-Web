<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_List extends CI_Model {

	function __construct(){
		parent:: __construct();

		//Load the database to work
		$this->load->database();
	}

	function get_user_list(){
		//database was loaded in the constructor, so we can work on it
		return $this->db->get('users');
	}

	function get_user_by_id($id){
		$this->db->where('ID', $id);
		$query = $this->db->get('users');
		return $query;
	}

	function update_user($data){
		$this->db->replace('users', $data);
	}

	function delete_user($id){
		$this->db->where('ID', $id);
		$this->db->delete('users');
	}

	function add_user_to_list($data){
		// data insert example :)! 
		/*$data = array(
	        'Name' => "Gamma",
	        'Mail' => "Gamma@mymail.com",
	        'Description' => "Un texto largo, que diga algo random."
	        'Date' => "2016-06-01"
        );
        $this->db->insert('users', $data);
		*/

		$this->db->insert('users', $data);
	}

}

?>