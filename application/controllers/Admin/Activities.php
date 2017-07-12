<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activities extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	public function __construct()
	{
		parent::__construct();
		$this->load->model('adminModel');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
	}
	 
	public function index($act_id=0)
	{
		if($act_id == 0)
		{
			$data['title'] = "Add Activity";
			$data['regions_data'] = $this->adminModel->select('regions','reg_id,name','',0,true);
			$data['action'] = "Admin/Activities/insertActivity/";
			$data['page'] = 'Admin/activityForm';
			$data['button'] = "Add";
			$this->load->view("Admin/template",$data);
		}
		else
		{
			$data['title'] = "Update Activity";
			$data['action'] = "Admin/Activities/updateActivity/".$act_id*1;
			$data['regions_data'] = $this->adminModel->select('regions','reg_id,name','',0,true);
			$data['activity_data'] = $this->adminModel->select('activities','','act_id',$act_id,false);
			$data['page'] = 'Admin/activityForm';
			$data['button'] = "Update";
			$this->load->view("Admin/template",$data);
		}
	}
	
	public function Activities($reg_id)
	{
		
		$data['activities_data'] = $this->adminModel->select('activities',0,'reg_id',$reg_id,true);
		$region_name = $this->adminModel->select('regions','name','reg_id',$reg_id,true);
		$data['region_name']  = $region_name[0];
		$data['region_id'] = $reg_id;
		$data['page'] = 'Admin/activities';
		$this->load->view("Admin/template",$data);
		
	}

	public function insertActivity()
	{
		$this->form_validation->set_rules("region", "Region", "trim|required");
		$this->form_validation->set_rules("name", "Name", "trim|required");
		$this->form_validation->set_rules("spots_detail", "Spots detail", "trim|required");
		if(empty($_FILES['icon']['name']))
		{
			$this->form_validation->set_rules("icon", "Icon", "trim|required");
		}
		if(empty($_FILES['image']['name']))
		{
			$this->form_validation->set_rules("image", "Image", "trim|required");
		}
		$this->form_validation->set_rules("description", "Description", "trim|required");
		$this->form_validation->set_rules("status", "Status", "trim|required");
				
		if($this->form_validation->run())
		{
			$config['upload_path']          = './images/admin/activities/';
			$config['allowed_types']        = 'jpg|png';
			$config['max_size']             = 1024;
			
			$icon_upload = $this->uploadFile('icon',$config);
			
			if ($icon_upload != false)
			{
				$icon = $icon_upload;
			}
			else
			{
				
				$data['error'] = array('error' => $this->upload->display_errors());
				$data['regions_data'] = $this->adminModel->select('regions','reg_id,name','',0,true);
				$data['action'] = "Admin/Activities/insertActivity/";
				$data['page'] = 'Admin/activityForm';
				$data['button'] = "Add";
				$this->load->view('Admin/template',$data);
				
			}
			
			$image_upload = $this->uploadFile('image',$config);
			
			if ($image_upload != false)
			{
				$image = $image_upload;
				echo $image;
			}
			else
			{
				
				$data['error'] = array('error' => $this->upload->display_errors());
				$data['regions_data'] = $this->adminModel->select('regions','reg_id,name','',0,true);
				$data['action'] = "Admin/Activities/insertActivity/";
				$data['page'] = 'Admin/activityForm';
				$data['button'] = "Add";
				$this->load->view('Admin/template',$data);
				
			}
			
			
			$reg_id = html_escape($this->input->post('region'));
			$name = html_escape($this->input->post('name'));
			$spots_detail = html_escape($this->input->post('spots_detail'));
			$description = html_escape($this->input->post('description'));
			$status = $this->input->post('status');
			$data = array('reg_id'=>$reg_id,'name'=>$name,'spots_detail'=>$spots_detail,'description'=>$description,'status'=>$status,'icon'=>$icon,'image'=>$image);
			
			$insert = $this->adminModel->insert('activities',$data);
			if($insert)
			{
				$this->session->set_flashdata("success", "<div class='text-success'>Activity inserted successfully.</div>");
				redirect("Admin/Activities/");
			}
			else
			{
				$this->session->set_flashdata("danger", "<div class='text-danger'>Activity insertion failed. Please try again.</div>");
				redirect("Admin/Activities/");
			}
			
			
		}
		else{
			$data['regions_data'] = $this->adminModel->select('regions','reg_id,name','',0,true);
			$data['title'] = "Add Activity";
			$data['action'] = "Admin/Activities/insertActivity/";
			$data['page'] = 'Admin/activityForm';
			$data['button'] = "Add";
			$this->load->view('Admin/template',$data);
			validation_errors();
			
			}
		
	}
	
	
	
	public function updateActivity($act_id)
	{
		$this->form_validation->set_rules("region", "Region", "trim|required");
		$this->form_validation->set_rules("name", "Name", "trim|required");
		$this->form_validation->set_rules("spots_detail", "Spots detail", "trim|required");
		$this->form_validation->set_rules("description", "Description", "trim|required");
		$this->form_validation->set_rules("status", "Status", "trim|required");
				
		if($this->form_validation->run())
		{
			$config['upload_path']          = './images/admin/activities/';
			$config['allowed_types']        = 'jpg|png';
			$config['max_size']             = 1024;
			
			if(!empty($_FILES['icon']['name']))
			{
				$icon_upload = $this->uploadFile('icon',$config);
				if ($icon_upload != false)
				{
					$icon = $icon_upload;
				}
				else
				{
					
					$data['error'] = array('error' => $this->upload->display_errors());
					$data['regions_data'] = $this->adminModel->select('regions','reg_id,name','',0,true);
					$data['action'] = "Admin/Activities/insertActivity/";
					$data['page'] = 'Admin/activityForm';
					$data['button'] = "Add";
					$this->load->view('Admin/template',$data);
					
				}
			}
			else{
				$icon = "";
				}
			
			if(!empty($_FILES['image']['name']))
			{
				$image_upload = $this->uploadFile('image',$config);
				if ($image_upload != false)
				{
					$image = $image_upload;
				}
				else
				{
					
					$data['error'] = array('error' => $this->upload->display_errors());
					$data['title'] = "Update Activity";
					$data['action'] = "Admin/Activities/updateActivity/".$act_id*1;
					$data['regions_data'] = $this->adminModel->select('regions','reg_id,name','',0,true);
					$data['activity_data'] = $this->adminModel->select('activities','','act_id',$act_id,false);
					$data['page'] = 'Admin/activityForm';
					$data['button'] = "Update";
					$this->load->view("Admin/template",$data);
					
				}
			}
			else{
				$image = "";
				}
			
			$reg_id = html_escape($this->input->post('region'));
			$name = html_escape($this->input->post('name'));
			$spots_detail = html_escape($this->input->post('spots_detail'));
			$description = html_escape($this->input->post('description'));
			$status = $this->input->post('status');
			$data = array('reg_id'=>$reg_id,'name'=>$name,'spots_detail'=>$spots_detail,'description'=>$description,'status'=>$status);
			if(!empty($icon))
			{
				$data['icon'] = $icon;
			}
			
			if(!empty($image))
			{
				$data['image'] = $image;
			}
			
			
			$update = $this->adminModel->update('activities',$data,'act_id',$act_id);
			if($update)
			{
				$this->session->set_flashdata("success", "<div class='text-success'>Activity Updated Successfully.</div>");
				redirect("Admin/Activities/Activities/".$reg_id);
			}
			else
			{
				$this->session->set_flashdata("danger", "<div class='text-danger'>Activity Updation Failed. Please try again.</div>");
				redirect("Admin/Activities/Activities/".$reg_id);
			}
			
		}
		else{
			$data['title'] = "Update Activity";
			$data['action'] = "Admin/Activities/updateActivity/".$act_id*1;
			$data['regions_data'] = $this->adminModel->select('regions','reg_id,name','',0,true);
			$data['activity_data'] = $this->adminModel->select('activities','','act_id',$act_id,false);
			$data['page'] = 'Admin/activityForm';
			$data['button'] = "Update";
			$this->load->view("Admin/template",$data);
			validation_errors();
			
			}
		
	}
	
	
	public function deleteActivity($reg_id,$act_id)
	{
		$delete = $this->adminModel->delete('activities','act_id',$act_id*1);
		
		if($delete)
		{
			$this->session->set_flashdata("success", "<div class='text-success'>Activity deleted successfully.</div>");
			redirect("Admin/Activities/Activities/".$reg_id);
		}
		else
		{
			$this->session->set_flashdata("danger", "<div class='text-danger'>Activity deletion failed. Please try again.</div>");
			redirect("Admin/Activities/Activities/".$reg_id);
		}
		
	}
	

/*--------------------------------------------------------- Activities Functions End---------------------------------------------------*/

/*--------------------------------------------------------- General Functions Start---------------------------------------------------*/

	
	public function url_filter($url)
	{
		if(filter_var($url,FILTER_VALIDATE_URL) === FALSE)
		{
			return false;
		}
		else{
			return true;
			}
	}
	
	public function uploadFile($file,$config)
	{
		$this->upload->initialize($config);
		if ($this->upload->do_upload($file))
		{
			$upload_data = $this->upload->data();
			$filename = $upload_data['file_name'];
			return $filename;
		}
		else{
			return false;
			}
		
	}
	
	
/*--------------------------------------------------------- Genreal Functions End---------------------------------------------------*/
	
	
}


