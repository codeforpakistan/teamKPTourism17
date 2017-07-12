<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EventsTours extends CI_Controller {

	/*
	 *
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
	 *
	 */
	 
	public function __construct()
	{
		parent::__construct();
		$this->load->model('eventsModel');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
	}
	 
	public function index($reg_id=0,$event_id=0)
	{
		if($reg_id == 0  and $event_id == 0)
		{
			$data['region_data'] = $this->eventsModel->select('regions','reg_id,name','',0,true);
			$data['category_data'] = $this->eventsModel->select('category','cat_id,name','',0,true);
			$data['action'] = "Admin/EventsTours/insertEvent/";
			$data['title'] = "Region Events/Tours";
			$data['button'] = "Add";
			$data['page'] = 'Admin/eventForm';
			$this->load->view("Admin/template",$data);
		}
		else{
			$data['reg_id'] = $reg_id; 
			$data['region_data'] = $this->eventsModel->select('regions','reg_id,name','',0,true);
			$data['category_data'] = $this->eventsModel->select('category','cat_id,name','',0,true);
			$data['event_data'] = $this->eventsModel->select('events','','event_id',$event_id,false);
			$data['event_cat'] = $this->eventsModel->getSpotCat($data['event_data']->type);
			$data['type_data'] = $this->eventsModel->select('type','type_id,name','cat_id',$data['event_cat'][0]['cat_id'],true);
			$data['action'] = "Admin/EventsTours/updateEvent/".$reg_id."/".$event_id;
			$data['title'] = "Update Event";
			$data['button'] = "Update";
			$data['page'] = 'Admin/eventForm';
			$this->load->view("Admin/template",$data);
			
			}
	}
	
	public function insertEvent()
	{
		$this->form_validation->set_rules("reg_id", "Region", "trim|required");
		$this->form_validation->set_rules("title", "Event title", "trim|required");
		$this->form_validation->set_rules("cost", "Cost", "trim|required");
		$this->form_validation->set_rules("event_type", "Event type", "trim|required");
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
			$config['upload_path']          = './images/admin/events/';
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
				$data['region_data'] = $this->eventsModel->select('regions','reg_id,name','',0,true);
				$data['category_data'] = $this->eventsModel->select('category','cat_id,name','',0,true);
				$data['action'] = "Admin/EventsTours/insertEvent/";
				$data['title'] = "Regions Events/Tours";
				$data['button'] = "Add";
				$data['page'] = 'Admin/eventForm';
				$this->load->view("Admin/template",$data);
				
			}
			
			$reg_id = html_escape($this->input->post('reg_id'));
			$title = html_escape($this->input->post('title'));
			$cost = html_escape($this->input->post('cost'));
			$event_type = html_escape($this->input->post('event_type'));
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
			
			$data = array('reg_id'=> $reg_id,'title'=>$title,'cost'=>$cost,'event_type'=>$event_type,'address'=>$address,'contact'=>$contact,'email'=>$email,'website'=>$website,'open_timing'=>$open_timing,'close_timing'=>$close_timing,'rating'=>$rating,'latitude'=>$latitude,'longitude'=>$longitude,'header_image'=>$header_image,'description'=>$description,'type'=>$type,'status'=> $status);
			
			$insert = $this->eventsModel->insert('events',$data);
			if($insert)
			{
				$this->session->set_flashdata("success", "<div class='text-success'>Event/Tour inserted successfully.</div>");
				redirect("Admin/EventsTours/");
			}
			else
			{
				$this->session->set_flashdata("danger", "<div class='text-danger'>Event/Tour insertion failed. Please try again.</div>");
				redirect("Admin/EventsTours/");
			}
			
			
		}
		else
		{
			$data['region_data'] = $this->eventsModel->select('regions','reg_id,name','',0,true);
			$data['category_data'] = $this->eventsModel->select('category','cat_id,name','',0,true);
			$data['type_data'] = $this->eventsModel->select('type','type_id,name','cat_id',$this->input->post('category'),true);
			$data['action'] = "Admin/EventsTours/insertEvent/";
			$data['title'] = "Region Events/Tours";
			$data['button'] = "Add";
			$data['page'] = 'Admin/eventForm';
			$this->load->view("Admin/template",$data);
			validation_errors();
		}
		
	}
	
	
	public function updateEvent($reg_id,$event_id)
	{
		
		$this->form_validation->set_rules("reg_id", "Region", "trim|required");
		$this->form_validation->set_rules("title", "Event title", "trim|required");
		$this->form_validation->set_rules("cost", "Cost", "trim|required");
		$this->form_validation->set_rules("event_type", "Event type", "trim|required");
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
			$config['upload_path']          = './images/admin/events/';
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
					$data['region_data'] = $this->eventsModel->select('regions','reg_id,name','',0,true);
					$data['category_data'] = $this->eventsModel->select('category','cat_id,name','',0,true);
					$data['event_data'] = $this->eventsModel->select('events','','event_id',$event_id,false);
					$data['event_cat'] = $this->eventsModel->getSpotCat($data['event_data']->type);
					$data['type_data'] = $this->eventsModel->select('type','type_id,name','cat_id',$data['event_cat'][0]['cat_id'],true);
					$data['action'] = "Admin/EventsTours/updateEvent/".$reg_id."/".$sight_id;
					$data['title'] = "Update Event/Tour";
					$data['button'] = "Update";
					$data['page'] = 'Admin/eventForm';
					$this->load->view("Admin/template",$data);
					
				}
			
			}
			else{
				$header_image = "";
				}
			
		
			$reg_id = html_escape($this->input->post('reg_id'));
			$title = html_escape($this->input->post('title'));
			$cost = html_escape($this->input->post('cost'));
			$event_type = html_escape($this->input->post('event_type'));
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
			
			$data = array('reg_id'=> $reg_id,'title'=>$title,'cost'=>$cost,'event_type'=>$event_type,'address'=>$address,'contact'=>$contact,'email'=>$email,'website'=>$website,'open_timing'=>$open_timing,'close_timing'=>$close_timing,'rating'=>$rating,'latitude'=>$latitude,'longitude'=>$longitude,'description'=>$description,'type'=>$type,'status'=> $status);
			
			if(!empty($header_image))
			{
				$data['header_image'] = $header_image;
			}
			
			$update = $this->eventsModel->update('events',$data,'event_id',$event_id);
			if($update)
			{
				$this->session->set_flashdata("success", "<div class='text-success'>Event Updated Successfully.</div>");
				redirect("Admin/EventsTours/Events/".$reg_id);
			}
			else
			{
				$this->session->set_flashdata("danger", "<div class='text-danger'>Event Updation Failed. Please try again.</div>");
				redirect("Admin/EventsTours/");
			}
		}
		else
		{
			if(!empty($this->input->post('reg_id')))
			{
				$reg_id = html_escape($this->input->post('reg_id'));
			}
			
			$data['reg_id'] = $reg_id; 
			$data['region_data'] = $this->eventsModel->select('regions','reg_id,name','',0,true);
			$data['category_data'] = $this->eventsModel->select('category','cat_id,name','',0,true);
			if(!empty($this->input->post('category')))
			{
				$event_cat = $this->input->post('category');
			}
			else{
				$event_cat = 0;
				}
			$data['type_data'] = $this->eventsModel->select('type','type_id,name','cat_id',$event_cat,true);
			$data['action'] = "Admin/EventsTours/updateEvent/".$reg_id."/".$sight_id;
			$data['title'] = "Update Event";
			$data['button'] = "Update";
			$data['page'] = 'Admin/eventForm';
			$this->load->view("Admin/template",$data);
			validation_errors();
		}
	}
	
	
	public function Events($reg_id)
	{
		$data['events_data'] = $this->eventsModel->getRegEvents($reg_id);
		$region_name = $this->eventsModel->select('regions','name','reg_id',$reg_id,true);
		$data['region_name']  = $region_name[0];
		$data['reg_id'] = $reg_id;
		$data['page'] = 'Admin/events';
		$this->load->view("Admin/template",$data);
	
	}
	
	
	public function deleteEvent($reg_id,$event_id)
	{
		$delete = $this->eventsModel->delete('events','event_id',$event_id*1);
		
		if($delete)
		{
			$this->session->set_flashdata("success", "<div class='text-success'>Event deleted successfully.</div>");
			redirect("Admin/EventsTours/Events/".$reg_id);
		}
		else
		{
			$this->session->set_flashdata("danger", "<div class='text-danger'>Event deletion failed. Please try again.</div>");
			redirect("Admin/EventsTours/Events/".$reg_id);
		}
		
	}
	
	
	public function eventsGallery($event_id)
	{
		$data['event_id'] = $event_id;
		$data['gallery_data'] = $this->eventsModel->select('events_gallery','','event_id',$event_id,true);
		$data['event_name'] = $this->eventsModel->select('events','title','event_id',$event_id,true);
		$data['page'] = 'Admin/eventGallery';
		$this->load->view("Admin/template",$data);
	}
	
	private $_uploaded;
	
	public function addGallery($event_id)
	{	
			$this->form_validation->set_rules('images[]','Image','callback_fileupload_check['.$event_id.']');
			
			if($this->input->post())
			{
		 
			  if($this->form_validation->run())
			  {
				$a=0;
				$not_inserted = array();
				foreach($this->_uploaded as $key=>$value)
				{
					$data = array('event_id'=>$event_id,'image'=>$value['file_name']);
					$insert = $this->eventsModel->insert('events_gallery',$data);
					if($insert == false)
					{
						$not_inserted[$a] = $value['file_name'];
					}
					$a++;
				}
				$data['not_inserted'] = $not_inserted;
				$data['event_id'] = $event_id;
				$data['gallery_data'] = $this->eventsModel->select('events_gallery','','event_id',$event_id,true);
				$data['event_name'] = $this->eventsModel->select('events','title','event_id',$event_id,true);
				$this->session->set_flashdata("success", "<div class='text-success'>Images added to gallery successfully.</div>");
				$data['page'] = 'Admin/eventGallery';
				$this->load->view("Admin/template",$data);
			  }
			}
			else{
				$data['event_id'] = $event_id;
				$data['gallery_data'] = $this->eventsModel->select('events_gallery','','event_id',$event_id,true);
				$data['event_name'] = $this->eventsModel->select('events','title','event_id',$event_id,true);
				$data['page'] = 'Admin/eventGallery';
				$this->load->view("Admin/template",$data);
				}

						
		
	}
	

 
  public function fileupload_check($value,$event_id)
  {
	$number_of_files = sizeof($_FILES['images']['tmp_name']);
	if($number_of_files < 2)
	{
		$data['event_id'] = $event_id;
		$data['gallery_data'] = $this->eventsModel->select('events_gallery','','event_id',$event_id,true);
		$data['event_name'] = $this->eventsModel->select('events','title','event_id',$event_id,true);
		$this->session->set_flashdata("danger", "<div class='text-danger'>Please select atleaset one image.</div>");
		redirect('Admin/EventsTours/eventsGallery/'.$event_id);
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
    $config['upload_path'] = './images/admin/events/';
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
	

	public function deleteEventImage($event_id,$image_id)
	{
		$delete = $this->eventsModel->delete('events_gallery','id',$image_id*1);
		
		if($delete)
		{
			$this->session->set_flashdata("success", "<div class='text-success'>Event gallery image deleted successfully.</div>");
			redirect("Admin/EventsTours/eventsGallery/".$event_id);
		}
		else
		{
			$this->session->set_flashdata("danger", "<div class='text-danger'>Event gallery image deletion failed. Please try again.</div>");
			redirect("Admin/EventsTours/eventsGallery/".$event_id);
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


