<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filters extends CI_Controller {

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
		$data['title'] = "Filters";
		$data['category_data'] = $this->adminModel->select('category','','',0,true);
		$data['type_data'] = $this->adminModel->select('type','','',0,true);
		$data['page'] = 'Admin/filter';
		$this->load->view("Admin/template",$data);
	}


/*--------------------------------------------------------- Regions Functions Start---------------------------------------------------*/

	public function categoryForm($id=0)
	{
		if($id == 0)
		{
			$data['title'] = "Add Category";
			$data['action'] = "Admin/Filters/insertCategory/";
			$data['page'] = 'Admin/categoryForm';
			$data['button'] = "Add";
			$this->load->view("Admin/template",$data);
		}
		else
		{
			$data['title'] = "Update Category";
			$data['action'] = "Admin/Filters/updateCategory/".$id;
			$data['category_data'] = $this->adminModel->select('category','','cat_id',$id*1,false);
			$data['page'] = 'Admin/categoryForm';
			$data['button'] = "Update";
			$this->load->view("Admin/template",$data);
		}
	}

	public function insertCategory()
	{
		$this->form_validation->set_rules("name", "Name", "trim|required");
		$this->form_validation->set_rules("status","Status", "trim");
		if($this->form_validation->run())
		{
			$name = html_escape($this->input->post('name'));
			$status = $this->input->post('status');
			
			$data = array('name'=>$name,'status'=>$status);
			
			$insert = $this->adminModel->insert('category',$data);
			if($insert)
			{
				$this->session->set_flashdata("success", "<div class='text-success'>Category Inserted Successfully.</div>");
				redirect("Admin/Filters/");
			}
			else
			{
				$this->session->set_flashdata("danger", "<div class='text-danger'>Category Insertion Failed. Please try again.</div>");
				redirect("Admin/Filters/categoryForm/");
			}
			
			
		}
		else{
			$data['title'] = "Add Category";
			$data['action'] = "Admin/Filters/insertCategory/";
			$data['page'] = 'Admin/categoryForm';
			$data['button'] = "Add";
			$this->load->view("Admin/template",$data);
			validation_errors();
			
			}
		
	}
	
	
	public function updateCategory($id)
	{
		$this->form_validation->set_rules("name", "Name", "trim|required");
		$this->form_validation->set_rules("status","Status", "trim");
				
		if($this->form_validation->run())
		{
			$name = html_escape($this->input->post('name'));
			$status = $this->input->post('status');
			
			$data = array('name'=>$name,'status'=>$status);
			
			$update = $this->adminModel->update('category',$data,'cat_id',$id);
			if($update)
			{
				$this->session->set_flashdata("success", "<div class='text-success'>Category Updated Successfully.</div>");
				redirect("Admin/Filters");
			}
			else
			{
				$this->session->set_flashdata("danger", "<div class='text-danger'>Category Updation Failed. Please try again.</div>");
				redirect("Admin/Filters/categroyForm/".$id);
			}
			
			
		}
		else{
			$data['title'] = "Update Category";
			$data['action'] = "Admin/Filters/updateCategory/".$id;
			$data['category_data'] = $this->adminModel->select('category','','cat_id',$id*1,false);
			$data['page'] = 'Admin/categoryForm';
			$data['button'] = "Update";
			$this->load->view("Admin/template",$data);
			validation_errors();
			
			}
		
	}
	
	public function deleteCategory($id)
	{
		$delete = $this->adminModel->delete('category','cat_id',$id*1);
		
		if($delete)
		{
			$this->session->set_flashdata("success", "<div class='text-success'>Category deleted successfully.</div>");
			redirect("Admin/Filters");
		}
		else
		{
			$this->session->set_flashdata("danger", "<div class='text-danger'>Category deletion failed. Please try again.</div>");
			redirect("Admin/Filters/");
		}
		
	}
	
	
	public function typeForm($id=0)
	{
		if($id == 0)
		{
			$data['category_data'] = $this->adminModel->select('category','cat_id,name','',0,true);
			$data['title'] = "Add Type";
			$data['action'] = "Admin/Filters/insertType/";
			$data['page'] = 'Admin/typeForm';
			$data['button'] = "Add";
			$this->load->view("Admin/template",$data);
		}
		else
		{
			$data['title'] = "Update Type";
			$data['action'] = "Admin/Filters/updateType/".$id;
			$data['category_data'] = $this->adminModel->select('category','cat_id,name','',0,true);
			$data['type_data'] = $this->adminModel->select('type','','type_id',$id*1,false);
			$data['page'] = 'Admin/typeForm';
			$data['button'] = "Update";
			$this->load->view("Admin/template",$data);
		}
	}

	public function insertType()
	{
		$this->form_validation->set_rules("cat_id", "Category", "trim|required");
		$this->form_validation->set_rules("name", "Name", "trim|required");
		$this->form_validation->set_rules("status","Status", "trim");
		if($this->form_validation->run())
		{
			$cat_id = html_escape($this->input->post('cat_id'));
			$name = html_escape($this->input->post('name'));
			$status = $this->input->post('status');
			
			$data = array('cat_id'=> $cat_id,'name'=>$name,'status'=>$status);
			
			$insert = $this->adminModel->insert('type',$data);
			if($insert)
			{
				$this->session->set_flashdata("success", "<div class='text-success'>Type Inserted Successfully.</div>");
				redirect("Admin/Filters/");
			}
			else
			{
				$this->session->set_flashdata("danger", "<div class='text-danger'>Type Insertion Failed. Please try again.</div>");
				redirect("Admin/Filters/typeForm/");
			}
			
			
		}
		else{
			$data['category_data'] = $this->adminModel->select('category','cat_id,name','',0,true);
			$data['title'] = "Add Type";
			$data['action'] = "Admin/Filters/insertType/";
			$data['page'] = 'Admin/typeForm';
			$data['button'] = "Add";
			$this->load->view("Admin/template",$data);
			validation_errors();
			
			}
		
	}
	
	
	public function updateType($id)
	{
		$this->form_validation->set_rules("cat_id", "Category", "trim|required");
		$this->form_validation->set_rules("name", "Name", "trim|required");
		$this->form_validation->set_rules("status","Status", "trim");
				
		if($this->form_validation->run())
		{
			$cat_id = html_escape($this->input->post('cat_id'));
			$name = html_escape($this->input->post('name'));
			$status = $this->input->post('status');
			
			$data = array('cat_id'=>$cat_id,'name'=>$name,'status'=>$status);
			
			$update = $this->adminModel->update('type',$data,'type_id',$id);
			if($update)
			{
				$this->session->set_flashdata("success", "<div class='text-success'>Type Updated Successfully.</div>");
				redirect("Admin/Filters");
			}
			else
			{
				$this->session->set_flashdata("danger", "<div class='text-danger'>Type Updation Failed. Please try again.</div>");
				redirect("Admin/Filters/typeForm/".$id);
			}
			
			
		}
		else{
			$data['title'] = "Update Type";
			$data['action'] = "Admin/Filters/updateType/".$id;
			$data['category_data'] = $this->adminModel->select('category','cat_id,name','',0,true);
			$data['type_data'] = $this->adminModel->select('type','','type_id',$id*1,false);
			$data['page'] = 'Admin/typeForm';
			$data['button'] = "Update";
			$this->load->view("Admin/template",$data);
			validation_errors();
			
			}
		
	}
	
	public function deleteType($id)
	{
		$delete = $this->adminModel->delete('type','type_id',$id*1);
		
		if($delete)
		{
			$this->session->set_flashdata("success", "<div class='text-success'>Type deleted successfully.</div>");
			redirect("Admin/Filters");
		}
		else
		{
			$this->session->set_flashdata("danger", "<div class='text-danger'>Type deletion failed. Please try again.</div>");
			redirect("Admin/Filters/");
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


