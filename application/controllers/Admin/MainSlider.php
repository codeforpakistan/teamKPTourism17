<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainSlider extends CI_Controller {

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
		$data['slider_data'] = $this->adminModel->select('main_slider','','',0,true);
		$data['title'] = "Main Slider";
		$data['sub_title'] = "Slides";
		$data['page'] = 'Admin/slider';
		$this->load->view("Admin/template",$data);
	}


/*--------------------------------------------------------- MAIN SLIDER Functions Starts---------------------------------------------------*/
	
	
	public function sliderForm($id=0)
	{
		if($id == 0)
		{
			$data['title'] = "Main Slider";
			$data['action'] = "Admin/MainSlider/insertSlide/";
			$data['page'] = 'Admin/sliderForm';
			$data['button'] = "Add";
			$this->load->view("Admin/template",$data);
		}
		else
		{
			$data['title'] = "Main Slider";
			$data['action'] = "Admin/MainSlider/updateSlide/".$id;
			$data['slider_data'] = $this->adminModel->select('main_slider','','id',$id*1,false);
			$data['page'] = 'Admin/sliderForm';
			$data['button'] = "Update";
			$this->load->view("Admin/template",$data);
		}
	}
	
	public function insertSlide()
	{
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
				$description = htmlentities($this->input->post('description'));
				$link = $this->input->post('link');
				$status = $this->input->post('status');
				
				$data = array('heading'=>$heading,'description'=>$description,'link'=>$link,'image'=>$image,'status'=>$status);
				$insert = $this->adminModel->insert('main_slider',$data);
				
				if($insert)
				{
					$this->session->set_flashdata("success", "<div class='text-success'>Slide Inserted Successfully.</div>");
					redirect("Admin/MainSlider/sliderForm/");
				}
				else
				{
					$this->session->set_flashdata("danger", "<div class='text-danger'>Slide Insertion Failed. Please try again.</div>");
					redirect("Admin/MainSlider/sliderForm/");
				}				
			}
			else
			{
				$data['title'] = "Main Slider";
				$data['error'] = array('error' => $this->upload->display_errors());
				$data['action'] = "Admin/MainSlider/insertSlide/";
				$data['page'] = 'Admin/sliderForm';
				$data['button'] = "Add";
				$this->load->view('Admin/template',$data);	
			}
			
		}
		else
		{
		  $data['title'] = "Main Slider";
		  $data['button'] = "Add";
		  $data['action'] = "Admin/MainSlider/insertSlide/";
		  $data['page'] = 'Admin/sliderForm';
		  $this->load->view("Admin/template",$data);
		  validation_errors();
			
		}

	}


	public function updateSlide($id)
	{
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
					$data['action'] = "Admin/MainSlider/updateSlide/".$id."/".$type;
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
			$description = htmlentities($this->input->post('description'));
			$link = $this->input->post('link');
			$status = $this->input->post('status');
			
			$data = array('heading'=>$heading,'description' => $description,'link'=>$link,'status'=>$status);
			if(!empty($image))
			{
				$data['image']=$image;
			}
			
			$update = $this->adminModel->update('main_slider',$data,'id',$id*1);
			
			if($update)
			{
				$this->session->set_flashdata("success", "<div class='text-success'>Slide Updated Successfully.</div>");
				redirect("Admin/MainSlider/");
			}
			else
			{
				$this->session->set_flashdata("danger", "<div class='text-danger'>Slide Updation Failed. Please try again.</div>");
				redirect("Admin/MainSlider/sliderForm/".$id);
			}							
		}
		else
		{
			$data['title'] = "Main Slider";
			$data['button'] = "Update";
			$data['action'] = "Admin/MainSlider/updateSlide/".$id;
			$data['page'] = 'Admin/sliderForm';
			$this->load->view("Admin/template",$data);
			validation_errors();
		}
		
	}
		
	public function deleteSlide($id)
	{
		$image = $this->adminModel->select('main_slider','image','id',$id,false);
		$delete = $this->adminModel->delete('main_slider','id',$id*1);
		if($delete)
		{
			@unlink('images/admin/main_slider/'.$image->image);
			$this->session->set_flashdata("success", "<div class='text-success'>Slide deleted successfully.</div>");
			redirect("Admin/MainSlider/");
		}
		else
		{
			$this->session->set_flashdata("danger", "<div class='text-danger'>Slide deletion failed. Please try again.</div>");
			redirect("Admin/MainSlider/");
		}							
	
	}
	

/*--------------------------------------------------------- MAIN SLIDER Functions Ends---------------------------------------------------*/

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
