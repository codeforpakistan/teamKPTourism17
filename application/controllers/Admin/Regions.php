<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regions extends CI_Controller {

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
	 
	public function index()
	{
		$data['regions_data'] = $this->adminModel->select('regions','','',0,true);
		$data['title'] = "Regions";
		$data['sub_title'] = "";
		$data['page'] = 'Admin/regions';
		$this->load->view("Admin/template",$data);
	}


/*--------------------------------------------------------- Regions Functions Start---------------------------------------------------*/

	public function regionForm($id=0)
	{
		if($id == 0)
		{
			$data['title'] = "Add Region";
			$data['action'] = "Admin/Regions/insertRegion/";
			$data['page'] = 'Admin/regionForm';
			$data['button'] = "Add";
			$this->load->view("Admin/template",$data);
		}
		else
		{
			$data['title'] = "Update Region";
			$data['action'] = "Admin/Regions/updateRegion/".$id;
			$data['region_data'] = $this->adminModel->select('regions','','reg_id',$id*1,false);
			$data['page'] = 'Admin/regionForm';
			$data['button'] = "Update";
			$this->load->view("Admin/template",$data);
		}
	}

	public function insertRegion()
	{
		$this->form_validation->set_rules("name", "Name", "trim|required");
		$this->form_validation->set_rules("location", "Location", "trim|required");
		$this->form_validation->set_rules("elevation", "Elevation", "trim");
		$this->form_validation->set_rules("heading", "Heading", "trim|required");
		$this->form_validation->set_rules("heading_desc", "Heading Description", "trim|required");
		$this->form_validation->set_rules("rating", "Rating", "trim|required");
		$this->form_validation->set_rules("weather", "Weather", "trim|required");
		$this->form_validation->set_rules("famous", "Famous", "trim|required");
		if(empty($_FILES['image']['name']))
		{
			$this->form_validation->set_rules('image', 'Image', 'trim|required');
		}
		$this->form_validation->set_rules("description", "Description", "trim|required");
		$this->form_validation->set_rules("status","Status", "trim");
		if(!empty($_POST['famous']) and $_POST['famous'] == 1)
		{
			if(empty($_FILES['thumb_image']['name']))
			{
				$this->form_validation->set_rules("thumb_image", "Thumb Image", "trim|required");
			}
			if(empty($_FILES['thumb_overlay']['name']))
			{
				$this->form_validation->set_rules("thumb_overlay", "Thumb overlay", "trim|required");
			}
		}
				
		if($this->form_validation->run())
		{
			$config['upload_path']          = './images/admin/regions/';
			$config['allowed_types']        = 'jpg|png';
			$config['max_size']             = 0;
			
			$upload = $this->uploadFile('image',$config);
			if ($upload != false)
			{
				$image = $upload;
			}
			else
			{
				$data['error'] = array('error' => $this->upload->display_errors());
				$data['action'] = "Admin/Regions/insertRegion/";
				$data['page'] = 'Admin/regionForm';
				$data['button'] = "Add";
				//redirect('Admin/Regions/regionForm');
				$this->load->view('Admin/template',$data);
				print_r($data['error']);
				exit;
			}
			
			if(!empty($_POST['famous']) and $_POST['famous'] == 1)
			{
				$upload = $this->uploadFile('thumb_image',$config);
				if ($upload != false)
				{
					$thumb_image = $upload;
				}
				else
				{
					
					$data['error'] = array('error' => $this->upload->display_errors());
					$data['title'] = "Add Region";
					$data['action'] = "Admin/Regions/insertRegion/";
					$data['page'] = 'Admin/regionForm';
					$data['button'] = "Add";
					$this->load->view('Admin/template',$data);
					
				}
				
				
				$upload = $this->uploadFile('thumb_overlay',$config);
				if ($upload != false)
				{
					$thumb_overlay = $upload;
				}
				else
				{
					
					$data['error'] = array('error' => $this->upload->display_errors());
					$data['title'] = "Add Region";
					$data['action'] = "Admin/Regions/insertRegion/";
					$data['page'] = 'Admin/regionForm';
					$data['button'] = "Add";
					$this->load->view('Admin/template',$data);
					
				}
			}
			else{
				$thumb_image = "";
				$thumb_overlay = "";
				}
			
			$name = html_escape($this->input->post('name'));
			$location = html_escape($this->input->post('location'));
			$elevation = html_escape($this->input->post('elevation'));
			$heading = html_escape($this->input->post('heading'));
			$heading_desc = html_escape($this->input->post('heading_desc'));
			$rating = html_escape($this->input->post('rating'));
			$weather = html_escape($this->input->post('weather'));
			$famous = html_escape($this->input->post('famous'));
			$description = $this->test_input($this->input->post('description'));
			$status = $this->input->post('status');
			
			$data = array('name'=>$name,'location'=>$location,'elevation'=>$elevation,'heading'=>$heading,'heading_desc'=>$heading_desc,'rating'=>$rating,'weather' => $weather,'is_famous' => $famous,'image'=>$image,'thumb_image'=>$thumb_image,'thumb_overlay'=>$thumb_overlay,'status'=>$status,'description'=>$description);
			
			$insert = $this->adminModel->insert('regions',$data);
			if($insert)
			{
				$this->session->set_flashdata("success", "<div class='text-success'>Region Inserted Successfully.</div>");
				redirect("Admin/Regions/regionForm/");
			}
			else
			{
				$this->session->set_flashdata("danger", "<div class='text-danger'>Region Insertion Failed. Please try again.</div>");
				redirect("Admin/Regions/regionForm/");
			}
			
			
		}
		else{
			$data['title'] = "Add Region";
			$data['action'] = "Admin/Regions/insertRegion/";
			$data['page'] = 'Admin/regionForm';
			$data['button'] = "Add";
			$this->load->view('Admin/template',$data);
			validation_errors();
			
			}
		
	}
	
	
	public function updateRegion($id)
	{
		$this->form_validation->set_rules("name", "Name", "trim|required");
		$this->form_validation->set_rules("location", "Location", "trim|required");
		$this->form_validation->set_rules("elevation", "Elevation", "trim|required");
		$this->form_validation->set_rules("heading", "Heading", "trim|required");
		$this->form_validation->set_rules("heading_desc", "Heading Description", "trim|required");
		$this->form_validation->set_rules("rating", "Rating", "trim|required");
		$this->form_validation->set_rules("weather", "Weather", "trim|required");
		$this->form_validation->set_rules("famous", "Famous", "trim|required");
		$this->form_validation->set_rules("description", "Description", "trim|required");
		$this->form_validation->set_rules("status","Status", "trim");
				
		if($this->form_validation->run())
		{
			$config['upload_path']          = './images/admin/regions/';
			$config['allowed_types']        = 'jpg|png';
			$config['max_size']             = 1024;
			
			if(!empty($_FILES['image']['name']))
			{
				$upload = $this->uploadFile('image',$config);
				if ($upload != false)
				{
					$image = $upload;
				}
				else
				{
					$data['title'] = "Update Region";
					$data['error'] = array('error' => $this->upload->display_errors());
					$data['action'] = "Admin/Regions/updateRegion/";
					$data['page'] = 'Admin/regionForm';
					$data['button'] = "update";
					$this->load->view('Admin/template',$data);
					
				}
			
			}
			else{
				$image = "";
				}
				
			if(!empty($_FILES['thumb_image']['name']))
			{
				$upload = $this->uploadFile('thumb_image',$config);
				if ($upload != false)
				{
					$thumb_image = $upload;
				}
				else
				{
					$data['title'] = "Update Region";					
					$data['error'] = array('error' => $this->upload->display_errors());
					$data['action'] = "Admin/Regions/updateRegion/";
					$data['page'] = 'Admin/regionForm';
					$data['button'] = "Update";
					$this->load->view('Admin/template',$data);
					
				}
			
			}
			else{
				$thumb_image = "";
				}
			
			if(!empty($_FILES['thumb_overlay']['name']))
			{
				$upload = $this->uploadFile('thumb_overlay',$config);
				if ($upload != false)
				{
					$thumb_overlay = $upload;
				}
				else
				{
					$data['title'] = "Update Region";
					$data['error'] = array('error' => $this->upload->display_errors());
					$data['action'] = "Admin/Regions/updateRegion";
					$data['page'] = 'Admin/regionForm';
					$data['button'] = "Update";
					$this->load->view('Admin/template',$data);
					
				}
			
			}
			else{
				$thumb_overlay = "";
				}
			
			$name = html_escape($this->input->post('name'));
			$location = html_escape($this->input->post('location'));
			$elevation = html_escape($this->input->post('elevation'));
			$heading = html_escape($this->input->post('heading'));
			$heading_desc = html_escape($this->input->post('heading_desc'));
			$rating = html_escape($this->input->post('rating'));
			$weather = html_escape($this->input->post('weather'));
			$famous = html_escape($this->input->post('famous'));
			$description = html_escape($this->input->post('description'));
			$status = $this->input->post('status');
			
			$data = array('name'=>$name,'location'=>$location,'elevation'=>$elevation,'heading'=>$heading,'heading_desc'=>$heading_desc,'rating'=>$rating,'weather' => $weather,'is_famous' => $famous,'description'=>$description,'status'=>$status);
			if(!empty($image))
			{
				$data['image'] = $image;
			}
			if(!empty($thumb_image))
			{
				$data['thumb_image'] = $thumb_image;
			}
			
			if(!empty($thumb_overlay))
			{
				$data['thumb_overlay'] = $thumb_overlay;
			}
			
			$update = $this->adminModel->update('regions',$data,'reg_id',$id);
			if($update)
			{
				$this->session->set_flashdata("success", "<div class='text-success'>Region Updated Successfully.</div>");
				redirect("Admin/Regions");
			}
			else
			{
				$this->session->set_flashdata("danger", "<div class='text-danger'>Region Updation Failed. Please try again.</div>");
				redirect("Admin/Regions");
			}
			
			
		}
		else{
			$data['title'] = "Update Region";
			$data['action'] = "Admin/Regions/updateRegion/".$id;
			$data['page'] = 'Admin/regionForm';
			$data['button'] = "Update";
			$this->load->view('Admin/template',$data);
			validation_errors();
			
			}
		
	}
	
	public function deleteRegion($id)
	{
		$images = $this->adminModel->select('regions','image,thumb_image,thumb_overlay','reg_id',$id,false);
		$delete = $this->adminModel->delete('regions','reg_id',$id*1);
		if($delete)
		{
			@unlink('images/admin/regions/'.$images->image);
			@unlink('images/admin/regions/'.$images->thumb_image);
			@unlink('images/admin/regions/'.$images->thumb_overlay);
			$this->session->set_flashdata("success", "<div class='text-success'>Region deleted successfully.</div>");
			redirect("Admin/Regions");
		}
		else
		{
			$this->session->set_flashdata("danger", "<div class='text-danger'>Region deletion failed. Please try again.</div>");
			redirect("Admin/Regions");
		}
		
	}
	
	
	public function regionSlider($reg_name,$reg_id)
	{
		$data['slider_data'] = $this->adminModel->select('regions_slider','','reg_id',$reg_id,true);
		$data['reg_id'] = $reg_id;
		$data['title'] =$reg_name;
		$data['region'] = true;
		$data['sub_title'] = "Slides";
		$data['page'] = 'Admin/regionSlider';
		$data['link'] = "Admin/Regions/sliderForm/".$reg_name."/".$reg_id;
		$this->load->view("Admin/template",$data);
		
	}
	
	
	public function sliderForm($reg_name,$reg_id,$slide_id=0)
	{
		if($slide_id == 0)
		{
			$data['title'] = $reg_name;
			$data['action'] = "Admin/Regions/insertSlide/".$reg_name."/".$reg_id;
			$data['page'] = 'Admin/sliderForm';
			$data['button'] = "Add";
			$this->load->view("Admin/template",$data);
		}
		else
		{
			$data['reg_id'] = $reg_id;
			$data['title'] = $reg_name;
			$data['action'] = "Admin/Regions/updateSlide/".$reg_name."/".$reg_id."/".$slide_id;
			$data['slider_data'] = $this->adminModel->select('regions_slider','','id',$slide_id*1,false);
			$data['page'] = 'Admin/sliderForm';
			$data['button'] = "Update";
			$this->load->view("Admin/template",$data);
		}
	}
	
	public function insertSlide($reg_name,$reg_id)
	{
		$reg_name = urldecode($reg_name);
		
		$this->form_validation->set_rules("heading", "Heading", "trim|required");
		$this->form_validation->set_rules("description", "Description", "trim|required");
		$this->form_validation->set_rules("link", "Link", "trim|required|callback_url_filter");
		$this->form_validation->set_rules("status","Status", "trim");
		
		if(empty($_FILES['image']['name']))
		{
			$this->form_validation->set_rules('image', 'Image', 'trim|required');
		}
		
		$this->form_validation->set_message('url_filter','Please enter a valid link');
		if($this->form_validation->run())
		{
			$config['upload_path']          = './images/admin/main_slider/';
			$config['allowed_types']        = 'jpg|png';
			$config['max_size']             = 1024;
			$this->upload->initialize($config);
			if ($this->upload->do_upload('image'))
			{
				$upload_data = $this->upload->data();
				
				$image = $upload_data['file_name'];
				
				$heading = $this->input->post('heading');
				$description = $this->input->post('description');
				$link = $this->input->post('link');
				$status = $this->input->post('status');
				
				$data = array('reg_id'=>$reg_id,'heading'=>$heading,'description'=>$description,'link'=>$link,'image'=>$image,'status'=>$status);
				$insert = $this->adminModel->insert('regions_slider',$data);
				if($insert)
				{
					$this->session->set_flashdata("success", "<div class='text-success'>".$reg_name." slide inserted successfully.</div>");
					redirect("Admin/Regions/regionSlider/".$reg_name."/".$reg_id);
					
				}
				else
				{
					$this->session->set_flashdata("danger", "<div class='text-danger'>".$reg_name." slide insertion failed. Please try again.</div>");
					redirect("Admin/Regions/regionSlider/".$reg_name."/".$reg_id);
				}				
			}
			else
			{
				$data['title'] = $reg_name;
				$data['action'] = "Admin/Regions/insertSlide/".$reg_name."/".$reg_id;
				$data['error'] = array('error' => $this->upload->display_errors());
				$data['page'] = 'Admin/sliderForm';
				$data['button'] = "Add";
				$this->load->view("Admin/template",$data);
				
			}
			
		}
		else
		{
			$data['title'] = $reg_name;
			$data['action'] = "Admin/Regions/insertSlide/".$reg_name."/".$reg_id;
			$data['error'] = array('error' => $this->upload->display_errors());
			$data['page'] = 'Admin/sliderForm';
			$data['button'] = "Add";
			$this->load->view("Admin/template",$data);
			validation_errors();
		}

	}


	public function updateSlide($reg_name,$reg_id,$slide_id)
	{
		$reg_name = urldecode($reg_name);
		$this->form_validation->set_rules("heading", "Heading", "trim|required");
		$this->form_validation->set_rules("description", "Description", "trim|required");
		$this->form_validation->set_rules("link", "Link", "trim|required|callback_url_filter");
		$this->form_validation->set_rules("status","Status", "trim");
		
		$this->form_validation->set_message('url_filter','Please enter a valid link');
		if($this->form_validation->run())
		{
			if(!empty($_FILES['image']['name']))
			{
				$config['upload_path']          = './images/admin/main_slider/';
				$config['allowed_types']        = 'jpg|png';
				$config['max_size']             = 1024;
				$this->upload->initialize($config);
				if ($this->upload->do_upload('image'))
				{
					$upload_data = $this->upload->data();
					$image = $upload_data['file_name'];
				}
				else
				{
					$data['error'] = array('error' => $this->upload->display_errors());
					$data['action'] = "Admin/Regions/updateSlide/".$reg_name."/".$reg_id."/".$slide_id;
					$data['page'] = 'Admin/sliderForm';
					$data['button'] = "Update";
					$this->load->view('Admin/template',$data);
				}
			}
			else
			{
				$image = "";
			}
			$heading = $this->input->post('heading');
			$description = $this->input->post('description');
			$link = $this->input->post('link');
			$status = $this->input->post('status');
			
			$data = array('heading'=>$heading,'description' => $description,'link'=>$link,'status'=>$status);
			if(!empty($image))
			{
				$data['image']=$image;
			}
			$update = $this->adminModel->update('regions_slider',$data,'id',$slide_id*1);
			
			if($update)
			{
				$this->session->set_flashdata("success", "<div class='text-success'>".$reg_name." slide updated successfully.</div>");
				redirect("Admin/Regions/regionSlider/".$reg_name."/".$reg_id);
			}
			else
			{
				$this->session->set_flashdata("danger", "<div class='text-danger'>".$reg_name." slide updation failed. Please try again.</div>");
				redirect("Admin/Regions/sliderForm/".$reg_name."/".$reg_id."/".$slide_id);
			}							
		}
		else
		{
			$data['title'] = $reg_name;
			$data['button'] = "Update";
			$data['action'] = "Admin/Regions/updateSlide/".$reg_name."/".$reg_id."/".$slide_id;
			$data['page'] = 'Admin/sliderForm';
			$this->load->view("Admin/template",$data);
			validation_errors();
		}
		
	}
	
	
	public function deleteSlide($reg_name,$reg_id,$slide_id)
	{
		$image = $this->adminModel->select('regions_slider','image','id',$slide_id,false);
		
		$delete = $this->adminModel->delete('regions_slider','id',$slide_id*1);
		
		if($delete)
		{
			@unlink('images/admin/regions/'.$image->image);
			$this->session->set_flashdata("success", "<div class='text-success'>Slide deleted successfully.</div>");
			redirect("Admin/Regions/regionSlider/".$reg_name."/".$reg_id);
		}
		else
		{
			$this->session->set_flashdata("danger", "<div class='text-danger'>Slide deletion failed. Please try again.</div>");
			redirect("Admin/Regions/regionSlider/".$reg_name."/".$reg_id);
		}							
	
	}

	
	
	

/*--------------------------------------------------------- Region Functions End---------------------------------------------------*/

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


