<?php
class Buscador extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('tours_categorias');

       //$this->Model_name->function();
        //$this->load->library('form_validation');
        //$this->form_validation->CI =& $this;
    }

public function mostrar(){
  //$this
  $id_pais=1;
  $this->tours_categorias->mostrar_categorias($id_pais);
}


}
?>
