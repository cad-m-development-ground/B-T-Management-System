<?php
mysql_connect('localhost','root','');
mysql_select_db('julieblog');
?>
<?php
if(isset($_POST['insert'])) {
     $firstname = $_POST['firstName'];
     $lastName = $_POST['lastName'];
     $pro = $_POST['profession'];
     $emp = $_POST['employer'];

     $insert_data = mysql_query('INSERT INTO personal_data_entry VALUES("$firstname","$lastname","$pro","$emp")');
echo "Data are successfully save...";
?>
