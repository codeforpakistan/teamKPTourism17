<?php
class UserModel extends CI_MODEL
{
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
	
	public function select($table,$select,$where,$order_by,$limit,$all)
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
		
		if(!empty($where))
		{		
			$this->db->where($where);
		}
		
		
		if(!empty($order_by))
		{
			$this->db->order_by($order_by);
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
	
	public function search($category,$type,$region)
	{
		$this->db->query('SELECT `activity_spots`.*, `events`.*,`restaurant`.*,`sights`.* FROM `activity_spots`, `events`,`restaurant`,`sights` WHERE `activity_spots`.`reg_id` = `events`.`reg_id` = `restaurant`.`reg_id` = `sights`.`reg_id` and `status`=1');
		$query = $this->db->get();
		return $this->db->result_array();
		
	}
	
	public function nameSearch($where,$keyword)
	{
		$this->db->select();
		$this->db->from('regions');
		$this->db->where($where);
		$this->db->like('name',$keyword);
		$query = $this->db->get();
		return $query->result_array();
	}
	
	
}



?>