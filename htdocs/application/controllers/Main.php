<?php
/**
 * Class and Function List:
 * Function list:
 * - __construct()
 * - index()
 * - login()
 * - logout()
 * Classes list:
 * - Main extends CI_Controller
 */

class Main extends CI_Controller
{
	
	function __construct() 
	{
		parent::__construct();
		$this->output->enable_profiler(false);
		
		if (!$this->db->table_exists('sessions')) 
		{
			$this->load->dbforge();
			
			if ($this->db->table_exists('ci_sessions')) 
			{
				$this->dbforge->drop_table('ci_sessions');
			}
			$fields = array(
				'id' => array(
					'type' => 'VARCHAR',
					'constraint' => 40,
					'default' => 0,
				) ,
				'ip_address' => array(
					'type' => 'VARCHAR',
					'constraint' => 45,
					'default' => 0,
				) ,
				'timestamp' => array(
					'type' => 'INT',
					'constraint' => 10,
					'unsigned' => TRUE,
					'default' => 0,
				) ,
				'data' => array(
					'type' => ($this->db->dbdriver == "postgre") ? 'TEXT' : 'BLOB',
				) ,
			);
			$this->dbforge->add_field($fields);
			$this->dbforge->add_key('id', true);
			$this->dbforge->add_key('timestamp');
			$this->dbforge->create_table('sessions', true);
		}

		// load this after db has been initialized
		$this->load->library('session');
		
		if (!$this->db->table_exists('cards')) 
		{
			$this->load->dbforge();
			$fields = array(
				'id' => array(
					'type' => 'INT',
					'constraint' => 10,
					'auto_increment' => TRUE,
				) ,
				'number' => array(
					'type' => 'INT',
					'constraint' => 10,
				) ,
				'hebrew_word' => array(
					'type' => 'TEXT',
					'null' => true,
				) ,
				'description' => array(
					'type' => 'TEXT',
					'null' => true,
				) ,
				'created' => array(
					'type' => 'INT',
					'constraint' => 10,
				) ,
			);
			$this->dbforge->add_field($fields);
			$this->dbforge->add_key('id', true);
			$this->dbforge->add_key('number');
			$this->dbforge->add_key('hebrew_word');
			$this->dbforge->add_key('description');
			$this->dbforge->add_key('created');
			$this->dbforge->create_table('cards', true);
		}
	}
	
	function index() 
	{
		$q = $this->input->get('q');
		$add = $this->input->post('add');
		$edit = $this->input->get('edit');
		$delete = $this->input->post('delete');
		$logged_in = $this->session->userdata('logged_in') == 1;
		$cards = [];
		$edit_card = false;
		
		if ($add && $logged_in && $this->input->post('number') && $this->input->post('description')) 
		{
			$this->db->insert('cards', array(
				'number' => $this->input->post('number') ,
				'hebrew_word' => $this->input->post('hebrew_word') ,
				'description' => $this->input->post('description') ,
				'created' => time() ,
			));
			redirect(base_url('?q=' . $q));
		}
		
		if ($edit && $logged_in && $this->input->post('number') && $this->input->post('description')) 
		{
			$this->db->where('id', $edit);
			$query = $this->db->update('cards', array(
				'number' => $this->input->post('number') ,
				'hebrew_word' => $this->input->post('hebrew_word') ,
				'description' => $this->input->post('description') ,
			));

			//redirect(base_url());
			
		}
		
		if ($delete && $logged_in) 
		{
			$this->db->where('id', $edit);
			$query = $this->db->delete('cards');
			redirect(base_url());
		}
		
		if ($edit) 
		{
			$this->db->select('*');
			$this->db->where('id', $edit);
			$query = $this->db->get('cards');
			
			if ($query->num_rows() > 0) 
			{
				$cards = $query->result_array();
				$edit_card = $cards[0];
			}
		}
		
		if ($q) 
		{
			$this->db->select('*');
			
			if (is_numeric($q)) 
			{
				$this->db->where('number', $q);
			}
			else
			{
				$this->db->like('number', $q, 'after');
				$this->db->or_like('hebrew_word', $q, 'after');
				$this->db->or_like('description', $q);
			}
			$this->db->order_by('number');
			$query = $this->db->get('cards');
			
			if ($query->num_rows() > 0) 
			{
				$cards = $query->result_array();
			}
		}

		// render
		$this->load->view('main', array(
			'view' => 'home',
			'search' => $q,
			'cards' => $cards,
			'edit_card' => $edit_card,
			'logged_in' => $logged_in,
		));
	}
	
	function login() 
	{
		$password = $this->input->post('password');
		
		if ($password && $password == $this->config->item('password')) 
		{
			$this->session->set_userdata('logged_in', true);
			redirect(base_url());
		}
		$this->load->view('main', array(
			'view' => 'login',
		));
	}
	
	function logout() 
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
