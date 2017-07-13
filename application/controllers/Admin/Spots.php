<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spots extends CI_Controller {

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
		$this->load->model('spotModel');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
	}
	 
	public function index($reg_id=0,$spot_id=0)
	{
		if($reg_id == 0 and $spot_id == 0)
		{
			$data['region_data'] = $this->spotModel->select('regions','reg_id,name','',0,true);
			$data['category_data'] = $this->spotModel->select('category','cat_id,name','',0,true);
			$data['action'] = "Admin/Spots/insertSpot/";
			$data['title'] = "Activity Spot";
			$data['button'] = "Add";
			$data['page'] = 'Admin/spotForm';
			$this->load->view("Admin/template",$data);
		}
		else{
			$data['reg_id'] = $reg_id; 
			$data['region_data'] = $this->spotModel->select('regions','reg_id,name','',0,true);
			$data['category_data'] = $this->spotModel->select('category','cat_id,name','',0,true);
			$data['spot_data'] = $this->spotModel->select('activity_spots','','spot_id',$spot_id,false);
			$data['spot_cat'] = $this->spotModel->getSpotCat($data['spot_data']->type);
			$data['activity_data'] = $this->spotModel->select('activities','act_id,name','reg_id',$reg_id,true); 
			$data['type_data'] = $this->spotModel->select('type','type_id,name','cat_id',$data['spot_cat'][0]['cat_id'],true);
			$data['action'] = "Admin/Spots/updateSpot/".$reg_id."/".$spot_id;
			$data['title'] = "Update Activity Spot";
			$data['button'] = "Update";
			$data['page'] = 'Admin/spotForm';
			$this->load->view("Admin/template",$data);
			
			}
	}

	public function getRegAct()
	{
		$reg_id = html_escape($this->input->post('reg_id'));
		if(!empty($reg_id))
		{
			$regAct = $this->spotModel->select('activities','act_id,name','reg_id',$reg_id,true);
			if($regAct !== false)
			{
				$output = "";
				$output .= "<option value=''>--- Select One ---</option>"; 
				foreach ($regAct as $key => $value)
				{
					$output .= "<option value='".$value['act_id']."'>".$value['name']."</option>";
				}
				echo $output;
			}
			else{
				echo "<option value=''>No activity found</option>";
				}
		}
		else{
			echo "<option value=''>No activity found</option>";
			}
	} 
	
	public function getCatType()
	{
		$cat_id = html_escape($this->input->post('cat_id'));
		if(!empty($cat_id))
		{
			$catType = $this->spotModel->select('type','type_id,name','cat_id',$cat_id,true);
			if($catType !== false)
			{
				$output = "";
				$output .= "<option value=''>--- Select One ---</option>"; 
				foreach ($catType as $key => $value)
				{
					$output .= "<option value='".$value['type_id']."'>".$value['name']."</option>";
				}
				echo $output;
			}
			else{
				echo "<option value=''>No type found</option>";
				}
		}
		else{
			echo "<option value=''>No type found</option>";
			}
	}
	
	public function insertSpot()
	{
		$this->form_validation->set_rules("reg_id", "Region", "trim|required");
		$this->form_validation->set_rules("act_id", "Activity", "trim|required");
		$this->form_validation->set_rules("name", "Name", "trim|required");
		$this->form_validation->set_rules("address", "Address", "trim|required");
		$this->form_validation->set_rules("contact", "Contact", "trim|required");
		$this->form_validation->set_rules("email", "Email", "trim|required");
		$this->form_validation->set_rules("website", "website", "trim|required|callback_url_filter");
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
			$config['upload_path']          = './images/admin/spots/';
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
				$data['region_data'] = $this->spotModel->select('regions','reg_id,name','',0,true);
				$data['category_data'] = $this->spotModel->select('category','cat_id,name','',0,true);
				$data['action'] = "Admin/Spots/insertSpot/";
				$data['title'] = "Activity Spot";
				$data['button'] = "Add";
				$data['page'] = 'Admin/spotForm';
				$this->load->view("Admin/template",$data);
				$this->load->view('Admin/template',$data);
				
			}
			
			$reg_id = html_escape($this->input->post('reg_id'));
			$act_id = html_escape($this->input->post('act_id'));
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
			
			$data = array('act_id'=> $act_id,'name'=>$name,'address'=>$address,'contact'=>$contact,'email'=>$email,'website'=>$website,'open_timing'=>$open_timing,'close_timing'=>$close_timing,'rating'=>$rating,'latitude'=>$latitude,'longitude'=>$longitude,'header_image'=>$header_image,'description'=>$description,'type'=>$type,'status'=> $status);
			
			$insert = $this->spotModel->insert('activity_spots',$data);
			if($insert)
			{
				$this->session->set_flashdata("success", "<div class='text-success'>Activity Spot Inserted Successfully.</div>");
				redirect("Admin/Spots/");
			}
			else
			{
				$this->session->set_flashdata("danger", "<div class='text-danger'>Activity Spot Insertion Failed. Please try again.</div>");
				redirect("Admin/Spots/");
			}
			
			
		}
		else
		{
			$data['region_data'] = $this->spotModel->select('regions','reg_id,name','',0,true);
			$data['category_data'] = $this->spotModel->select('category','cat_id,name','',0,true);
			$data['activity_data'] = $this->spotModel->select('activities','act_id,name','reg_id',$this->input->post('reg_id'),true);
			$data['type_data'] = $this->spotModel->select('type','type_id,name','cat_id',$this->input->post('category'),true);
			$data['action'] = "Admin/Spots/insertSpot/";
			$data['title'] = "Activity Spot";
			$data['button'] = "Add";
			$data['page'] = 'Admin/spotForm';
			$this->load->view("Admin/template",$data);
			validation_errors();
		}
		
	}
	
	
	public function updateSpot($reg_id,$spot_id)
	{
		
		$this->form_validation->set_rules("reg_id", "Region", "trim|required");
		$this->form_validation->set_rules("act_id", "Activity", "trim|required");
		$this->form_validation->set_rules("name", "Name", "trim|required");
		$this->form_validation->set_rules("address", "Address", "trim|required");
		$this->form_validation->set_rules("contact", "Contact", "trim|required");
		$this->form_validation->set_rules("email", "Email", "trim|required");
		$this->form_validation->set_rules("website", "website", "trim|required|callback_url_filter");
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
			$config['upload_path']          = './images/admin/spots/';
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
					$data['region_data'] = $this->spotModel->select('regions','reg_id,name','',0,true);
					$data['category_data'] = $this->spotModel->select('category','cat_id,name','',0,true);
					$data['spot_data'] = $this->spotModel->select('activity_spots','','spot_id',$spot_id,false);
					$data['spot_cat'] = $this->spotModel->getSpotCat($data['spot_data']->type);
					$data['activity_data'] = $this->spotModel->select('activities','act_id,name','reg_id',$reg_id,true); 
					$data['type_data'] = $this->spotModel->select('type','type_id,name','cat_id',$data['spot_cat'][0]['cat_id'],true);
					$data['action'] = "Admin/Spots/updateSpot/".$reg_id."/".$spot_id;
					$data['title'] = "Update Activity Spot";
					$data['button'] = "Update";
					$data['page'] = 'Admin/spotForm';
					$this->load->view("Admin/template",$data);
					
				}
			
			}
			else{
				$header_image = "";
				}
			
		
			$reg_id = html_escape($this->input->post('reg_id'));
			$act_id = html_escape($this->input->post('act_id'));
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
			
			$data = array('act_id'=> $act_id,'name'=>$name,'address'=>$address,'contact'=>$contact,'email'=>$email,'website'=>$website,'open_timing'=>$open_timing,'close_timing'=>$close_timing,'rating'=>$rating,'latitude'=>$latitude,'longitude'=>$longitude,'description'=>$description,'type'=>$type,'status'=> $status);
			
			if(!empty($header_image))
			{
				$data['header_image'] = $header_image;
			}
			$update = $this->spotModel->update('activity_spots',$data,'spot_id',$spot_id);
			if($update)
			{
				$this->session->set_flashdata("success", "<div class='text-success'>Activity Spot Updated Successfully.</div>");
				redirect("Admin/Spots/Spots/".$reg_id);
			}
			else
			{
				$this->session->set_flashdata("danger", "<div class='text-danger'>Activity Spot Updation Failed. Please try again.</div>");
				redirect("Admin/Spots/");
			}
			
			
		}
		else
		{
			if(!empty($this->input->post('reg_id')))
			{
				$reg_id = html_escape($this->input->post('reg_id'));
			}
			$data['reg_id'] = $reg_id; 
			$data['region_data'] = $this->spotModel->select('regions','reg_id,name','',0,true);
			$data['category_data'] = $this->spotModel->select('category','cat_id,name','',0,true);
			if(!empty($this->input->post('category')))
			{
				$spot_cat = $this->input->post('category');
			}
			
			$data['activity_data'] = $this->spotModel->select('activities','act_id,name','reg_id',$reg_id,true); 
			$data['type_data'] = $this->spotModel->select('type','type_id,name','cat_id',$spot_cat,true);
			$data['action'] = "Admin/Spots/updateSpot/".$reg_id."/".$spot_id;
			$data['title'] = "Update Activity Spot";
			$data['button'] = "Update";
			$data['page'] = 'Admin/spotForm';
			$this->load->view("Admin/template",$data);
			validation_errors();
		}
	}
	
	
	public function Spots($reg_id)
	{
		$data['spots_data'] = $this->spotModel->getRegSpot($reg_id);
		$region_name = $this->spotModel->select('regions','name','reg_id',$reg_id,true);
		$data['region_name']  = $region_name[0];
		$data['reg_id'] = $reg_id;
		$data['page'] = 'Admin/spots';
		$this->load->view("Admin/template",$data);
	
	}
	
	
	public function deleteSpot($reg_id,$spot_id)
	{
		$delete = $this->spotModel->delete('activity_spots','spot_id',$spot_id*1);
		
		if($delete)
		{
			$this->session->set_flashdata("success", "<div class='text-success'>Spot deleted successfully.</div>");
			redirect("Admin/Spots/Spots/".$reg_id);
		}
		else
		{
			$this->session->set_flashdata("danger", "<div class='text-danger'>Spot deletion failed. Please try again.</div>");
			redirect("Admin/Spots/Spots/".$reg_id);
		}
		
	}
	
	
	public function spotsGallery($spot_id)
	{
		$data['spot_id'] = $spot_id;
		$data['gallery_data'] = $this->spotModel->select('spots_gallery','','spot_id',$spot_id,true);
		$data['spot_name'] = $this->spotModel->select('activity_spots','name','spot_id',$spot_id,true);
		$data['page'] = 'Admin/spotsGallery';
		$this->load->view("Admin/template",$data);
	}
	
	private $_uploaded;
	
	public function addGallery($spot_id)
	{	
			$this->form_validation->set_rules('images[]','Image','callback_fileupload_check['.$spot_id.']');
			
			if($this->input->post())
			{
		 
			  if($this->form_validation->run())
			  {
				$a=0;
				$not_inserted = array();
				foreach($this->_uploaded as $key=>$value)
				{
					$data = array('spot_id'=>$spot_id,'image'=>$value['file_name']);
					$insert = $this->spotModel->insert('spots_gallery',$data);
					if($insert == false)
					{
						$not_inserted[$a] = $value['file_name'];
					}
					$a++;
				}
				$data['not_inserted'] = $not_inserted;
				$data['spot_id'] = $spot_id;
				$data['gallery_data'] = $this->spotModel->select('spots_gallery','','spot_id',$spot_id,true);
				$data['spot_name'] = $this->spotModel->select('activity_spots','name','spot_id',$spot_id,true);
				$this->session->set_flashdata("success", "<div class='text-success'>Images added to gallery successfully.</div>");
				$data['page'] = 'Admin/spotsGallery';
				$this->load->view("Admin/template",$data);
			  }
			}
			else{
				$data['spot_id'] = $spot_id;
				$data['gallery_data'] = $this->spotModel->select('spots_gallery','','spot_id',$spot_id,true);
				$data['spot_name'] = $this->spotModel->select('activity_spots','name','spot_id',$spot_id,true);
				$data['page'] = 'Admin/spotsGallery';
				$this->load->view("Admin/template",$data);
				}

						
		
	}
	

 
  public function fileupload_check($value,$spot_id)
  {
	$number_of_files = sizeof($_FILES['images']['tmp_name']);
	if($number_of_files < 2)
	{
		$data['spot_id'] = $spot_id;
		$data['gallery_data'] = $this->spotModel->select('spots_gallery','','spot_id',$spot_id,true);
		$data['spot_name'] = $this->spotModel->select('activity_spots','name','spot_id',$spot_id,true);
		$this->session->set_flashdata("danger", "<div class='text-danger'>Please select atleaset one image.</div>");
		redirect('Admin/Spots/spotsGallery/'.$spot_id);
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
    $config['upload_path'] = './images/admin/spots/';
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
	

	public function deleteSpotImage($spot_id,$image_id)
	{
		$delete = $this->spotModel->delete('spots_gallery','id',$image_id*1);
		
		if($delete)
		{
			$this->session->set_flashdata("success", "<div class='text-success'>Spot image deleted successfully.</div>");
			redirect("Admin/Spots/spotsGallery/".$spot_id);
		}
		else
		{
			$this->session->set_flashdata("danger", "<div class='text-danger'>Spot image deletion failed. Please try again.</div>");
			redirect("Admin/Spots/spotsGallery/".$spot_id);
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


