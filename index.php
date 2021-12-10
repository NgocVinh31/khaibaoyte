 <?php include "./ketnoi.php";
    session_start();
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
     <link rel="stylesheet" href="./CSS/index.css">
 </head>

 <body>
     <header>
         <div class="container">
             <div class="headerFrame">
                 <div class="headerLeft">
                     <div class="headerLeft_logo"><a href=""><img src="./picture/Logo_BoYTe.png" alt=""></a></div>
                     <p class="headerLeft_text"><a href="">KHAI BÁO Y TẾ ĐIỆN TỬ TẠI BỆNH VIỆN</a></p>
                 </div>
                 <div class="headerRight">
                     <p class="headerRight_icon"><i class="fas fa-bars"></i></p>
                     <div class="headerRight_dropdown">
                         <ul>
                             <li><a href=""><i class="fas fa-file-medical"></i> <span>Khai báo y tế</span></a></li>
                             <li><a href=""><i class="far fa-clock"></i> <span>Lịch sử khai báo</span></a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </header>


     <!-- sang làm phần main -->
     <div class="main">
         <div class="container_main">
             <!-- làm phần main 1 -->
             <div class="main1">
                 <h2 class="main1_tittle">PKĐK QUỐC TẾ GOLDEN HEALTHCARE</h2>
                 <p class="main1_text">KHAI BÁO THÔNG TIN SAI LÀ VI PHẠM PHÁP LUẬT VIỆT NAM VÀ CÓ THỂ XỬ LÝ HÌNH SỰ</p>
             </div>


             <!-- làm phần main2 -->
             <div class="main2">
                 <form action="./add1.php?maxacthuc=<?php echo $xacthuc ?>" enctype="multipart/form-data" method="get">
                     <div class="main2_tick">
                         <div class="main2_tickLeft">
                             <div class="main2_tickLeft_item "><input class="tick_Notnhanvien tick_sinhvien" type="radio" name="tick" value="sinhvien">Sinh viên</div>
                             <div class="main2_tickLeft_item"><input class="tick_nhanvien tick_Notsinhvien" type="radio" name="tick" value="giaovien">Giáo viên</div>
                             <div class="main2_tickLeft_item tick_khach"><input class="tick_Notnhanvien tick_Notsinhvien" type="radio" name="tick" value="khach">Khách đến liên hệ công tác</div>
                         </div>
                         <div class="main2_tickRight">
                             <button type="reset"><i class="fas fa-sync"></i> Nhập lại</button>
                         </div>
                     </div>


                     <div class="main2_fill">
                     <div class="main2_fillItem sinhvien">
                             <p class="main2_fillItem_text">Mã sinh viên <span>(*)</span>:</p>
                             <input class="main2_fillItem_input" type="text" name="masinhvien" placeholder="Nhập mã sinh viên">
                         </div>
                         <div class="main2_fillItem">
                             <p class="main2_fillItem_text">Số điện thoại <span>(*)</span>:</p>
                             <input class="main2_fillItem_input" type="number" name="sdt">
                         </div>
                         <div class="main2_fillItem">
                             <p class="main2_fillItem_text">Họ và tên <span>(*)</span>:</p>
                             <input class="main2_fillItem_input" type="text" name="hoten" placeholder="Họ và tên">
                         </div>


                         <div class="main2_fillFrame">
                             <div class="main2_fillItem2">
                                 <p class="main2_fillItem_text">Ngày sinh <span>(*)</span>:</p>
                                 <input class="main2_fillItem_input" type="date" name="ngaysinh" placeholder="DD/MM/YYYY">
                             </div>
                             <div class="main2_fillItem2">
                                 <p class="main2_fillItem_text">Giới tính <span>(*)</span>:</p>
                                 <select class="main2_fillItem_input" name="gioitinh">
                                     <option value="nam">Nam</option>
                                     <option value="nu">Nữ</option>
                                     <option value="gioitinhkhac">Giới tính khác</option>
                                 </select>
                             </div>
                         </div>

                         <div class="main2_fillItem nhanvien">
                             <p class="main2_fillItem_text">Mã nhân viên <span>(*)</span>:</p>
                             <input class="main2_fillItem_input" type="text" name="manhanvien" placeholder="Nhập mã nhân viên">
                         </div>


                         <div class="main2_fillItem nhanvien">
                             <p class="main2_fillItem_text">Khoa\Phòng <span>(*)</span>:</p>
                             <input class="main2_fillItem_input" type="text" name="khoaphong" placeholder="Khoa\Phòng">
                         </div>

                         <div class="main2_fillFrame">
                             <div class="main2_fillItem4">
                                 <p class="main2_fillItem_text">Quốc tịch <span>(*)</span>:</p>
                                 <select class="main2_fillItem_location quoctich" name="quoctich">
                                     <option>Chọn quốc tịch</option>
                                     <?php $sql = "select * from quoctich";
                                        $query = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($query)) {
                                        ?>
                                         <option value="<?php echo $row["ID"]; ?>"><?php echo $row["quoctich"] ?></option>
                                     <?php } ?>
                                 </select>
                             </div>

                             <!-- <?php if (isset($_GET["quoctich"])) ?> -->
                             <div class="main2_fillItem4">
                                 <p class="main2_fillItem_text">Tỉnh thành <span>(*)</span>:</p>
                                 <select class="main2_fillItem_location tinhthanh" name="tinhthanh">
                                 </select>
                             </div>
                             <div class="main2_fillItem4">
                                 <p class="main2_fillItem_text">Quận huyện <span>(*)</span>:</p>
                                 <select class="main2_fillItem_location quanhuyen" name="quanhuyen">

                                 </select>
                             </div>
                             <div class="main2_fillItem4 ">
                                 <p class="main2_fillItem_text">Xã phường <span>(*)</span>:</p>
                                 <select class="main2_fillItem_location xaphuong" name="xaphuong">

                                 </select>
                             </div>
                         </div>

                         <div class="main2_fillItem">
                             <p class="main2_fillItem_text">Số nhà, tên đường <span>(*)</span>:</p>
                             <input class="main2_fillItem_input" type="text" name="diachi" placeholder="Số nhà, tên đường">
                         </div>

                     </div>
                     <div class="main2_khaosat">
                         <div class="main2_khaosat_item">
                             <p class="main2_khaosatTittle">Ông/bà hiện có những triệu chứng hay biểu hiện nào sau đây không? <span>(*)</span>:</p>
                             <table class="main2_khaosatForm">
                                 <th class="main2_khaosatForm_1">Dấu hiệu</th>
                                 <th class="main2_khaosatForm_2">Có</th>
                                 <th class="main2_khaosatForm_2">Không</th>

                                 <tr>
                                     <td class="main2_khaosatForm_1 main2_khaosatForm_borderUp">Sốt <span>(*)</span></td>
                                     <td class="main2_khaosatForm_2 main2_khaosatForm_borderUp"><input type="radio" name="sot" value="1"></td>
                                     <td class="main2_khaosatForm_2 main2_khaosatForm_borderUp"><input type="radio" name="sot" value="0" checked></td>
                                 </tr>
                                 <tr>
                                     <td class="main2_khaosatForm_1 main2_khaosatForm_borderUp">Ho<span>(*)</span></td>
                                     <td class="main2_khaosatForm_2 main2_khaosatForm_borderUp"><input type="radio" name="ho" value="1"></td>
                                     <td class="main2_khaosatForm_2 main2_khaosatForm_borderUp"><input type="radio" name="ho" value="0" checked></td>
                                 </tr>
                                 <tr>
                                     <td class="main2_khaosatForm_1 main2_khaosatForm_borderUp">Đau họng <span>(*)</span></td>
                                     <td class="main2_khaosatForm_2 main2_khaosatForm_borderUp"><input type="radio" name="dauhong" value="1"></td>
                                     <td class="main2_khaosatForm_2 main2_khaosatForm_borderUp"><input type="radio" name="dauhong" value="0" checked></td>
                                 </tr>
                                 <tr>
                                     <td class="main2_khaosatForm_1 main2_khaosatForm_borderUp">Mất vị, mất mùi <span>(*)</span></td>
                                     <td class="main2_khaosatForm_2 main2_khaosatForm_borderUp"><input type="radio" name="matvi" value="1"></td>
                                     <td class="main2_khaosatForm_2 main2_khaosatForm_borderUp"><input type="radio" name="matvi" value="0" checked></td>
                                 </tr>
                                 <tr>
                                     <td class="main2_khaosatForm_1 main2_khaosatForm_borderUp">Cảm giác mệt <span>(*)</span></td>
                                     <td class="main2_khaosatForm_2 main2_khaosatForm_borderUp"><input type="radio" name="met" value="1"></td>
                                     <td class="main2_khaosatForm_2 main2_khaosatForm_borderUp"><input type="radio" name="met" value="0" checked></td>
                                 </tr>
                                 <tr>
                                     <td class="main2_khaosatForm_1 main2_khaosatForm_borderUp">Khó thở <span>(*)</span></td>
                                     <td class="main2_khaosatForm_2 main2_khaosatForm_borderUp"><input type="radio" name="khotho" value="1"></td>
                                     <td class="main2_khaosatForm_2 main2_khaosatForm_borderUp"><input type="radio" name="khotho" value="0" checked></td>
                                 </tr>
                                 <tr>
                                     <td class="main2_khaosatForm_1 main2_khaosatForm_borderUp">Triệu chứng, dấu hiệu khác <span>(*)</span></td>
                                     <td class="main2_khaosatForm_2 main2_khaosatForm_borderUp"><input type="radio" name="trieuchung" value="1"></td>
                                     <td class="main2_khaosatForm_2 main2_khaosatForm_borderUp"><input type="radio" name="trieuchung" value="0" checked></td>
                                 </tr>
                             </table>
                         </div>


                         <div class="main2_khaosat_item">
                             <p class="main2_khaosatTittle">Trong thời gian vừa qua? <span>(*)</span>:</p>
                             <table class="main2_khaosatForm">
                                 <th class="main2_khaosatForm_1">Yếu tố dịch tễ</th>
                                 <th class="main2_khaosatForm_2">Có</th>
                                 <th class="main2_khaosatForm_2">Không</th>

                                 <tr>
                                     <td class="main2_khaosatForm_1 main2_khaosatForm_borderUp">Bạn có đang mắc COVID-19 không? <span>(*)</span></td>
                                     <td class="main2_khaosatForm_2 main2_khaosatForm_borderUp"><input type="radio" name="maccovid" value="1"></td>
                                     <td class="main2_khaosatForm_2 main2_khaosatForm_borderUp"><input type="radio" name="maccovid" value="0" checked></td>
                                 </tr>
                                 <tr>
                                     <td class="main2_khaosatForm_1 main2_khaosatForm_borderUp">Tiếp xúc gần ca nhiễm, ca nghi nhiễm COVID-19 trong vòng 14 ngày qua <span>(*)</span></td>
                                     <td class="main2_khaosatForm_2 main2_khaosatForm_borderUp"><input type="radio" name="tiepxuccovid" value="1"></td>
                                     <td class="main2_khaosatForm_2 main2_khaosatForm_borderUp"><input type="radio" name="tiepxuccovid" value="0" checked></td>
                                 </tr>
                                 <tr>
                                     <td class="main2_khaosatForm_1 main2_khaosatForm_borderUp">Đi từ quốc gia hoặc vùng lãnh thổ khác trong vòng 14 ngày qua <span>(*)</span></td>
                                     <td class="main2_khaosatForm_2 main2_khaosatForm_borderUp"><input type="radio" name="tunoicocovid" value="1"></td>
                                     <td class="main2_khaosatForm_2 main2_khaosatForm_borderUp"><input type="radio" name="tunoicocovid" value="0" checked></td>
                                 </tr>
                                 <tr>
                                     <td class="main2_khaosatForm_1 main2_khaosatForm_borderUp">Bạn có kết thúc cách ly tập trung trong vòng 14 ngày qua không? <span>(*)</span></td>
                                     <td class="main2_khaosatForm_2 main2_khaosatForm_borderUp"><input type="radio" name="cachly" value="1"></td>
                                     <td class="main2_khaosatForm_2 main2_khaosatForm_borderUp"><input type="radio" name="cachly" value="0" checked></td>
                                 </tr>
                                 <tr>
                                     <td class="main2_khaosatForm_1 main2_khaosatForm_borderUp">Trong vòng 14 ngày qua, trong gia đình/cơ quan bạn có ai sốt hay ho không? <span>(*)</span></td>
                                     <td class="main2_khaosatForm_2 main2_khaosatForm_borderUp"><input type="radio" name="vegiadinh" value="1"></td>
                                     <td class="main2_khaosatForm_2 main2_khaosatForm_borderUp"><input type="radio" name="vegiadinh" value="0" checked></td>
                                 </tr>
                                 <tr>
                                     <td class="main2_khaosatForm_1 main2_khaosatForm_borderUp">Bạn đã xuất viện do điều trị COVID-19 trong vòng 14 ngày qua không? <span>(*)</span></td>
                                     <td class="main2_khaosatForm_2 main2_khaosatForm_borderUp"><input type="radio" name="datungdieutricovid" value="1"></td>
                                     <td class="main2_khaosatForm_2 main2_khaosatForm_borderUp"><input type="radio" name="datungdieutricovid" value="0" checked></td>
                                 </tr>
                             </table>
                         </div>
                     </div>
                     <textarea class="main2_them" name="thongtinthem" id="" cols="30" rows="10" placeholder="Vui lòng cấp thêm thông tin về triệu chứng hay dấu hiệu khác nếu có"></textarea>
                     <!-- phần làm nhập mã xác thực -->
                     <div class="main2_nhapma">
                         <p class="main2_nhapma_text1">Vui lòng nhập mã xác thực <span>(*)</span></p>
                         <p class="main2_nhapma_text2"><?php echo $xacthuc = rand(100000, 999999);
                                                        $_SESSION["maxacthuc"] = $xacthuc ?></p>
                         <input type="text" name="maxacthuc">
                     </div>

                     <!-- làm phần nút gửi  -->
                     <div class="main2_btnSubmit">
                         <input type="submit" value="Gửi" name="gui">
                     </div>
                 </form>
             </div>
         </div>
     </div>

     <footer>
         <img src="https://kbyt.khambenh.gov.vn/static/images_template/logoAppKhaiBaoYte.png" alt="">
         <p>Copyright ® 2021 - Sở Y Tế TP. Hồ Chí Minh</p>
     </footer>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <script>
         $(document).ready(function() {
             $(".tick_nhanvien").click(function() {
                 $(".nhanvien").show();
             });

             $(".tick_Notnhanvien").click(function() {
                 $(".nhanvien").hide();
             });




             $(".tick_sinhvien").click(function() {
                 $(".sinhvien").show();
             });

             $(".tick_Notsinhvien").click(function() {
                 $(".sinhvien").hide();
             });






             $(".headerRight_icon").click(function() {
                 $(".headerRight_dropdown").toggle();
             });


             $(".quoctich").change(function() {
                 var id = $(".quoctich").val();
                 $.post("./tinhthanh.php", {
                     id: id
                 }, function(data) {
                     $(".tinhthanh").html(data);
                 })
             });


             $(".tinhthanh").change(function() {
                 var id = $(".tinhthanh").val();
                 $.post("./quanhuyen.php", {
                     id: id
                 }, function(data) {
                     $(".quanhuyen").html(data);
                 })
             });



             $(".quanhuyen").change(function() {
                 var id = $(".quanhuyen").val();
                 $.post("./xaphuong.php", {
                     id: id
                 }, function(data) {
                     $(".xaphuong").html(data);
                 })
             });


         });
     </script>


     <?php if (isset($_GET["loi"])) {
            $loi = $_GET["loi"];
            if ($loi == "loi") {
        ?>
             <script>
                 alert("Mời bạn chọn thể loại khai báo");
             </script>
         <?php } else if ($loi == "saimaxacthuc") { ?>

             <script>
                 alert("Nhập sai mã xác thực");
             </script>

         <?php } else { ?>
             <script>
                 alert("Mời bạn nhập đầy đủ thông tin");
             </script>
     <?php }
        } ?>

     <?php if (isset($_GET["thanhcong"])) { ?>

         <script>
             alert("khai báo thành công");
         </script>
     <?php } ?>
 </body>

 </html>