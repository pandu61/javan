CREATE TABLE keluarga_budi (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    nama varchar(50) not null,
    jenis_kelamin varchar(1) not null,
    generasi_ke integer,
    id_ortu integer null
); 

