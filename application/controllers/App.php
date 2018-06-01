<?php

	class App extends CI_Controller {

		public function __construct()
        {
                parent::__construct();

                $this->load->helper('general');
				$this->load->model('Configuration_model');
        }

		public function index($page = 'home') {

			if(!file_exists(APPPATH.'views/'.THEME_PAGE.$page.'.php')) {
				show_404();
			} else {

				
				// META
				$data = array(
					'title' => the_config('site_title'),
					'meta_title' => the_config('meta_title'),
					'meta_keyword' => the_config('meta_keyword'),
					'meta_description' => the_config('meta_description')
				);

				$this->load->view(THEME_TEMPLATE.'_header', $data);
				$this->load->view(THEME_PAGE.$page, $data);
				$this->load->view(THEME_TEMPLATE.'_footer');
			}

		}


	}
