<?php
session_start();
function add($sql){
    include "./ketnoi.php";
    $query=mysqli_query($conn, $sql);
}

function lay($sql){
    include "./ketnoi.php";
    $query=mysqli_query($conn, $sql);
    return $query;
}

if(isset($_GET["gui"]) && isset($_GET["tick"]))
{
        $loai=$_GET["tick"];
        $maxacthuc=$_GET["maxacthuc"];
        $masinhvien=$_GET["masinhvien"];
        $manhanvien=$_GET["manhanvien"];
        $thongtinthem=$_GET["thongtinthem"];
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
        if($maxacthuc==$_SESSION["maxacthuc"])
        {
            if($masinhvien!="" && $loai=="sinhvien")
            {
                $sql="SELECT `sdt`, `hoten`, `ngaysinh`, `gioitinh`, `MASV`, `diachi`, `quoctich`, `tinhthanh`, `quanhuyen`, `xaphuong` FROM `sinhvien` WHERE MASV=$masinhvien";
                $query=lay($sql);
                $row=mysqli_fetch_assoc($query);
                $diachi=$row["diachi"];
                $quoctich=$row["quoctich"];
                $tinhthanh=$row["tinhthanh"];
                $quanhuyen=$row["quanhuyen"];
                $xaphuong=$row["xaphuong"];
                $MASV=$row["MASV"];
                if($thongtinthem!="")
                {
                    $sql1="INSERT INTO `khaibao`(`quoctich`, `tinhthanh`, `quanhuyen`, `xaphuong`, `diachi`, `ho`, `sot`, `dauhong`, `matvi`, `met`, `khotho`, `trieuchungkhac`, `maccovid`, `tiepxuc`, `dituquocgia`, `cachly`, `giadinh`, `datungdinhcovid`, `thongtinthem`, `ID_sinhvien`, ngaykhaibao) VALUES ($quoctich,$tinhthanh,'$quanhuyen','$xaphuong','$diachi','$ho','$sot','$dauhong','$matvi','$met','$khotho','$trieuchung','$maccovid','$tiepxuccovid','$tunoicocovid','$cachly','$vegiadinh','$datungdieutricovid','$thongtinthem','$MASV',CURDATE() )";
                    add($sql1);
                }
                else{
                    $sql1="INSERT INTO `khaibao`(`quoctich`, `tinhthanh`, `quanhuyen`, `xaphuong`, `diachi`, `ho`, `sot`, `dauhong`, `matvi`, `met`, `khotho`, `trieuchungkhac`, `maccovid`, `tiepxuc`, `dituquocgia`, `cachly`, `giadinh`, `datungdinhcovid`, `ID_sinhvien`, ngaykhaibao) VALUES ('$quoctich','$tinhthanh','$quanhuyen','$xaphuong','$diachi','$ho','$sot','$dauhong','$matvi','$met','$khotho','$trieuchung','$maccovid','$tiepxuccovid','$tunoicocovid','$cachly','$vegiadinh','$datungdieutricovid','$MASV', CURDATE())";
                    add($sql1);
                }
                unset($_SERVER["maxacthuc"]);
                header('Location: index.php?thanhcong');
            }
            else if($manhanvien!="" && $loai=="giaovien")
            {
                $sql="SELECT `sdt`, `hoten`, `ngaysinh`, `gioitinh`, `ID_nhanvien`, `khoaphong`, `diachi`, `quoctich`, `tinhthanh`, `quanhuyen`, `xaphuong` FROM `giaovien` WHERE ID_nhanvien=$manhanvien";
                $query=lay($sql);
                $row=mysqli_fetch_assoc($query);
                $diachi=$row["diachi"];
                $quoctich=$row["quoctich"];
                $tinhthanh=$row["tinhthanh"];
                $quanhuyen=$row["quanhuyen"];
                $xaphuong=$row["xaphuong"];
                $MASV=$row["MASV"];
                if($thongtinthem!="")
                {
                    $sql1="INSERT INTO `khaibao`(`quoctich`, `tinhthanh`, `quanhuyen`, `xaphuong`, `diachi`, `ho`, `sot`, `dauhong`, `matvi`, `met`, `khotho`, `trieuchungkhac`, `maccovid`, `tiepxuc`, `dituquocgia`, `cachly`, `giadinh`, `datungdinhcovid`, `thongtinthem`, `ID_giaovien`,ngaykhaibao) VALUES ($quoctich,$tinhthanh,'$quanhuyen','$xaphuong','$diachi','$ho','$sot','$dauhong','$matvi','$met','$khotho','$trieuchung','$maccovid','$tiepxuccovid','$tunoicocovid','$cachly','$vegiadinh','$datungdieutricovid','$thongtinthem','$manhanvien', CURDATE())";
                    add($sql1);
                }
                else{
                    $sql1="INSERT INTO `khaibao`(`quoctich`, `tinhthanh`, `quanhuyen`, `xaphuong`, `diachi`, `ho`, `sot`, `dauhong`, `matvi`, `met`, `khotho`, `trieuchungkhac`, `maccovid`, `tiepxuc`, `dituquocgia`, `cachly`, `giadinh`, `datungdinhcovid`, `ID_giaovien`, ngaykhaibao) VALUES ('$quoctich','$tinhthanh','$quanhuyen','$xaphuong','$diachi','$ho','$sot','$dauhong','$matvi','$met','$khotho','$trieuchung','$maccovid','$tiepxuccovid','$tunoicocovid','$cachly','$vegiadinh','$datungdieutricovid','$manhanvien', CURDATE())";
                    add($sql1);
                }
                unset($_SERVER["maxacthuc"]);
                header('Location: index.php?thanhcong');
            }
            else if($loai=="khach")
            {

                $ID_quoctich=$_GET["quoctich"];
                $quoctich1=mysqli_fetch_assoc(lay("SELECT `quoctich` FROM `quoctich` WHERE ID=$ID_quoctich"));
                $ID_tinhthanh=$_GET["tinhthanh"];
                $tinhthanh1=mysqli_fetch_assoc(lay("SELECT `tinhthanh` FROM `tinhthanh` WHERE ID=$ID_tinhthanh"));
                $ID_quanhuyen=$_GET["quanhuyen"];
                $quanhuyen1=mysqli_fetch_assoc(lay("SELECT `quanhuyen` FROM `quanhuyen` WHERE ID=$ID_quanhuyen"));
                $ID_xaphuong=$_GET["xaphuong"];
                $xaphuong1=mysqli_fetch_assoc(lay("SELECT `xaphuong` FROM `xaphuong` WHERE ID=$ID_xaphuong"));
                $diachi=$_GET["diachi"];
                $ngaysinh=$_GET["ngaysinh"];
                $hoten=$_GET["hoten"];
                $sdt=$_GET["sdt"];
                $gioitinh=$_GET["gioitinh"];
                $quoctich=$quoctich1["quoctich"];
                $tinhthanh=$tinhthanh1["tinhthanh"];
                $quanhuyen=$quanhuyen1["quanhuyen"];
                $xaphuong=$xaphuong1["xaphuong"];
                $ID=rand(0,999);
                $sql="INSERT INTO `khachhang`(`ID`, `sdt`, `hoten`, `ngaysinh`, `gioitinh`, `diachi`, `quoctich`, `tinhthanh`, `quanhuyen`, `xaphuong`) VALUES ('$ID','$sdt','$hoten','$ngaysinh','$gioitinh','$diachi','$quoctich','$tinhthanh','$quanhuyen','$xaphuong')";
                add($sql);
                if($thongtinthem!="")
                {
                    $sql1="INSERT INTO `khaibao`(`quoctich`, `tinhthanh`, `quanhuyen`, `xaphuong`, `diachi`, `ho`, `sot`, `dauhong`, `matvi`, `met`, `khotho`, `trieuchungkhac`, `maccovid`, `tiepxuc`, `dituquocgia`, `cachly`, `giadinh`, `datungdinhcovid`, `thongtinthem`, `ID_khach`, ngaykhaibao) VALUES ('$quoctich','$tinhthanh','$quanhuyen','$xaphuong','$diachi','$ho','$sot','$dauhong','$matvi','$met','$khotho','$trieuchung','$maccovid','$tiepxuccovid','$tunoicocovid','$cachly','$vegiadinh','$datungdieutricovid','$thongtinthem','$ID', CURDATE())";
                    add($sql1);
                }
                else{
                    $sql1="INSERT INTO `khaibao`(`quoctich`, `tinhthanh`, `quanhuyen`, `xaphuong`, `diachi`, `ho`, `sot`, `dauhong`, `matvi`, `met`, `khotho`, `trieuchungkhac`, `maccovid`, `tiepxuc`, `dituquocgia`, `cachly`, `giadinh`, `datungdinhcovid`, `ID_khach`, ngaykhaibao) VALUES ('$quoctich','$tinhthanh','$quanhuyen','$xaphuong','$diachi','$ho','$sot','$dauhong','$matvi','$met','$khotho','$trieuchung','$maccovid','$tiepxuccovid','$tunoicocovid','$cachly','$vegiadinh','$datungdieutricovid','$ID', CURDATE())";
                    add($sql1);
                }
                unset($_SERVER["maxacthuc"]);
                header('Location: index.php?thanhcong');
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