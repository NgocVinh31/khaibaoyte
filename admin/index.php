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
                <img src="../picture/Logo_BoYTe.png" alt="">
               </div>
               <p>KHAI BÁO Y TẾ ĐIỆN TỬ TẠI BỆNH VIỆN</p>
                <ul class="mainLeft_list">
                    <li class="mainLeft_list_item"><a href="./index.php">Bảng thông tin khai báo</a></li>
                </ul>
            </div> 
            <div class="mainRight">
                <h3 class="mainRight_tittle">Thông tin khai báo dịch tễ</h3>
                <div class="mainRight_search">
                    <form action="">
                        <div class="mainRight_search1">
                            <button type="submit">Tìm kiếm</button>
                        </div>
                        <div class="mainRight_search2">
                            <div class="mainRight_search2_Item"><input type="radio" name="tich" value="sinhvien">Sinh viên</div>
                            <div class="mainRight_search2_Item"><input type="radio" name="tich" value="giaovien">Giáo viên</div>
                            <div class="mainRight_search2_Item"><input type="radio" name="tich" value="khach">Khách</div>
                        </div>
                    </form>
                </div>
                <div class="mainRight_table">
                    <p class="mainRight_tableTittle">Bảng thông tin khai báo</p>
                    <table class="mainRight_tableFrame">
                        <tr>
                            <th>ID</th>
                            <th>Quốc tịch</th>
                            <th>Tỉnh thành</th>
                            <th>Quận huyện</th>
                            <th>Xã phường</th>
                            <th>Địa chỉ</th>
                            <th>Ho</th>
                            <th>Sốt</th>
                            <th>Đau họng</th>
                            <th>Mất vị giác</th>
                            <th>Mệt</th>
                            <th>Khó thở</th>
                            <th>Triệu chứng khác</th>
                            <th>Đã từng dính covid</th>
                            <th>Có tiếp xúc</th>
                            <th>Đi từ nơi nhiễm</th>
                            <th>Đã hết cách ly</th>
                            <th>Gia đình/Cơ quan</th>
                            <th>Xuất viện</th>
                            <th>Thông tin thêm</th>
                            <th>Ngày tháng</th>
                            <th>Chức năng</th>

                        </tr>
                        <?php
                        if(isset($_GET["tich"]))
                        {
                            $loai=$_GET["tich"];
                            $query;
                            if($loai=="sinhvien")
                            {
                                $sql="SELECT `quoctich`, `tinhthanh`, `quanhuyen`, `xaphuong`, `diachi`, `ho`, `sot`, `dauhong`, `matvi`, `met`, `khotho`, `trieuchungkhac`, `maccovid`, `tiepxuc`, `dituquocgia`, `cachly`, `giadinh`, `datungdinhcovid`, `thongtinthem`, `ID_sinhvien`, `ngaykhaibao` FROM `khaibao`;";
                                $query=add($sql);
                            }
                            else if($loai=="giaovien")
                            {
                                $sql="SELECT `quoctich`, `tinhthanh`, `quanhuyen`, `xaphuong`, `diachi`, `ho`, `sot`, `dauhong`, `matvi`, `met`, `khotho`, `trieuchungkhac`, `maccovid`, `tiepxuc`, `dituquocgia`, `cachly`, `giadinh`, `datungdinhcovid`, `thongtinthem`, `ID_giaovien`, `ngaykhaibao` FROM `khaibao`;";
                                $query=add($sql);
                            }
                            else 
                            {
                                $sql="SELECT `quoctich`, `tinhthanh`, `quanhuyen`, `xaphuong`, `diachi`, `ho`, `sot`, `dauhong`, `matvi`, `met`, `khotho`, `trieuchungkhac`, `maccovid`, `tiepxuc`, `dituquocgia`, `cachly`, `giadinh`, `datungdinhcovid`, `thongtinthem`, `ID_khach`, `ngaykhaibao` FROM `khaibao`;";
                                $query=add($sql);
                            }
                                while($row=mysqli_fetch_assoc($query))
                                {
                                    if($row["ID_$loai"]!="")
                                    {
                        ?>
                        <tr>
                            <td><?php echo $row["ID_$loai"]?></td>
                            <td><?php echo $row["quoctich"]?></td>
                            <td><?php echo $row["tinhthanh"]?></td>
                            <td><?php echo $row["quanhuyen"]?></td>
                            <td><?php echo $row["xaphuong"]?></td>
                            <td><?php echo $row["diachi"]?></td>
                            <?php if($row["ho"]==1) {?>
                            <td class="colorRed">Có</td>
                            <?php } else{?>
                                <td>Không</td>
                            <?php }?>
                            <?php if($row["sot"]==1) {?>
                            <td class="colorRed">Có</td>
                            <?php } else{?>
                                <td>Không</td>
                            <?php }?>
                            <?php if($row["dauhong"]==1) {?>
                            <td class="colorRed">Có</td>
                            <?php } else{?>
                                <td>Không</td>
                            <?php }?>
                            <?php if($row["matvi"]==1) {?>
                            <td class="colorRed">Có</td>
                            <?php } else{?>
                                <td>Không</td>
                            <?php }?>
                            <?php if($row["met"]==1) {?>
                            <td class="colorRed">Có</td>
                            <?php } else{?>
                                <td>Không</td>
                            <?php }?>
                            <?php if($row["khotho"]==1) {?>
                            <td class="colorRed">Có</td>
                            <?php } else{?>
                                <td>Không</td>
                            <?php }?>
                            <?php if($row["trieuchungkhac"]==1) {?>
                            <td class="colorRed">Có</td>
                            <?php } else{?>
                                <td>Không</td>
                            <?php }?>
                            <?php if($row["maccovid"]==1) {?>
                            <td class="colorRed">Có</td>
                            <?php } else{?>
                                <td>Không</td>
                            <?php }?>
                            <?php if($row["tiepxuc"]==1) {?>
                            <td class="colorYellow">Có</td>
                            <?php } else{?>
                                <td>Không</td>
                            <?php }?>
                            <?php if($row["dituquocgia"]==1) {?>
                            <td class="colorYellow">Có</td>
                            <?php } else{?>
                                <td>Không</td>
                            <?php }?>
                            <?php if($row["cachly"]==1) {?>
                            <td class="colorYellow">Có</td>
                            <?php } else{?>
                                <td>Không</td>
                            <?php }?>
                            <?php if($row["giadinh"]==1) {?>
                            <td class="colorYellow">Có</td>
                            <?php } else{?>
                                <td>Không</td>
                            <?php }?>
                            <?php if($row["datungdinhcovid"]==1) {?>
                            <td class="colorYellow">Có</td>
                            <?php } else{?>
                                <td>Không</td>
                            <?php }?>
                            <td><?php echo $row["thongtinthem"]?></td>
                            <td><?php echo $row["ngaykhaibao"]?></td>
                            <td><a href="./detail.php?loai=<?php echo $loai; ?>&id=<?php echo $row["ID_$loai"]; ?>">Xem chi tiết</a></td>
                        </tr>
                        <?php } } } else {?>
                            <tr><td colspan="22" >Mời bạn chọn ô cần tìm</td></tr>
                        <?php  }?>
                    </table>
                </div>
            </div> 
        </div>
    </div>
</body>
</html>