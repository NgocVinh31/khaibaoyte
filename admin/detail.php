<?php 
function add($sql){
    include "../ketnoi.php";
    $query=mysqli_query($conn, $sql);
    return $query;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
     <link rel="stylesheet" href="../CSS/indexAdmin.css">
</head>
<body>
    <div class="container">
        <div class="main">
            <div class="mainLeft">
               <div class="mainLeft_logo">
                <img src="./picture/Logo_BoYTe.png" alt="">
               </div>
               <p>KHAI BÁO Y TẾ ĐIỆN TỬ TẠI BỆNH VIỆN</p>
                <ul class="mainLeft_list">
                    <li class="mainLeft_list_item"><a href="./index.php">Bảng thông tin khai báo</a></li>
                </ul>
            </div> 
            <div class="mainRight">
                <h3 class="mainRight_tittle">Thông tin khai báo dịch tễ</h3>
                <div class="mainRight_table">
                    <p class="mainRight_tableTittle">Bảng thông tin khai báo</p>
                    <table class="mainRight_tableFrame">
                        <?php $loai=$_GET["loai"]; ?>
                        <tr>
                            <th>Mã</th>
                            <?php if($loai=="giaovien")
                            { ?>
                                <td>KHoa phòng</td>
                            <?php } ?>
                            <th>Họ và tên</th>
                            <th>SĐT</th>
                            <th>Giới tính</th>
                            <th>Ngày sinh</th>
                            <th>Địa điểm</th>
                            <th>Quốc tịch</th>
                            <th>Tỉnh thành</th>
                            <th>Quận huyện</th>
                            <th>Xã phường</th>
                        </tr>
                        <?php
                        if(isset($_GET["loai"]) && isset($_GET["id"]))
                        {
                            $loai=$_GET["loai"];
                            $query;
                            if($loai=="sinhvien")
                            {
                                $id=$_GET["id"];
                                $sql="SELECT `sdt`, `hoten`, `ngaysinh`, `gioitinh`, `MASV`, `diachi`, `quoctich`, `tinhthanh`, `quanhuyen`, `xaphuong` FROM `sinhvien` WHERE MASV=$id";
                                $query=add($sql);
                            }
                            else if($loai=="giaovien")
                            {
                                $id=$_GET["id"];
                                $sql="SELECT `sdt`, `hoten`, `ngaysinh`, `gioitinh`, `ID_nhanvien`, `khoaphong`, `diachi`, `quoctich`, `tinhthanh`, `quanhuyen`, `xaphuong` FROM `giaovien` WHERE ID_nhanvien=$id;";
                                $query=add($sql);
                            }
                            else if($loai=="khach")
                            {
                                $id=$_GET["id"];
                                $sql="SELECT `ID`, `sdt`, `hoten`, `ngaysinh`, `gioitinh`, `diachi`, `quoctich`, `tinhthanh`, `quanhuyen`, `xaphuong` FROM `khachhang` WHERE ID=$id";
                                $query=add($sql);
                            }
                        ?>
                        <tr>
                            <?php $row=mysqli_fetch_assoc($query);
                            if($loai=="sinhvien")
                            {
                                $id=$row["MASV"];
                            }
                            else if($loai=="giaovien")
                            {
                                $id=$row["ID_nhanvien"];
                            }
                            else if($loai=="khach"){
                                $id=$row["ID"];
                            }
                            ?>
                            <td><?php echo $id;?></td>
                            <td><?php echo $row["hoten"]?></td>
                            <td><?php echo $row["sdt"]?></td>
                            <td><?php echo $row["gioitinh"]?></td>
                            <td><?php echo $row["ngaysinh"]?></td>
                            <td><?php echo $row["diachi"]?></td>
                            <?php if($loai=="giaovien")
                            { ?>
                                <td><?php echo $row["khoaphong"]?></td>
                            <?php } ?>
                            <td><?php echo $row["quoctich"]?></td>
                            <td><?php echo $row["tinhthanh"]?></td>
                            <td><?php echo $row["quanhuyen"]?></td>
                            <td><?php echo $row["xaphuong"]?></td>
                            
                        </tr>

                        <?php } else {?>
                        <tr><td colspan="10" >Không có dữ liệu thông tin</td></tr>
                    <?php }?>
                    </table>
                </div>
            </div> 
        </div>
    </div>
</body>
</html>