<?php
class SpotModel extends CI_MODEL
{
	
	/* -----------------------------------------General Functions Starts---------------------------------------------------------*/
	
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
	
	
	public function getRegSpot($reg_id)
	{
		$this->db->select('activity_spots.spot_id,activity_spots.act_id,activities.name AS `act_name`,activity_spots.address,activities.reg_id,activity_spots.status,activity_spots.name AS `spot_name`');
		$this->db->from('activities');
		$this->db->join('activity_spots', 'activities.act_id = activity_spots.act_id');
		$this->db->where(array('activities.reg_id' => $reg_id));
		$query = $this->db->get();
		return $query->result_array();
	}
	
	
	public function getSpotCat($type_id)
	{
		$this->db->select('cat_id');
		$this->db->from('type');
		$this->db->where(array('type_id' => $type_id));
		$query = $this->db->get();
		return $query->result_array();
	}
	
}



?>