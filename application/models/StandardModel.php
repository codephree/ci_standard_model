<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter Auth Class
 *
 * Model to manage authentication attempts
 *
 * @package 	CodeIgniter
 * @subpackage 	Stabdard Model
 * @category 	Library
 * @author 		Odeleye Oluwafemi (Codephree)
 * @version 	0.1.1
 */
class StandardModel extends CI_MODEL {

   // Declare table variable
    private $table;
		
	function __construct()
	{
		/*
		 *  Assigning Table to the variable
		 */
		$this->table = "Your Table Name";
	}

   /*
	 * Select all query from the table 
	 */
	public function select_all($id)
	{
		  
		  $select = $this->db->select('*')
		  					 ->get($this->table);

		  return  $select->result();
	}

	/*
	 * Select where query from the table 
	 */

	public function select_from_where($id)
	{
		  
		  $select = $this->db->select('*')
		  					->where('id',$id)
		                     ->get($this->table);

		  return  $select->result();
	}

	/*
	 * Insert into table
	 * Note $data is an array with columnname
	 * is the key  
	 */

	 public function Create($data)
	 {
		 $insert = $this->db->insert($this->table, $data);
		 if($insert)
		 {
		 	return json_encode($data)
         }
		 
	 }



}