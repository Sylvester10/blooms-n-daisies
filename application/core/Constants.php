<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* ===== Documentation ===== 
Name: Constants::General
Role: Include
Description: Holds all the constants used by the app. Required in the construct of the core controller, MY_Controller, which makes it global to the entire application.
Author: Nwankwo Ikemefuna
Date Created: 23rd November, 2018
*/


$school_name = 'Blooms \'n Daisies';
$school_initials = 'BnD';
$school_phone_number = ' +234(0)8184242507';
$school_phone_number2 = ' +234(0)8184242508';
$school_phone_number3 = ' +234(0)8184242505';
$school_address = '74 Old Ikang Road, Big Qua, off Ndidem Usang Iso Road, Calabar, Cross River State';
$school_contact_email = 'bloomsindaisies@gmail.com';
$sub_tagline = '...... inspiring your child\'s mind';
$school_keywords = 'Blooms \'n Daisies, Blooms \'n Daisies School, Schools in Calabar, Schools in Nigeria, Schools in Africa, Nursery Schools in Calabar, Creche School in Calabar, Day care School in Calabar, ICT-Compliant Schools in Calabar';
$school_description = "";


//Software Info
define('school_name', $school_name);
define('school_initials', $school_initials);
define('school_phone_number', $school_phone_number);
define('school_phone_number2', $school_phone_number2);
define('school_phone_number3', $school_phone_number3);
define('school_address', $school_address);
define('school_contact_email', $school_contact_email);
define('school_keywords', $school_keywords);
define('sub_tagline', $sub_tagline);
//define('school_description', $school_description);
define('school_website', base_url());
define('school_logo', base_url('assets/img/blooms_logo_main.png'));
define('school_favicon', base_url('assets/favicon.ico'));


//vendor
define('software_vendor_site', 'https://kodebro.com');
define('software_vendor', 'Kodebro');


//MySQL-PHP server time difference. Change to zero if both are on same server
define('mysql_time_difference', 0); //if negative, write as -x, else, x


//Email config
define('school_web_mail', school_contact_email); 


//defaults
define('default_admin_password', 'bndadmin255');


//Portal links
define('portal_admin_staff_login', 'https://qschoolmanager.com/login');
define('portal_student_parent_login', 'https://qschoolmanager.com/user_login');


//Others
define('pdf_icon', base_url('assets/pdf_icon.png'));
define('user_avatar', base_url('assets/user.png'));