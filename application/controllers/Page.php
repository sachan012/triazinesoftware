<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

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
	public function index()
	{
		$this->load->view('index');
	}

	public function about_us()
	{
		$this->load->view('about-us');
	}

	public function career()
	{
		$this->load->view('career');
	}

	

	public function android_app_development()
	{
		$this->load->view('android-app-development');
	}

	public function asp_dot_net_development_company()
	{
		$this->load->view('asp-dot-net-development-company');
	}

	public function aws_server_migration_service()
	{
		$this->load->view('aws-server-migration-service');
	}

	public function cloud_computing_services()
	{
		$this->load->view('cloud-computing-services');
	}

	public function contact_us()
	{
		$this->load->view('contact-us');
	}

	public function dominos_mobile_app()
	{
		$this->load->view('dominos-mobile-app');
	}

	public function ecommerce_app_development()
	{
		$this->load->view('ecommerce-app-development');
	}

	public function e_governance_solutions()
	{
		$this->load->view('e-governance-solutions');
	}

	public function e_learning_solutions()
	{
		$this->load->view('e-learning-solutions');
	}

	public function flutter_app_development()
	{
		$this->load->view('flutter-app-development');
	}

	public function food_and_restaurant()
	{
		$this->load->view('food-and-restaurant');
	}

	public function google_analytics_integration_in_ios_android_apps()
	{
		$this->load->view('google-analytics-integration-in-ios-android-apps');
	}

	public function hello_tax_mobile_app()
	{
		$this->load->view('hello-tax-mobile-app');
	}

	public function hybrid_app_development()
	{
		$this->load->view('hybrid-app-development');
	}

	public function ibm_worklight()
	{
		$this->load->view('ibm-worklight');
	}

	public function iconic_app_development()
	{
		$this->load->view('iconic-app-development');
	}

	public function igl_mobile_app()
	{
		$this->load->view('igl-mobile-app');
	}

	public function ionic_app_development()
	{
		$this->load->view('ionic-app-development');
	}

	public function iot_app_development()
	{
		$this->load->view('iot-app-development');
	}

	public function iphone_app_development()
	{
		$this->load->view('iphone-app-development');
	}

	public function jauntfix_mobile_app()
	{
		$this->load->view('jauntfix-mobile-app');
	}

	public function javascript_frameworks()
	{
		$this->load->view('javascript-frameworks');
	}

	public function map_based_app_development()
	{
		$this->load->view('map-based-app-development');
	}

	public function meter_reading_software()
	{
		$this->load->view('meter-reading-software');
	}

	public function our_engagement_model()
	{
		$this->load->view('our-engagement-model');
	}

	public function our_products()
	{
		$this->load->view('our-products');
	}

	public function page_not_found()
	{
		$this->load->view('page-not-found');
	}

	public function parking_management_software()
	{
		$this->load->view('parking-management-software');
	}

	public function portfolio()
	{
		$this->load->view('portfolio');
	}

	public function privacy_and_Policy()
	{
		$this->load->view('privacy-and-Policy');
	}

	public function python_app_development()
	{
		$this->load->view('python-app-development');
	}

	public function qa_testing_services()
	{
		$this->load->view('qa-testing-services');
	}

	public function react_native_app_development()
	{
		$this->load->view('react-native-app-development');
	}

	public function sap_implementation()
	{
		$this->load->view('sap-implementation');
	}

	public function sitemap()
	{
		$this->load->view('sitemap');
	}

	public function software_development_consulting()
	{
		$this->load->view('software-development-consulting');
	}

	public function terms_and_condition()
	{
		$this->load->view('terms-and-condition');
	}

	public function thank_you()
	{
		$this->load->view('thank-you');
	}

	public function travel_and_hospitality_management_software()
	{
		$this->load->view('travel-and-hospitality-management-software');
	}

	public function website_development_company()
	{
		$this->load->view('website-development-company');
	}



	



	
}
