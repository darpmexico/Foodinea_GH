<?php



class CtrSwitchLanguage extends MX_Controller{


public function __construct(){

parent::__construct();

$this->load->helper('url');

}


public function switchlanguage($language="EN"){

$this->session->set_userdata('site_lang',$language);

$this->lang->load($language,$language);

print $this->session->userdata("site_lang");

}


}



?>
