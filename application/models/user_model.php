<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
*/
class User_model extends CI_Model
{
public function read(){
   
       $query = $this->db->query("select * from `users`");
       return $query->result_array();
   }
   public function insert($data){
       
       $this->name    = $data['name']; 
	    $this->email    = $data['email'];
       $this->phoneno  = $data['phoneno'];
       $this->password = $data['password'];
	   $this->course   = $data['course']; 
       if($this->db->insert('users',$this))
       {    
           return 'Data is inserted successfully';
       }
         else
       {
           return "Error has occured";
       }
   }
   public function update($id,$data){
   
      $this->name    = $data['name']; 
	    $this->email    = $data['email'];
       $this->phoneno  = $data['phoneno'];
       $this->password = $data['password'];
	   $this->course   = $data['course']; 
       $result = $this->db->update('users',$this,array('id' => $id));
       if($result)
       {
           return "Data is updated successfully";
       }
       else
       {
           return "Error has occurred";
       }
   }
   public function del($id){
   
       $result = $this->db->query("delete from `users` where id = $id");
       if($result)
       {
           return "Data is deleted successfully";
       }
       else
       {
           return "Error has occurred";
       }
   }
public function find($login_id)
	{
		$q=$this->db->select(['id','name','email','phoneno','password','course'])
	                ->where('id',$login_id)
	                ->get('users');
				 
	return $q->row();		
	}	
public function all_users_list($limit,$offset)
	{
		
		$query=$this->db
		                  ->select('name')
						  ->select('id')
						  ->select('email')
						  ->select('phoneno')
						  ->select('password')
						  ->select('course')
						  ->from('users')
						  ->limit($limit,$offset)
                          ->get();
return $query->result();						  
						
		
	}
	public function count_all_users()
	{
		$query=$this->db
		                  ->select('name')
						  ->select('id')
						  ->select('email')
						  ->select('phoneno')
						  ->select('password')
						  ->select('course')
						  ->from('users')
                          ->get();
return $query->num_rows();	
	}
	public function login_valid($username,$password)
	{
		$q=$this->db->where(['name'=>$username,'password'=>$password])->get('users');
		if($q->num_rows())
		{
			return $q->row()->id;
		}
		else
		{
			return FALSE;
		}
	}

}