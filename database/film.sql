CREATE DATABASE IF NOT EXISTS film
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;
USE film;
CREATE TABLE IF NOT EXISTS judulfilm (
 id INT AUTO_INCREMENT PRIMARY KEY,
 kode VARCHAR(20) NOT NULL UNIQUE,
 judul VARCHAR(100) NOT NULL,
 penulis VARCHAR(100) NOT NULL,
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
INSERT INTO judulfilm (kode, judul, penulis) VALUES
('1090', 'ketika titut bersedih', 'titut'),
('1091', '1 kaka 7 titut', 'titut'),
('1092', 'ada apa dengan titut', 'titut');