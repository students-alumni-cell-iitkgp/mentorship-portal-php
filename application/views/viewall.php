<html>
<head>
</head>
<body>
<?php 
$this->load->database();
$query= $this->db->get_where('users', array('cgpa' => ''));
$row = $query->row_array();
if($query->num_rows()>0) {
foreach ($query->result() as $row)
{
    echo $row->email;
}
}

?>

</body>
</html>