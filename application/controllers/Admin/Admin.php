<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		if(empty($this->session->userdata('username')))
		{
			$data['action'] = 'Admin/Admin/login';
			$this->load->view("Admin/login",$data);
		}
		else
		{
			$data['page'] = "Admin/dashboard";
			$this->load->view("Admin/template", $data);
		}
		
	}
/*--------------------------------------------------------- User Functions Start---------------------------------------------------*/	
	public function login()
	{	 
		$this->form_validation->set_rules('username' , 'Username' , 'required|trim');
		$this->form_validation->set_rules('password' , 'Password' , 'required');
		//$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		
		if($this->form_validation->run())
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$hashed_password = password_hash($this->input->post('password'),PASSWORD_BCRYPT,array('cost'=>12)); // password_hash() Php function. 
			$admin = $this->adminModel->validateLogin($username);
			if($admin !== false)
			{
				if(password_verify($password,$admin->password))
				{
					$name = $admin->name;
					$admin_id  = $admin->id;
					$username = $admin->username;
					$image = $admin->image;
					$post_title = $admin->post_title;
					$created = $admin->created;
					
					$this->session->set_userdata("username" , $username);
					$this->session->set_userdata("name" , $name);
					$this->session->set_userdata("admin_id" , $admin_id);
					$this->session->set_userdata("image" , $image);
					$this->session->set_userdata("post_title" , $post_title);
					$this->session->set_userdata("created" , $created);
					
					$data['page'] = "Admin/dashboard";
					$this->load->view("Admin/template", $data);                	
				}
				else
				{
					$this->session->set_flashdata("danger", " <div class='text-success'>Invalid Password !</div>");
					$data['action'] = 'Admin/Admin/login';
					$this->load->view("Admin/login",$data);
				}
			}
			else{
				$this->session->set_flashdata("danger", " <div class='text-danger'>Invalid Username !</div>");
				$data['action'] = 'Admin/Admin/login';
				$this->load->view("Admin/login",$data);
				}
			
		}
		else
		{
			$data['action'] = 'Admin/Admin/login';
			$this->load->view("Admin/login",$data);
			validation_errors();
		}
	}

	
	
	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->unset_userdata("admin_id");
		$this->session->set_flashdata("success", " <div class='alert alert-success'>Logout successful!</div>");
		$data['action'] = 'Admin/Admin/login';
		$this->load->view("Admin/login",$data);
	}
	
	public function adminInfo($admin_id)
	{
		$data['adminInfo'] = $this->adminModel->adminInfo($admin_id);
		$data['action'] = "Admin/Admin/updateProfile/".$admin_id;
		$data['page'] = 'Admin/profileForm';
		$this->load->view("Admin/template",$data);
		
	}
	
	public function updateProfile($admin_id)
	{
		$this->form_validation->set_rules("name", "Name", "trim|required");
		$this->form_validation->set_rules("username", "Username", "trim|required");
		$this->form_validation->set_rules("post_title", "Post Title", "trim|required");
		$this->form_validation->set_rules("image", "image", "trim");
		$this->form_validation->set_rules("password","Password", "trim");
		$this->form_validation->set_rules("c_password","Confirm Password", "trim|matches[password]");
		
		if($this->form_validation->run())
		{
			
			if(!empty($_FILES['image']['name']))
			{
				$config['upload_path']          = './images/admin/';
				$config['allowed_types']        = 'jpg|png';
				$config['max_size']             = 0;
				$this->upload->initialize($config);
				if ($this->upload->do_upload('image'))
				{
					$upload_data = $this->upload->data();
					$image = $upload_data['file_name'];
				}
				else
				{
					$data['error'] = array('error' => $this->upload->display_errors());
					$data['action'] = "Admin/Admin/updateProfile/".$admin_id;
					$data['page'] = 'Admin/profileForm';
					$this->load->view('Admin/template',$data);
				}
			}
			else{
				$image = "";
				}
			
			$name = $this->input->post('name');
			$username = $this->input->post('username');
			$post_title = $this->input->post('post_title');
			
			if(!empty($this->input->post('password')))
			{
				$password = $this->input->post('password');
				$encrypt_password = password_hash($password,PASSWORD_BCRYPT,array('cost'=>12));
			}
			else{
				$encrypt_password = "";
				}
			
			$update = $this->adminModel->updateProfile($admin_id,$name,$username,$post_title,$image,$encrypt_password);
			
			if($update)
			{
				$this->session->set_flashdata("success", "<div class='text-success'>Profile updated Successfully.</div>");
				redirect("Admin/Admin/adminInfo/".$admin_id);
				//$this->adminInfo($admin_id);
			}
			else
			{
				$this->session->set_flashdata("danger", "<div class='text-danger'>Profile Updation failed please try again.</div>");
				redirect("Admin/Admin/adminInfo/".$admin_id);
				//$this->adminInfo($admin_id);
			}
			
			
		}
		else
		{
			$data['adminInfo'] = $this->adminModel->adminInfo($admin_id);
			$data['action'] = "Admin/Admin/updateProfile/".$admin_id;
			$data['page'] = 'Admin/profileForm';
			$this->load->view("Admin/template",$data);
			validation_errors();
		}
		
		
	}
	
	
	
/*--------------------------------------------------------- User Functions Ends---------------------------------------------------*/	

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


