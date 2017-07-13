<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
		$this->load->model('userModel');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
	}
	 
	public function index()
	{
		$data['page'] = "User/home";
		$this->load->view("User/template", $data);
	}

	public function discover()
	{
		$order_by = 'name asc';
		
		$where = array('status'=>'1');
		$data['slider'] = $this->userModel->select('main_slider','',$where,'','',true); /* $table,$select,$where,$order_by,$limit,$all */
		unset($where);
		
		$where = array('is_famous'=>'1','status'=>'1');
		$data['famous_regions'] = $this->userModel->select('regions','',$where,$order_by,'',true); /* $table,$select,$where,$order_by,$limit,$all */
		unset($where);
		
		$where = array('status'=>'1');
		$data['categories'] = $this->userModel->select('category','cat_id,name',$where,$order_by,'',true); /* $table,$select,$where,$order_by,$limit,$all */
		unset($where);
		
		$where = array('status'=>'1');
		$data['types'] = $this->userModel->select('type','type_id,name',$where,$order_by,'',true); /* $table,$select,$where,$order_by,$limit,$all */
		unset($where);
		
		$where = array('status'=>'1');
		$data['regions'] = $this->userModel->select('regions','reg_id,name',$where,$order_by,'',true); /* $table,$select,$where,$order_by,$limit,$all */
		unset($where);
		
		$where = array('is_famous'=>'0','status'=>'1');
		$data['other_regions'] = $this->userModel->select('regions','',$where,$order_by,'',true); /* $table,$select,$where,$order_by,$limit,$all */
		$data['page'] = "User/discover";
		$this->load->view("User/template", $data);
		
	}
	
	public function regOrder()
	{
		$search_type = html_escape($this->input->post('search_type'));
		switch($search_type)
		{
			case "name":
			$order_by = "name asc";
			break;
			case "rating":
			$order_by = "rating desc";
			break;
			case "elevation":
			$order_by = "elevation desc";
			break;
		}
		if(empty($this->input->post('other')))
		{
			$where = array('is_famous'=>'1','status'=>'1');
		}
		else{
			$where = array('is_famous'=>'0','status'=>'1');
			}
		$data= $this->userModel->select('regions','',$where,$order_by,'',true); /* $table,$select,$where,$order_by,$limit,$all */
		
		foreach($data as $key=>$value)
		{
		$a = 1;
		$dots = (strlen($value['description']) > 150)? " ..." : "";
			if(empty($this->input->post('other')))
			{
				echo '<div class="col-lg-4 col-sm-6 col-xs-12 text-center">
									<div class="zoom">
										<div class="famous_regions_div region-'.$a.'">
											<img class="img img-responsive image_normal auto-margin" src="images/admin/regions/'.$value["thumb_image"].'" data-pin-nopin="true">
											<img class="img img-responsive image_hover auto-margin" src="images/admin/regions/'.$value['thumb_overlay'].'">	
											<div class="has-feedback">										
												<a id="'.$value["name"].'" class="region-select" href="detail/'.$value['reg_id'].'">
													<h2 class="color-text">'.$value['name'].'</h2>
													<p class="region-description color-text">'.$value['location'].'</p>
													<p>
													 '.html_entity_decode(substr($value['description'],0,150)).$dots.' 
													</p>
													<button class="btn btn-primary auto-margin">EXPLORE</button>
												</a>
											</div>
										</div>
									</div>
								</div>';
			
			}
			else{
				
				echo '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div id="activity-'.$a.'" class="other_activities_box">
									<a href="'.base_url().'detail/'.$value['reg_id'].'">
										<!-- LEFT IMAGE DIV -->
										<div class="col-xs-6">
											<img class="img" src="images/admin/regions/'.$value['image'].'" />
										</div>	
										<!-- LEFT TEXT DIV -->
										<div class="col-xs-6">
											<h4 class="color-black">'.$value['name'].'</h4>
											<p class="color">'.$value['location'].'</p>
										</div>
									</a>
								</div>	
							</div>';
				
				}
		}
	} 
	
	
	public function getCatType()
	{
		$cat_id = html_escape($this->input->post('cat_id'));
		if(!empty($cat_id))
		{
			$order_by = "";
			$where = array('cat_id'=>$cat_id);
			$limit = "";
			$catType = $this->userModel->select('type','type_id,name',$where,$order_by,$limit,true);
			if($catType !== false)
			{
				$output = "";
				$output .= "<option value=''> -- Select Type -- </option>"; 
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
	
	
	
	public function details($reg_id)
	{
		
		$where = array('reg_id'=>$reg_id,'status'=>'1');
		$data['region_data'] = $this->userModel->select('regions','',$where,'','',false); 
		unset($where);
		$where = array('reg_id'=>$reg_id,'status'=>'1');
		$data['slider'] = $this->userModel->select('regions_slider','',$where,'','',true); /* $table,$select,$where,$order_by,$limit,$all */
		unset($where);
		$where = array('reg_id'=>$reg_id,'status'=>'1');
		$data['region_activities'] = $this->userModel->select('activities','',$where,'','',true); /* $table,$select,$where,$order_by,$limit,$all */
		unset($where);
		$where = array('reg_id'=>$reg_id,'status'=>'1');
		$data['sights'] = $this->userModel->select('sights','',$where,'','',true); /* $table,$select,$where,$order_by,$limit,$all */
		unset($where);
		$where = array('reg_id'=>$reg_id,'status'=>'1');
		$data['restaurant'] = $this->userModel->select('restaurant','',$where,'','',true); /* $table,$select,$where,$order_by,$limit,$all */
		unset($where);
		$where = array('reg_id'=>$reg_id,'status'=>'1');
		$data['events'] = $this->userModel->select('events','',$where,'','',true); /* $table,$select,$where,$order_by,$limit,$all */

		$data['page'] = "User/details";
		$this->load->view("User/template", $data);
		
	}
	
	public function activities($act_id)
	{
		$this->session->set_userdata('act_id',$act_id);
		$where = array('act_id'=>$act_id,'status'=>'1');
		$data['activity_spots'] = $this->userModel->select('activity_spots','spot_id,name,contact,address,website,header_image',$where,'','',true);
		unset($where);
		$where = array('act_id'=>$act_id,'status'=>'1');
		$data['act_image'] = $this->userModel->select('activities','image',$where,'','',false);
		$data['page'] = "User/activities";
		$this->load->view("User/template", $data);
	}
	
	public function sight($sight_id)
	{
		$data['folder'] = "sights";
		$where = array('sight_id'=>$sight_id);
		$data['gallery'] = $this->userModel->select('sights_gallery','image',$where,'','',true);
		unset($where);
		$where = array('sight_id'=>$sight_id,'status'=>'1');
		$data['data'] = $this->userModel->select('sights','',$where,'','',false);
		$data['page'] = "User/activity";
		$this->load->view("User/template", $data);
	}
	
	public function activity($spot_id)
	{
		$data['folder'] = "spots";		
		$where = array('spot_id'=>$spot_id);
		$data['gallery'] = $this->userModel->select('spots_gallery','image',$where,'','',true);
		unset($where);
		$act_id = $this->session->userdata('act_id');
		$where = array('act_id'=>$act_id,'status'=>'1','spot_id !='=>$spot_id);
		$data['random_spots'] = $this->userModel->select('activity_spots','spot_id,name,address,header_image',$where,'rand()','3',true);
		unset($where);
		$where = array('spot_id'=>$spot_id,'status'=>'1');
		$data['data'] = $this->userModel->select('activity_spots','',$where,'','',false);
		$data['page'] = "User/activity";
		$this->load->view("User/template", $data);
	}
	
	public function restaurant($rest_id)
	{
		$data['folder'] = "restaurant";		
		$where = array('rest_id'=>$rest_id);
		$data['gallery'] = $this->userModel->select('restaurant_gallery','image',$where,'','',true);
		unset($where);
		$where = array('rest_id'=>$rest_id,'status'=>'1');
		$data['data'] = $this->userModel->select('restaurant','',$where,'','',false);
		$data['page'] = "User/activity";
		$this->load->view("User/template", $data);
	}
	
	public function events($event_id)
	{
		$data['folder'] = "events";		
		$where = array('event_id'=>$event_id);
		$data['gallery'] = $this->userModel->select('events_gallery','image',$where,'','',true);
		unset($where);
		$where = array('event_id'=>$event_id,'status'=>'1');
		$data['data'] = $this->userModel->select('events','',$where,'','',false);
		$data['page'] = "User/activity";
		$this->load->view("User/template", $data);
	}
	
	public function visas($reg_id)
	{
		$data['page'] = "User/survivalguide";
		$this->load->view("User/template", $data);
	}
	
	public function besttime($reg_id)
	{
		$data['page'] = "User/survivalguide";
		$this->load->view("User/template", $data);
	}
	
	public function cost($reg_id)
	{
		$data['page'] = "User/survivalguide";
		$this->load->view("User/template", $data);
	}
	
	public function health($reg_id)
	{
		$data['page'] = "User/survivalguide";
		$this->load->view("User/template", $data);
	}
	
	public function search()
	{
		$category = html_escape($this->input->post('sel1'));
		$type = html_escape($this->input->post('sel2'));
		$region = html_escape($this->input->post('sel3'));
		//$data['search_data'] = $this->userModel->search($category,$type,$region); /* $table,$select,$where,$order_by,$limit,$all */	
		/*if(!empty($category) and !empty($type) and !empty($region))
		{
			$data[''] = $this->userModel->select();		
		}
		*/	
		$data['page'] = "User/search";
		$this->load->view("User/template", $data);
	}
	
	public function nameSearch()
	{
		$keyword = html_escape($this->input->post('keyword'));
		if(!empty($keyword))
		{
			$order_by = "";
			$where = array('is_famous'=>'0');
			$limit = "";
			$result = $this->userModel->nameSearch($where,$keyword);
			
			$a = 1;
			if(!empty($result))
			{
				foreach($result as $key=>$value)
				{
				echo'
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div id="activity-'.$a.'" class="other_activities_box">
						<a href="'.base_url().'detail/'.$value['reg_id'].'">
							<!-- LEFT IMAGE DIV -->
							<div class="col-xs-6">
								<img class="img" src="images/admin/regions/'.$value['image'].'" />
							</div>	
							<!-- LEFT TEXT DIV -->
							<div class="col-xs-6">
								<h4 class="color-black">'.$value['name'].'</h4>
								<p class="color">'.$value['location'].'</p>
							</div>
						</a>
					</div>	
				</div>';
				$a++;
				}
			}
			else{
				echo "No Search results Found";
				}
		}
		else{
			echo "No Search results Found";
			}
		
	}
	
/*--------------------------------------------------------- Genreal Functions End---------------------------------------------------*/
	
	
}


