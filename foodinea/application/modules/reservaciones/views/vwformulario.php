<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<!--<script src="//foodinea/js/reservaciones.js"></script>-->

<?php //echo base_url(); ?>
<input type="text" name="nombre"><br>
<input type="text" name="apellidos_usuario"><br>
<input type="text" name="telefono"><br>
<input type="email" name="email"><br>
<input type="text" name="direccion"><br>
<input type="text" name="cp"><br>
<input type="date" name="fecha"><br>
<button name="subject" type="submit" value="HTML">enviar</button>
<script>
alert('hh');
</script>
id_reservacion    | int(11)     | NO   | PRI | NULL    | auto_increment |
| nombre_usuario    | varchar(80) | NO   |     | NULL    |                |
| apellidos_usuario | varchar(80) | NO   |     | NULL    |                |
| telefono          | varchar(10) | NO   |     | NULL    |                |
| email             | varchar(20) | NO   |     | NULL    |                |
| direccion         | varchar(80) | NO   |     | NULL    |                |
| cp                | int(8)      | NO   |     | NULL    |                |
| id_tour           | int(11)     | NO   |     | NULL    |                |
| fecha


$data = array(
   'title' => 'My title' ,
   'name' => 'My Name' ,
   'date' => 'My date'
);

$this->db->insert('mytable', $data);

<!--
<form>
	<input required>
</form>
<script src="jquery.js"></script>
<script src="jquery.validate.js"></script>
<script>
$("form").validate();
</script>
-->
