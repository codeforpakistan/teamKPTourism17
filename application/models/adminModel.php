<?php
class AdminModel extends CI_MODEL
{
	
	/* -----------------------------------------Admin Functions Start---------------------------------------------------------*/
	
	public function validateLogin($username)
	{
		$condition = array('username'=>$username);
		$this->db->select();
		$this->db->from("admin");
		$this->db->where($condition);
		$query = $this->db->get();
		if($query->num_rows() === 1)
		{
			return $query->row();
		}
		else{
			return false;
			}		
	}
	
	
	public function adminInfo($admin_id)
	{
		$this->db->select();
		$this->db->from('admin');
		$this->db->where(array('id'=>$admin_id));
		$query = $this->db->get();
		return $query->row();
		
	}
	
	public function updateProfile($admin_id,$name,$username,$post_title,$image,$encrypt_password)
	{
		$data = array('name'=>$name,'username'=>$username,'post_title'=>$post_title);
		
		if(!empty($image))
		{
			$data['image']=$image;
		}
		
		if(!empty($encrypt_password))
		{
			$data['password']=$encrypt_password;
		}
		
		$this->db->where('id',$admin_id);
		$bool = $this->db->update('admin',$data);
		if($bool)
		{
			return true;
		}
		else{
			return false;
			}
		
	}
	
	/* -----------------------------------------Admin Functions End---------------------------------------------------------*/
	
	
	/* -----------------------------------------Genral Functions Starts---------------------------------------------------------*/
	
	public function delete($table,$column,$id)
	{
		$this->db->where($column,$id);
		$delete = $this->db->delete($table);
		if($delete)
		{
			return true;
		}
		else{
			return false;
			}
		
	}
	
	public function insert($table,$data)
	{
		$insert = $this->db->insert($table,$data);
		if($insert) 
		{
			return true;
		}
		else{
			return false;
			}
		
	}
	
	public function select($table,$select,$column,$id=0,$all)
	{
		if(!empty($select))
		{
			$this->db->select($select);
		}
		else
		{
			$this->db->select();
		}
		
		$this->db->from($table);
		
		if($id > 0 and !empty($column))
		{		
			$this->db->where(array($column => $id));
		}
		
		
		$query = $this->db->get();
		
		if($all == true)
		{
			if($query->num_rows() > 0)
			{
				return $query->result_array();
			}
			else
			{
				return false;
			}
		}
		
		if($all == false)
		{
			if($query->num_rows() > 0)
			{
				return $query->row();
			}
			else
			{
				return false;
			}
		}
		
	}
	
	
	public function update($table,$data,$column,$id)
	{
		$this->db->where(array($column=>$id));
		$update = $this->db->update($table,$data);
		if($update)
		{
			return true;
		}
		else{
			return false;
			}
		
	}
	
	
}



?>