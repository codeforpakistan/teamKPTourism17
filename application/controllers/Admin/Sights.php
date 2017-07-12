<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sights extends CI_Controller {

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
		$this->load->model('sightsModel');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
	}
	 
	public function index($reg_id=0,$sight_id=0)
	{
		if($reg_id == 0  and $sight_id == 0)
		{
			$data['region_data'] = $this->sightsModel->select('regions','reg_id,name','',0,true);
			$data['category_data'] = $this->sightsModel->select('category','cat_id,name','',0,true);
			$data['action'] = "Admin/Sights/insertSight/";
			$data['title'] = "Regions Sight";
			$data['button'] = "Add";
			$data['page'] = 'Admin/sightForm';
			$this->load->view("Admin/template",$data);
		}
		else{
			$data['reg_id'] = $reg_id; 
			$data['region_data'] = $this->sightsModel->select('regions','reg_id,name','',0,true);
			$data['category_data'] = $this->sightsModel->select('category','cat_id,name','',0,true);
			$data['sight_data'] = $this->sightsModel->select('sights','','sight_id',$sight_id,false);
			$data['sight_cat'] = $this->sightsModel->getSpotCat($data['sight_data']->type);
			//$data['activity_data'] = $this->sightsModel->select('activities','act_id,name','reg_id',$reg_id,true); 
			$data['type_data'] = $this->sightsModel->select('type','type_id,name','cat_id',$data['sight_cat'][0]['cat_id'],true);
			$data['action'] = "Admin/Sights/updateSight/".$reg_id."/".$sight_id;
			$data['title'] = "Update Sight";
			$data['button'] = "Update";
			$data['page'] = 'Admin/sightForm';
			$this->load->view("Admin/template",$data);
			
			}
	}
	
	public function insertSight()
	{
		$this->form_validation->set_rules("reg_id", "Region", "trim|required");
		$this->form_validation->set_rules("name", "Name", "trim|required");
		$this->form_validation->set_rules("address", "Address", "trim|required");
		$this->form_validation->set_rules("contact", "Contact", "trim|required");
		$this->form_validation->set_rules("email", "Email", "trim|required");
		$this->form_validation->set_rules("website", "website", "trim|required");
		$this->form_validation->set_rules("open_timing", "Open Timing", "trim|required");
		$this->form_validation->set_rules("close_timing", "Close Timing", "trim|required");
		$this->form_validation->set_rules("rating", "Rating", "trim|required");
		$this->form_validation->set_rules("latitude", "Latitude", "trim|required");
		$this->form_validation->set_rules("longitude", "Longitude", "trim|required");
		$this->form_validation->set_rules("category", "Category", "trim|required");
		$this->form_validation->set_rules("type", "Type", "trim|required");
		$this->form_validation->set_rules("description", "Description", "trim|required");
		$this->form_validation->set_rules("status", "Status", "trim|required");
		
		if(empty($_FILES['header_image']['name']))
		{
			$this->form_validation->set_rules('header_image', 'Image', 'trim|required');
		}

		if($this->form_validation->run())
		{
			$config['upload_path']          = './images/admin/sights/';
			$config['allowed_types']        = 'jpg|png';
			$config['max_size']             = 1024;
			
			$upload = $this->uploadFile('header_image',$config);
			
			if ($upload != false)
			{
				$header_image = $upload;
			}
			else
			{
				
				$data['error'] = array('error' => $this->upload->display_errors());
				$data['region_data'] = $this->sightsModel->select('regions','reg_id,name','',0,true);
				$data['category_data'] = $this->sightsModel->select('category','cat_id,name','',0,true);
				$data['action'] = "Admin/Spots/insertSight/";
				$data['title'] = "Regions Sight";
				$data['button'] = "Add";
				$data['page'] = 'Admin/sightForm';
				$this->load->view("Admin/template",$data);
				
			}
			
			$reg_id = html_escape($this->input->post('reg_id'));
			$name = html_escape($this->input->post('name'));
			$address = html_escape($this->input->post('address'));
			$contact = html_escape($this->input->post('contact'));
			$email = html_escape($this->input->post('email'));
			$website = html_escape($this->input->post('website'));
			$open_timing = html_escape($this->input->post('open_timing'));
			$close_timing = html_escape($this->input->post('close_timing'));
			$rating = html_escape($this->input->post('rating'));
			$latitude = html_escape($this->input->post('latitude'));
			$longitude = html_escape($this->input->post('longitude'));
			$description = $this->test_input($this->input->post('description'));
			$type = html_escape($this->input->post('type'));
			$status = html_escape($this->input->post('status'));
			
			$data = array('reg_id'=> $reg_id,'name'=>$name,'address'=>$address,'contact'=>$contact,'email'=>$email,'website'=>$website,'open_timing'=>$open_timing,'close_timing'=>$close_timing,'rating'=>$rating,'latitude'=>$latitude,'longitude'=>$longitude,'header_image'=>$header_image,'description'=>$description,'type'=>$type,'status'=> $status);
			
			$insert = $this->sightsModel->insert('sights',$data);
			if($insert)
			{
				$this->session->set_flashdata("success", "<div class='text-success'>Sight Inserted Successfully.</div>");
				redirect("Admin/Sights/");
			}
			else
			{
				$this->session->set_flashdata("danger", "<div class='text-danger'>Sight Insertion Failed. Please try again.</div>");
				redirect("Admin/Sights/");
			}
			
			
		}
		else
		{
			$data['region_data'] = $this->sightsModel->select('regions','reg_id,name','',0,true);
			$data['category_data'] = $this->sightsModel->select('category','cat_id,name','',0,true);
			//$data['activity_data'] = $this->sightsModel->select('activities','act_id,name','reg_id',$this->input->post('reg_id'),true);
			$data['type_data'] = $this->sightsModel->select('type','type_id,name','cat_id',$this->input->post('category'),true);
			$data['action'] = "Admin/Sights/insertSight/";
			$data['title'] = "Add Sight to Region";
			$data['button'] = "Add";
			$data['page'] = 'Admin/sightForm';
			$this->load->view("Admin/template",$data);
			validation_errors();
		}
		
	}
	
	
	public function updateSight($reg_id,$sight_id)
	{
		
		$this->form_validation->set_rules("reg_id", "Region", "trim|required");
		$this->form_validation->set_rules("name", "Name", "trim|required");
		$this->form_validation->set_rules("address", "Address", "trim|required");
		$this->form_validation->set_rules("contact", "Contact", "trim|required");
		$this->form_validation->set_rules("email", "Email", "trim|required");
		$this->form_validation->set_rules("website", "website", "trim|required");
		$this->form_validation->set_rules("open_timing", "Open Timing", "trim|required");
		$this->form_validation->set_rules("close_timing", "Close Timing", "trim|required");
		$this->form_validation->set_rules("rating", "Rating", "trim|required");
		$this->form_validation->set_rules("latitude", "Latitude", "trim|required");
		$this->form_validation->set_rules("longitude", "Longitude", "trim|required");
		$this->form_validation->set_rules("category", "Category", "trim|required");
		$this->form_validation->set_rules("type", "Type", "trim|required");
		$this->form_validation->set_rules("description", "Description", "trim|required");
		$this->form_validation->set_rules("status", "Status", "trim|required");
		
		if($this->form_validation->run())
		{
			$config['upload_path']          = './images/admin/sights/';
			$config['allowed_types']        = 'jpg|png';
			$config['max_size']             = 1024;
		
			if(!empty($_FILES['header_image']['name']))
			{
				$upload = $this->uploadFile('header_image',$config);
				if ($upload != false)
				{
					$header_image = $upload;
				}
				else
				{
					$data['error'] = array('error' => $this->upload->display_errors());
					$data['reg_id'] = $reg_id; 
					$data['region_data'] = $this->sightsModel->select('regions','reg_id,name','',0,true);
					$data['category_data'] = $this->sightsModel->select('category','cat_id,name','',0,true);
					$data['sight_data'] = $this->sightsModel->select('sights','','sight_id',$sight_id,false);
					$data['sight_cat'] = $this->sightsModel->getSpotCat($data['sight_data']->type);
					//$data['activity_data'] = $this->sightsModel->select('activities','act_id,name','reg_id',$reg_id,true); 
					$data['type_data'] = $this->sightsModel->select('type','type_id,name','cat_id',$data['sight_cat'][0]['cat_id'],true);
					$data['action'] = "Admin/Spots/updateSight/".$reg_id."/".$sight_id;
					$data['title'] = "Update Sight";
					$data['button'] = "Update";
					$data['page'] = 'Admin/sightForm';
					$this->load->view("Admin/template",$data);
					
				}
			
			}
			else{
				$header_image = "";
				}
			
		
			$reg_id = html_escape($this->input->post('reg_id'));
			$name = html_escape($this->input->post('name'));
			$address = html_escape($this->input->post('address'));
			$contact = html_escape($this->input->post('contact'));
			$email = html_escape($this->input->post('email'));
			$website = html_escape($this->input->post('website'));
			$open_timing = html_escape($this->input->post('open_timing'));
			$close_timing = html_escape($this->input->post('close_timing'));
			$rating = html_escape($this->input->post('rating'));
			$latitude = html_escape($this->input->post('latitude'));
			$longitude = html_escape($this->input->post('longitude'));
			$description = $this->test_input($this->input->post('description'));
			$type = html_escape($this->input->post('type'));
			$status = html_escape($this->input->post('status'));
			
			$data = array('reg_id'=> $reg_id,'name'=>$name,'address'=>$address,'contact'=>$contact,'email'=>$email,'website'=>$website,'open_timing'=>$open_timing,'close_timing'=>$close_timing,'rating'=>$rating,'latitude'=>$latitude,'longitude'=>$longitude,'description'=>$description,'type'=>$type,'status'=> $status);
			
			if(!empty($header_image))
			{
				$data['header_image'] = $header_image;
			}
			
			$update = $this->sightsModel->update('sights',$data,'sight_id',$sight_id);
			if($update)
			{
				$this->session->set_flashdata("success", "<div class='text-success'>Sight Updated Successfully.</div>");
				redirect("Admin/Sights/Sights/".$reg_id);
			}
			else
			{
				$this->session->set_flashdata("danger", "<div class='text-danger'>Sight Updation Failed. Please try again.</div>");
				redirect("Admin/Sights/");
			}
			
			
		}
		else
		{
			if(!empty($this->input->post('reg_id')))
			{
				$reg_id = html_escape($this->input->post('reg_id'));
			}
			$data['reg_id'] = $reg_id; 
			$data['region_data'] = $this->sightsModel->select('regions','reg_id,name','',0,true);
			$data['category_data'] = $this->sightsModel->select('category','cat_id,name','',0,true);
			if(!empty($this->input->post('category')))
			{
				$sight_cat = $this->input->post('category');
			}
			else{
				$sight_cat = 0;
				}
			
			$data['activity_data'] = $this->sightsModel->select('activities','act_id,name','reg_id',$reg_id,true); 
			$data['type_data'] = $this->sightsModel->select('type','type_id,name','cat_id',$sight_cat,true);
			$data['action'] = "Admin/Sights/updateSight/".$reg_id."/".$sight_id;
			$data['title'] = "Update Sight";
			$data['button'] = "Update";
			$data['page'] = 'Admin/sightForm';
			$this->load->view("Admin/template",$data);
			validation_errors();
		}
	}
	
	
	public function Sights($reg_id)
	{
		$data['sights_data'] = $this->sightsModel->getRegSight($reg_id);
		$region_name = $this->sightsModel->select('regions','name','reg_id',$reg_id,true);
		$data['region_name']  = $region_name[0];
		$data['reg_id'] = $reg_id;
		$data['page'] = 'Admin/sights';
		$this->load->view("Admin/template",$data);
	
	}
	
	
	public function deleteSight($reg_id,$sight_id)
	{
		$delete = $this->sightsModel->delete('sights','sight_id',$sight_id*1);
		
		if($delete)
		{
			$this->session->set_flashdata("success", "<div class='text-success'>Sight deleted successfully.</div>");
			redirect("Admin/Sights/Sights/".$reg_id);
		}
		else
		{
			$this->session->set_flashdata("danger", "<div class='text-danger'>Sight deletion failed. Please try again.</div>");
			redirect("Admin/Sights/Sights/".$reg_id);
		}
		
	}
	
	
	public function sightsGallery($sight_id)
	{
		$data['sight_id'] = $sight_id;
		$data['gallery_data'] = $this->sightsModel->select('sights_gallery','','sight_id',$sight_id,true);
		$data['sight_name'] = $this->sightsModel->select('sights','name','sight_id',$sight_id,true);
		$data['page'] = 'Admin/sightsGallery';
		$this->load->view("Admin/template",$data);
	}
	
	private $_uploaded;
	
	public function addGallery($sight_id)
	{	
			$this->form_validation->set_rules('images[]','Image','callback_fileupload_check['.$sight_id.']');
			
			if($this->input->post())
			{
		 
			  if($this->form_validation->run())
			  {
				$a=0;
				$not_inserted = array();
				foreach($this->_uploaded as $key=>$value)
				{
					$data = array('sight_id'=>$sight_id,'image'=>$value['file_name']);
					$insert = $this->sightsModel->insert('sights_gallery',$data);
					if($insert == false)
					{
						$not_inserted[$a] = $value['file_name'];
					}
					$a++;
				}
				$data['not_inserted'] = $not_inserted;
				$data['sight_id'] = $sight_id;
				$data['gallery_data'] = $this->sightsModel->select('sights_gallery','','sight_id',$sight_id,true);
				$data['sight_name'] = $this->sightsModel->select('sights','name','sight_id',$sight_id,true);
				$this->session->set_flashdata("success", "<div class='text-success'>Images added to gallery successfully.</div>");
				$data['page'] = 'Admin/sightsGallery';
				$this->load->view("Admin/template",$data);
			  }
			}
			else{
				$data['sight_id'] = $sight_id;
				$data['gallery_data'] = $this->sightsModel->select('sights_gallery','','sight_id',$sight_id,true);
				$data['sight_name'] = $this->sightsModel->select('sights','name','sight_id',$sight_id,true);
				$data['page'] = 'Admin/sightsGallery';
				$this->load->view("Admin/template",$data);
				}

						
		
	}
	

 
  public function fileupload_check($value,$sight_id)
  {
	$number_of_files = sizeof($_FILES['images']['tmp_name']);
	if($number_of_files < 2)
	{
		$data['sight_id'] = $sight_id;
		$data['gallery_data'] = $this->sightsModel->select('sights_gallery','','sight_id',$sight_id,true);
		$data['sight_name'] = $this->sightsModel->select('sights','name','sight_id',$sight_id,true);
		$this->session->set_flashdata("danger", "<div class='text-danger'>Please select atleaset one image.</div>");
		redirect('Admin/Sights/sightsGallery/'.$sight_id);
	}
	
    $files = $_FILES['images'];
    for($i=0;$i<$number_of_files;$i++)
    {
      if($_FILES['images']['error'][$i] != 0)
      {
        $this->form_validation->set_message('fileupload_check', 'Couldn\'t upload the file(s)');
        return FALSE;
      }
    }
    $config['upload_path'] = './images/admin/sights/';
    $config['allowed_types'] = 'gif|jpg|png';
    for ($i = 0; $i < $number_of_files; $i++)
    {
      $_FILES['image']['name'] = $files['name'][$i];
      $_FILES['image']['type'] = $files['type'][$i];
      $_FILES['image']['tmp_name'] = $files['tmp_name'][$i];
      $_FILES['image']['error'] = $files['error'][$i];
      $_FILES['image']['size'] = $files['size'][$i];
      
      $this->upload->initialize($config);
      if ($this->upload->do_upload('image'))
      {
        $this->_uploaded[$i] = $this->upload->data();
      }
      else
      {
        $this->form_validation->set_message('fileupload_check', $this->upload->display_errors());
        return FALSE;
      }
    }
    return TRUE;
  }
	

	public function deleteSightImage($spot_id,$image_id)
	{
		$delete = $this->sightsModel->delete('sights_gallery','id',$image_id*1);
		
		if($delete)
		{
			$this->session->set_flashdata("success", "<div class='text-success'>Sight image deleted successfully.</div>");
			redirect("Admin/Sights/sightsGallery/".$spot_id);
		}
		else
		{
			$this->session->set_flashdata("danger", "<div class='text-danger'>Sight image deletion failed. Please try again.</div>");
			redirect("Admin/Sights/sightsGallery/".$spot_id);
		}
		
	}
	
	
/*--------------------------------------------------------- General Functions Start---------------------------------------------------*/
	
	
	public function test_input($data) 
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlentities($data);
		return $data;
	}
	
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


