<?php
$conn = mysqli_connect("localhost", "root", "", "quanlybanhang");

if (!$conn) {
    die("Lỗi kết nối: " . mysqli_connect_error());
}

// ================== HANGHOA ==================
$sql1 = "INSERT INTO hanghoa VALUES
('DE01','Dell Vostro','DE',2015,650),
('DE02','Dell Inspiron','DE',2015,550),
('AS01','Asus TUF','AS',2017,520),
('AS02','Asus Vivobook','AS',2017,580),
('LE01','Lenovo Thinkpad','LE',2019,750),
('TO01','Toshiba Satellite','TO',2014,630),
('LE02','Lenovo Legion','LE',2020,540),
('LE03','Lenovo Yoga','LE',2020,600)
";

// ================== KHACHHANG ==================
$sql2 = "INSERT INTO khachhang VALUES
('K001','Nguyễn Thị Lan',1980,'0913123456','Bạc Liêu'),
('K002','Ngô Thanh Minh',1985,'0913024357','Vĩnh Lợi'),
('K003','Lâm Văn Thanh',1979,'0913123457','Giá Rai'),
('K004','Dương Thu Thủy',1995,'0913024358','Hồng Dân'),
('K005','Nguyễn Thị Xuân',1987,'0903223344','Phước Long'),
('K006','Huỳnh Mẫn Đạt',1975,'0989122112','Bạc Liêu'),
('K007','Lâm Hoài Bảo',1990,'0944556677','Bạc Liêu'),
('K008','Hồ Trung Tín',2000,'0944119999','Phước Long'),
('K009','Trương Xuân Thi',2001,'0909000111','Vĩnh Lợi'),
('K010','Ngô Văn Nam',2001,'0909000112','Giá Rai')
";

// ================== NHASANXUAT ==================
$sql3 = "INSERT INTO nhasanxuat VALUES
('DE','DELL','Hoa Kỳ'),
('AS','ASUS','Đài Loan'),
('LE','LENOVO','Trung Quốc'),
('TO','TOSHIBA','Nhật Bản')
";

// ================== HOADON ==================
$sql4 = "INSERT INTO hoadon VALUES
('001','K001','DE01',2,1300),
('001','K001','DE02',1,550),
('002','K002','LE01',5,3750),
('002','K002','LE02',3,1620),
('003','K002','TO01',1,630),
('004','K003','DE01',2,1300),
('005','K004','AS01',4,2080),
('005','K004','LE01',6,4500),
('005','K004','LE02',8,4320),
('006','K005','AS01',5,2600)
";

//=================== TONKHO ==================
$sql5 = "INSERT INTO tonkho VALUES
('DE01','Dell Vostro','DE',2015,650,20),
('DE02','Dell Inspiron','DE',2015,550,30)";

// ================== CHẠY ==================
if (
    mysqli_query($conn, $sql1) &&
    mysqli_query($conn, $sql2) &&
    mysqli_query($conn, $sql3) &&
    mysqli_query($conn, $sql4) &&
    mysqli_query($conn, $sql5)
) {
    echo "Thêm dữ liệu thành công!";
} else {
    echo "Lỗi: " . mysqli_error($conn);
}

mysqli_close($conn);
?>