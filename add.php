<?php
session_start();
function add($sql){
    include "./ketnoi.php";
    $query=mysqli_query($conn, $sql);
}
if(isset($_GET["gui"]) && isset($_GET["tick"]))
{
        $loai=$_GET["tick"];
        $sdt=$_GET["sdt"];
        $hoten=$_GET["hoten"];
        $ngaysinh=$_GET["ngaysinh"];
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
        $tunoicocovid=$_GET["tunoicocovid"];
        $maxacthuc=$_GET["maxacthuc"];
        if($maxacthuc==$_SESSION["maxacthuc"])
        {
            if($sdt!=""&& $hoten!=""&& $ngaysinh!=""&& $gioitinh!=""&& $quoctich!=""&& $tinhthanh!=""&& $quanhuyen!=""&& $xaphuong!=""&& $diachi!=""&& $sot!=""&& $ho!=""&& $dauhong!=""&& $matvi!=""&& $met!=""&& $khotho!=""&& $trieuchung!=""&& $maccovid!=""&& $tiepxuccovid!=""&& $cachly!=""&& $tiepxuccovid!=""&& $vegiadinh!=""&& $datungdieutricovid!="")
        {
            if($loai=="sinhvien")
            {
                $ID=rand(1000, 9999);
                $sql="INSERT INTO `sinhvien`(`ID`, `sdt`, `hoten`, `ngaysinh`, `gioitinh`) VALUES ('$ID','$sdt','$hoten','$ngaysinh','$gioitinh')";
                add($sql);
                if($thongtinthem!="")
                {
                    $sql1="INSERT INTO `khaibao`(`quoctich`, `tinhthanh`, `quanhuyen`, `xaphuong`, `diachi`, `ho`, `sot`, `dauhong`, `matvi`, `met`, `khotho`, `trieuchungkhac`, `maccovid`, `tiepxuc`, `dituquocgia`, `cachly`, `giadinh`, `datungdinhcovid`, `thongtinthem`, `ID_sinhvien`) VALUES ('$quoctich','$tinhthanh','$quanhuyen','$xaphuong','$diachi','$ho','$sot','$dauhong','$matvi','$met','$khotho','$trieuchung','$maccovid','$tiepxuccovid','$tunoicocovid','$cachly','$vegiadinh','$datungdieutricovid','$thongtinthem','$ID')";
                    add($sql1);
                }
                else{
                    $sql1="INSERT INTO `khaibao`(`quoctich`, `tinhthanh`, `quanhuyen`, `xaphuong`, `diachi`, `ho`, `sot`, `dauhong`, `matvi`, `met`, `khotho`, `trieuchungkhac`, `maccovid`, `tiepxuc`, `dituquocgia`, `cachly`, `giadinh`, `datungdinhcovid`, `ID_sinhvien`) VALUES ('$quoctich','$tinhthanh','$quanhuyen','$xaphuong','$diachi','$ho','$sot','$dauhong','$matvi','$met','$khotho','$trieuchung','$maccovid','$tiepxuccovid','$tunoicocovid','$cachly','$vegiadinh','$datungdieutricovid','$ID')";
                    add($sql1);
                }
            }
            else if($loai=="giaovien")
            {
                $ID=rand();;
                $sql="INSERT INTO `giaovien`(`ID`, `sdt`, `hoten`, `ngaysinh`, `gioitinh`, `ID_nhanvien`, `khoaphong`) VALUES ('$ID','$sdt','$hoten','$ngaysinh','$gioitinh','$manhanvien','$khoaphong')";
                add($sql);
                if($thongtinthem!="")
                {
                    $sql1="INSERT INTO `khaibao`(`quoctich`, `tinhthanh`, `quanhuyen`, `xaphuong`, `diachi`, `ho`, `sot`, `dauhong`, `matvi`, `met`, `khotho`, `trieuchungkhac`, `maccovid`, `tiepxuc`, `dituquocgia`, `cachly`, `giadinh`, `datungdinhcovid`, `thongtinthem`, `ID_giaovien`) VALUES ('$quoctich','$tinhthanh','$quanhuyen','$xaphuong','$diachi','$ho','$sot','$dauhong','$matvi','$met','$khotho','$trieuchung','$maccovid','$tiepxuccovid','$tunoicocovid','$cachly','$vegiadinh','$datungdieutricovid','$thongtinthem','$ID')";
                    add($sql1);
                }
                else{
                    $sql1="INSERT INTO `khaibao`(`quoctich`, `tinhthanh`, `quanhuyen`, `xaphuong`, `diachi`, `ho`, `sot`, `dauhong`, `matvi`, `met`, `khotho`, `trieuchungkhac`, `maccovid`, `tiepxuc`, `dituquocgia`, `cachly`, `giadinh`, `datungdinhcovid`, `ID_giaovien`) VALUES ('$quoctich','$tinhthanh','$quanhuyen','$xaphuong','$diachi','$ho','$sot','$dauhong','$matvi','$met','$khotho','$trieuchung','$maccovid','$tiepxuccovid','$tunoicocovid','$cachly','$vegiadinh','$datungdieutricovid','$ID')";
                    add($sql1);
                }
            }
            else{
                $ID=rand();;
                $sql="INSERT INTO `khachhang`(`ID`, `sdt`, `hoten`, `ngaysinh`, `gioitinh`) VALUES ('$ID','$sdt','$hoten','$ngaysinh','$gioitinh')";
                add($sql);
                if($thongtinthem!="")
                {
                    $sql1="INSERT INTO `khaibao`(`quoctich`, `tinhthanh`, `quanhuyen`, `xaphuong`, `diachi`, `ho`, `sot`, `dauhong`, `matvi`, `met`, `khotho`, `trieuchungkhac`, `maccovid`, `tiepxuc`, `dituquocgia`, `cachly`, `giadinh`, `datungdinhcovid`, `thongtinthem`, `ID_khach`) VALUES ('$quoctich','$tinhthanh','$quanhuyen','$xaphuong','$diachi','$ho','$sot','$dauhong','$matvi','$met','$khotho','$trieuchung','$maccovid','$tiepxuccovid','$tunoicocovid','$cachly','$vegiadinh','$datungdieutricovid','$thongtinthem','$ID')";
                    add($sql1);
                }
                else{
                    $sql1="INSERT INTO `khaibao`(`quoctich`, `tinhthanh`, `quanhuyen`, `xaphuong`, `diachi`, `ho`, `sot`, `dauhong`, `matvi`, `met`, `khotho`, `trieuchungkhac`, `maccovid`, `tiepxuc`, `dituquocgia`, `cachly`, `giadinh`, `datungdinhcovid`, `ID_khach`) VALUES ('$quoctich','$tinhthanh','$quanhuyen','$xaphuong','$diachi','$ho','$sot','$dauhong','$matvi','$met','$khotho','$trieuchung','$maccovid','$tiepxuccovid','$tunoicocovid','$cachly','$vegiadinh','$datungdieutricovid','$ID')";
                    add($sql1);
                }
        }
        header('Location: index.php?thanhcong');
        unset($_SERVER["maxacthuc"]);
    }
        else{
            header('Location: index.php?loi=nhapdayduthongtin');
        }
        }
        else{
            header('Location: index.php?loi=saimaxacthuc');
        }
}
else{
    header('Location: index.php?loi=loi');
}
?>
