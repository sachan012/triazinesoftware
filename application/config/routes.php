<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'page';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['blog.php'] = "blog/index";
$route['blogs/(:any)'] = 'blog/details/$1';
$route['our-engagement-model.html'] = "page/our_engagement_model";
$route['about-us.html'] = "page/about_us";
$route['android-app-development.html'] = "page/android_app_development";
$route['asp-dot-net-development-company.html'] = "page/asp_dot_net_development_company";
$route['aws-server-migration-service.html'] = "page/aws_server_migration_service";
$route['career.html'] = "page/career";
$route['cloud-computing-services.html'] = "page/cloud_computing_services";
$route['contact-us.html'] = "page/contact_us";
$route['dominos-mobile-app.html'] = "page/dominos_mobile_app";
$route['ecommerce-app-development.html'] = "page/ecommerce_app_development";
$route['e-governance-solutions.html'] = "page/e_governance_solutions";
$route['e-learning-solutions.html'] = "page/e_learning_solutions";
$route['flutter-app-development.html'] = "page/flutter_app_development";
$route['food-and-restaurant.html'] = "page/food_and_restaurant";
$route['google-analytics-integration-in-ios-android-apps.html'] = "page/google_analytics_integration_in_ios_android_apps";
$route['hello-tax-mobile-app.html'] = "page/hello_tax_mobile_app";
$route['hybrid-app-development.html'] = "page/hybrid_app_development";
$route['ibm-worklight.html'] = "page/ibm_worklight";
$route['iconic-app-development.html'] = "page/iconic_app_development";
$route['igl-mobile-app.html'] = "page/igl_mobile_app";
$route['ionic-app-development.html'] = "page/ionic_app_development";
$route['iot-app-development.html'] = "page/iot_app_development";
$route['iphone-app-development.html'] = "page/iphone_app_development";
$route['jauntfix-mobile-app.html'] = "page/jauntfix_mobile_app";
$route['javascript-frameworks.html'] = "page/javascript_frameworks";
$route['map-based-app-development.html'] = "page/map_based_app_development";
$route['meter-reading-software.html'] = "page/meter_reading_software";
$route['our-engagement-model.html'] = "page/our_engagement_model";
$route['our-products.html'] = "page/our_products";
$route['page-not-found.html'] = "page/page_not_found";
$route['parking-management-software.html'] = "page/parking_management_software";
$route['portfolio.html'] = "page/portfolio";
$route['privacy-and-Policy.html'] = "page/privacy_and_Policy";
$route['python-app-development.html'] = "page/python_app_development";
$route['qa-testing-services.html'] = "page/qa_testing_services";
$route['react-native-app-development.html'] = "page/react_native_app_development";
$route['sap-implementation.html'] = "page/sap_implementation";
$route['sitemap.html'] = "page/sitemap";
$route['software-development-consulting.html'] = "page/software_development_consulting";
$route['terms-and-condition.html'] = "page/terms_and_condition";
$route['thank-you.html'] = "page/thank_you";
$route['travel-and-hospitality-management-software.html'] = "page/travel_and_hospitality_management_software";
$route['website-development-company.html'] = "page/website_development_company";


