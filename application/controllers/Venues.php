<?php

/**
 * controllers/Venues.php
 * controller for Startup Venues
 * used to show how to do CRUD in CodeIgniter
 *
 * @package ITC260
 * @subpackage Forms

 * @author Lydia King, Anna Atiagina, Jenny Crimp
 * @author Alex, Spencer, Mith, Jeremiah, Marcus Price, Hannah Lee
 * @version 3.0 2016/06/14
 * @link
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see Venues_model.php
 * @see views/venues/index.php
 * @see views/venues/view.php
 * @see views/venues/add.php
 * @see views/venues/success.php
 * @todo none
 */


class Venues extends CI_Controller {
       /**
        * Constructor Loads default data into object
        *
        * Added in v3 - Result object
        *
        * @param none
        * @return void
        * @todo none
        */
       public function __construct()
       {
            //everything here is global to all methods in the controller
            parent::__construct();
            $this->load->model('Venues_model');
            $this->config->set_item("banner", "Global Customer Banner");
            $this->load->helper('form');
            $this->config->set_item('nav-active', 'Venues');//sets active class on all Venues children
       }

       /**
        * index function loads venues data from Venues/Model and allows you to view in venues/index
        *
        * @param none
        * @return void
        * @todo none
        */
      public function index()
      {
            $data['venues'] = $this->Venues_model->getVenues();
            $data['title'] = 'Venues';
            $this->load->view('venues/index', $data);
      }//end index()

    /**
     * view method allows you too view venues through venues/view.php
     *
     * @param none
     * @return void
     * @todo none
     */
     public function view($slug = NULL)
	   {
            $data['userId'] = $this->gig_model->get_session_id();
			$data['venue'] = $this->Venues_model->getVenues($slug);

			if (empty($data['venue']))
			{
					show_404();
			}

			$data['title'] = 'Venue';
			$this->load->view('venues/view', $data);
	   }//end view()

    /**
     * Shows for through the add.php page
     * Allows one to add info about venues
     * @param none
     * @return venues/success if form is validated correctly
     * @todo none
     */
    public function add()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Add a new Venue';

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('venues/add', $data);

        }
        else
        {
            $this->Venues_model->addVenues();
            $data['title'] = 'Venue Successfully Added';
            $this->load->view('venues/success', $data);
        }
    }//end add()
    /**
     * allows you to edit an existing venue
     *
     * @param none
     * @return venues/edit-success if form is validated correctly
     * @todo none
     */
    public function edit($slug = NULL)
    {
      $this->load->helper('form');
      $this->load->library('form_validation');
      $data['title'] = 'Edit Venues';
      $userId = $this->Venues_model->get_session_id();
      $id = $this->Venues_model->get_session_id();
        
      if ($this->session->logged_in == TRUE)
        {//if logged get data of the veues(s) that matches userId from db
            if ($this->Venues_model->find_post_id($userId) == TRUE)
          {
            if(is_null($slug))
            {
              $data['venues'] = $this->Venues_model->getVenues();
              $data['title'] = 'Edit Venues';
              $this->load->view('venues/edit-list', $data);
            }
            else
            {
              $data['venue'] = $this->Venues_model->getVenues($slug);
              if (empty($data['venue']))
              {
                  show_404();
              }
              $this->load->helper('date');
              $data['title'] = 'Venue';
              $this->load->view('venues/edit-view', $data);
            }
          }
          else
          {
            $this->Venues_model->editVenues($slug);
            $data['title'] = 'Venue Successfully Updated';
            $this->load->view('venues/edit-success', $data);
          }
      }
    }//end edit()
    
    public function delete($key)
    {
        $userId = $this->Venues_model->get_session_id();
        
        $id = $this->uri->segment(3);
        $data['title'] = 'Delete a Venue';

        if($this->Venues_model->deleteVenue($key)){       
            $this->load->view('venues/delete', $data);
        }
        
    }#end function delete()
        
    public function find_post_id($userId)
    {    
        $postExist = false;
        $query = $this->db->query("SELECT id FROM Venue");
        foreach ($query->result_array() as $row)
                 {
                    if($row['id'] == $userId)
                        {
                        $postExist = true;
                        }
                 }
         return $postExist;           
    }#end of find_post_id

}//END Venues