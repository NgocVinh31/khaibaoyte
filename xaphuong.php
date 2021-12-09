<?php
include("./ketnoi.php");
$key = $_POST["id"];
$sql="SELECT * FROM xaphuong WHERE ID_quanhuyen=$key";
$query=mysqli_query($conn, $sql);
while($row=mysqli_fetch_assoc($query))
{
?>
<option value="<?php echo $row["ID"];?>"><?php echo $row["xaphuong"]?></option>     
<?php }?>