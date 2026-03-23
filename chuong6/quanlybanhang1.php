<?php
$host = "localhost";
$user = "root"; 
$pass = "";     
$dbname = "quanlybanhang1";

$conn = mysqli_connect($host, $user, $pass); // Kết nối server trước
if (!$conn) {
    die("Kết nối server thất bại: " . mysqli_connect_error());
}

// Tạo Database nếu chưa có
mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS $dbname");
mysqli_select_db($conn, $dbname);

//======================== NHASANXUAT ========================
$sql1 = "CREATE TABLE IF NOT EXISTS NHASANXUAT (
    mansx VARCHAR(2) PRIMARY KEY,
    tennsx VARCHAR(40),
    quocgia VARCHAR(20)
)";
mysqli_query($conn, $sql1);

// Dữ liệu bảng NHASANXUAT
$ins_nsx = "INSERT IGNORE INTO NHASANXUAT VALUES 
('DE', 'DELL', 'Hoa Kỳ'),
('AS', 'ASUS', 'Đài Loan'),
('LE', 'LENOVO', 'Trung Quốc'),
('TO', 'TOSHIBA', 'Nhật Bản')";
mysqli_query($conn, $ins_nsx);


// ================== HANGHOA ==================
$sql2 = "CREATE TABLE IF NOT EXISTS HANGHOA (
    mahang VARCHAR(4) PRIMARY KEY,
    tenhang VARCHAR(40),
    mansx VARCHAR(2),
    namsx INT,
    gia INT,
    FOREIGN KEY (mansx) REFERENCES NHASANXUAT(mansx)
)";
mysqli_query($conn, $sql2);

// Dữ liệu bảng HANGHOA
$ins_hanghoa = "INSERT IGNORE INTO HANGHOA VALUES
('DE01','Dell Vostro','DE',2015,650),
('DE02','Dell Inspiron','DE',2015,550),
('AS01','Asus TUF','AS',2017,520),
('AS02','Asus Vivobook','AS',2017,580),
('LE01','Lenovo Thinkpad','LE',2019,750),
('TO01','Toshiba Satellite','TO',2014,630),
('LE02','Lenovo Legion','LE',2020,540),
('LE03','Lenovo Yoga','LE',2020,600)";
mysqli_query($conn, $ins_hanghoa);


// =================== KHACHHANG ==================
$sql3 = "CREATE TABLE IF NOT EXISTS KHACHHANG (
    makh VARCHAR(4) PRIMARY KEY,
    tenkh VARCHAR(30),
    namsinh INT,
    dienthoai VARCHAR(10),
    diachi VARCHAR(50)
)";
mysqli_query($conn, $sql3);

// Dữ liệu bảng KHACHHANG
$ins_khachhang = "INSERT IGNORE INTO KHACHHANG VALUES
('K001','Nguyễn Thị Lan',1980,'0913123456','Bạc Liêu'),
('K002','Ngô Thanh Minh',1985,'0913024357','Vĩnh Lợi'),
('K003','Lâm Văn Thanh',1979,'0913123457','Giá Rai'),
('K004','Dương Thu Thủy',1995,'0913024358','Hồng Dân'),
('K005','Nguyễn Thị Xuân',1987,'0903223344','Phước Long'),
('K006','Huỳnh Mẫn Đạt',1975,'0989122112','Bạc Liêu'),
('K007','Lâm Hoài Bảo',1990,'0944556677','Bạc Liêu'),
('K008','Hồ Trung Tín',2000,'0944119999','Phước Long'),
('K009','Trương Xuân Thi',2001,'0909000111','Vĩnh Lợi'),
('K010','Ngô Văn Nam',2001,'0909000112','Giá Rai')";
mysqli_query($conn, $ins_khachhang);


// =================== HOADON ==================
$sql4 = "CREATE TABLE IF NOT EXISTS HOADON (
    mahd VARCHAR(3),
    makh VARCHAR(4),
    mahang VARCHAR(4),
    soluong INT,
    thanhtien INT,
    PRIMARY KEY (mahd, makh, mahang)
)";
mysqli_query($conn, $sql4);

// Dữ liệu bảng HOADON
$ins_hoadon = "INSERT IGNORE INTO HOADON VALUES
('001','K001','DE01',2,1300),
('001','K001','DE02',1,550),
('002','K002','LE01',5,3750),
('002','K002','LE02',3,1620),
('003','K002','TO01',1,630),
('004','K003','DE01',2,1300),
('005','K004','AS01',4,2080),
('005','K004','LE01',6,4500),
('005','K004','LE02',8,4320),
('006','K005','AS01',5,2600)";
mysqli_query($conn, $ins_hoadon);


// =================== TONKHO ==================
$sql5 = "CREATE TABLE IF NOT EXISTS TONKHO (
    mahang VARCHAR(4),
    tenhang VARCHAR(40),
    mansx VARCHAR(2),
    namsx INT,
    gia INT,
    soluong INT
)";
mysqli_query($conn, $sql5);

// Thêm dữ liệu bảng TONKHO
$ins_tonkho = "INSERT IGNORE INTO TONKHO (mahang, tenhang, mansx, namsx, gia, soluong) VALUES 
('DE01', 'Dell Vostro', 'DE', 2015, 650, 20),
('DE02', 'Dell Inspiron', 'DE', 2015, 550, 30)";
mysqli_query($conn, $ins_tonkho);

echo "<b>Thông báo:</b> Hệ thống đã khởi tạo cấu trúc và dữ liệu thành công!<br><hr>";


// Cập nhật SĐT khách K007
mysqli_query($conn, "UPDATE KHACHHANG SET dienthoai = '0912131415' WHERE makh = 'K007'");

// Xóa khách hàng K010
mysqli_query($conn, "DELETE FROM KHACHHANG WHERE makh = 'K010'");

// Hiển thị hàng hóa của nhà sản xuất DELL
echo "<h3>Danh sách hàng hóa của nhà sản xuất DELL:</h3>";
$res = mysqli_query($conn, "SELECT * FROM HANGHOA WHERE mansx = 'DE'");

if (mysqli_num_rows($res) > 0) {
    while($row = mysqli_fetch_assoc($res)) {
        echo "- Mã: " . $row["mahang"]. " | Tên: " . $row["tenhang"]. " | Giá: " . $row["gia"]. "<br>";
    }
} else {
    echo "Không tìm thấy dữ liệu.";
}

mysqli_close($conn);
?>