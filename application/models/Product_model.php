<?php 
class Product_model extends CI_Model{
	
	//Get all products
	
	public function get_products(){
		$this->db->select('*');
		$this->db->from('products');
		$query = $this->db->get();
		return $query->result();
		}
		
	//Get single product
	
	public function get_product_details($id){
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('id',$id);
		
		$query = $this->db->get();
		return $query->row();
		}
		
	/*Get categories*/
	
	public function get_categories(){
		$this->db->select('*');
		$this->db->from('categories');
		
		$query = $this->db->get();
		return $query->result();
		}
}
