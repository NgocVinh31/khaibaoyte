<?php
include("./ketnoi.php");
$key = $_POST["id"];
$sql="SELECT * FROM quanhuyen WHERE ID_tinhthanh=$key";
$query=mysqli_query($conn, $sql);
while($row=mysqli_fetch_assoc($query))
{
?>
<option value="<?php echo $row["ID"];?>"><?php echo $row["quanhuyen"]?></option>     
<?php }?>