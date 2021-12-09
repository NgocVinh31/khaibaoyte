<option >Chọn tỉnh thành</option>  
<?php
include("./ketnoi.php");
$key = $_POST["id"];
$sql="SELECT * FROM tinhthanh WHERE ID_quoctinh=$key";
$query=mysqli_query($conn, $sql);
while($row=mysqli_fetch_assoc($query))
{
?>
<option value="<?php echo $row["ID"];?>"><?php echo $row["tinhthanh"]?></option>     
<?php }?>