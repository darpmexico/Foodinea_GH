
<?php
class Tours_categorias extends CI_Model {

    function __construct()
    {
        parent::__construct();
        //$this->Connect();
        $this->load->database();
    }

public function mostrar_categorias($id_pais){

//echo "entre";
/*$query = $this->db->query("YOUR QUERY");

foreach ($query->result() as $row)
{
   echo $row->title;
   echo $row->name;
   echo $row->body;
}*/
echo $id_pais;
$query = $this->db->query('select id_tour,nombre from cat_tours where id_pais=$id_pais');
//$row = $query->result();
/*  foreach ($query->result() as $row)
  {
    echo $row->nombre;
 }*/

}

}

 ?>
