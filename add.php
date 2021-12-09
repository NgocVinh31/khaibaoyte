<?php
function add($sql){
    include "./ketnoi.php";
    $query=mysqli_query($conn, $sql);
}
if(isset($_GET["gui"]) && isset($_GET["tick"]))
{
        $loai=$_GET["tick"];
        $sdt=$_GET["sdt"];
        $hoten=$_GET["hoten"];
        $ngaysing=$_GET["ngaysinh"];
        $gioitinh=$_GET["gioitinh"];
        $quoctich=$_GET["quoctich"];
        $tinhthanh=$_GET["tinhthanh"];
        $quanhuyen=$_GET["quanhuyen"];
        $xaphuong=$_GET["xaphuong"];
        $diachi=$_GET["diachi"];
        $manhanvien=$_GET["manhanvien"];
        $khoaphong=$_GET["khoaphong"];
        $sot=$_GET["sot"];
        $ho=$_GET["ho"];
        $dauhong=$_GET["dauhong"];
        $matvi=$_GET["matvi"];
        $met=$_GET["met"];
        $khotho=$_GET["khotho"];
        $trieuchung=$_GET["trieuchung"];
        $maccovid=$_GET["maccovid"];
        $tiepxuccovid=$_GET["tiepxuccovid"];
        $cachly=$_GET["cachly"];
        $vegiadinh=$_GET["vegiadinh"];
        $datungdieutricovid=$_GET["datungdieutricovid"];
        $thongtinthem=$_GET["thongtinthem"];

        if($sdt!=""&& $hoten!=""&& $ngaysing!=""&& $gioitinh!=""&& $quoctich!=""&& $tinhthanh!=""&& $quanhuyen!=""&& $xaphuong!=""&& $diachi!=""&& $sot!=""&& $ho!=""&& $dauhong!=""&& $matvi!=""&& $met!=""&& $khotho!=""&& $trieuchung!=""&& $maccovid!=""&& $tiepxuccovid!=""&& $cachly!=""&& $tiepxuccovid!=""&& $vegiadinh!=""&& $datungdieutricovid!="")
        {
            if($loai=="benhnhan")
            {
                if($thongtinthem!="")
                {
                    $sql=""
                }
            }
            else if($loai=="nhanvien")
            {

            }
            else{

            }
        }
        else{
            header('Location: index.php?loi=nhapdayduthongtin');
        }
}
else{
    header('Location: index.php?loi');
}
?>
