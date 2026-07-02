-- ==========================================
-- TẠO DATABASE
-- ==========================================

CREATE DATABASE IF NOT EXISTS nhanvien
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE nhanvien;

-- ==========================================
-- TẠO BẢNG NHÂN VIÊN
-- ==========================================

CREATE TABLE IF NOT EXISTS nhanvien
(
    id INT AUTO_INCREMENT PRIMARY KEY,

    maNV VARCHAR(20) NOT NULL UNIQUE,

    hoTen VARCHAR(100) NOT NULL,

    gioiTinh ENUM('Nam','Nữ') NOT NULL,

    ngaySinh DATE NOT NULL,

    diaChi VARCHAR(255) NOT NULL,

    sdt VARCHAR(15) NOT NULL,

    email VARCHAR(100) NOT NULL,

    chucVu VARCHAR(100) NOT NULL,

    luong DECIMAL(15,2) NOT NULL,

    ngayTao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ==========================================
-- DỮ LIỆU MẪU
-- ==========================================

INSERT INTO nhanvien
(maNV, hoTen, gioiTinh, ngaySinh, diaChi, sdt, email, chucVu, luong)

VALUES

('NV001',
'Nguyễn Văn An',
'Nam',
'2001-05-10',
'Hà Nội',
'0987654321',
'an@gmail.com',
'Nhân viên',
8500000);

INSERT INTO nhanvien
(maNV, hoTen, gioiTinh, ngaySinh, diaChi, sdt, email, chucVu, luong)

VALUES

('NV002',
'Trần Thị Bình',
'Nữ',
'2000-09-15',
'Hồ Chí Minh',
'0912345678',
'binh@gmail.com',
'Kế toán',
12000000);

INSERT INTO nhanvien
(maNV, hoTen, gioiTinh, ngaySinh, diaChi, sdt, email, chucVu, luong)

VALUES

('NV003',
'Lê Minh Cường',
'Nam',
'1999-12-01',
'Đà Nẵng',
'0909888777',
'cuong@gmail.com',
'Trưởng phòng',
18000000);

INSERT INTO nhanvien
(maNV, hoTen, gioiTinh, ngaySinh, diaChi, sdt, email, chucVu, luong)

VALUES

('NV004',
'Phạm Thu Hà',
'Nữ',
'2002-03-18',
'Cần Thơ',
'0977666555',
'ha@gmail.com',
'Nhân viên',
9000000);

INSERT INTO nhanvien
(maNV, hoTen, gioiTinh, ngaySinh, diaChi, sdt, email, chucVu, luong)

VALUES

('NV005',
'Hoàng Gia Huy',
'Nam',
'1998-11-22',
'Hải Phòng',
'0933555777',
'huy@gmail.com',
'Quản lý',
20000000);