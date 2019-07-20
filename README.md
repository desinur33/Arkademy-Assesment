# fajrulaulia-Arkademy-B11K4
Jawaban Test Bootcamp Arkademy Batch 11 Kloter 4

Soal No 1 : JSON adalah Format dalam pertukaran data pada client dan server pada rest API, JSON sangat ringan daripada para Pendahulunya seperti XML, Kemudian Untuk Soal Nomor satu Harus Menggunakan Node JS yang berbasis Online, Kunjungi situsnya disini https://repl.it/languages/nodejs untukk menjalankan kode saya (soal1.js)

Soal No 2 : Soal Nomor dua harus menggunakan PHP Intepreter Online, kunjungi situsnya disini https://repl.it/languages/php untuk menjalankan kode saya(soal2.php) return nya adalah seharusnya true dan false, tapi saya mereturn bool(Boolean)nya menggunakan vardump(Check Parameter di line 28-34)

Soal No 3 : Pada Soal Nomor 3, kakak bisa menjalankan langsung di https://repl.it/languages/php , Kemudian saaat run, pada layar sebelah kanan pada tester online, masukan inputan string (sesuai contoh I/O nomor 3, saya memasukan angka Programit dan programmer IT, semuanya work pada testernya(soal3.php).

Soal No 4 : Pada soal nomor 4, Parameter dapat kakak lihat pada line 57, disana parameternya terisii sesuai dengan contoh pada soalnya, pada soal di nomor 4 agak membingungkan, unutk meminimalisir, saya menggunakan fungsi jarak, ada dua fungsi jarak saya buatcpertama fungsi jarak sesuai output(Jarak pertama 1KM) dan fungsi jarak sesuai dengan fungsi soal(Pada Jarak awal menggunakan 1.5km), defaultnya saya menggunakan output yang menggunakan jarak 1 sehingga hasil sesuai dengan print out yang diminta, Kakak bisa memasukan kodenya ke tester Online NodeJS (soal4.js) pada https://repl.it/languages/nodejs 

Soal No 5 : Pada soal nomor, saya mencoba print jumlah hasil dari pertambahan bilangan Fibonacci, sub soalnya ada pada line 55 dan 56(kakak dapat set Parameternya), disini saya menggunakan Javascript, seingga kaka dapat melakukan tester di https://repl.it/languages/nodejs 

soal no 6 : pada soal Nomor 6, Saya berusaha mengeluarkan Output yang sesuai dengan output pada soal, untuk soal nomor 6, kakak dapat melakukan testnya pada https://repl.it/languages/php


SOAL NOMOR 7

=======================================================================
SOAL 7 A
Soal 7 A
Query:
create database arka_db;
use arka_db;

CREATE TABLE category (
  id int(11) NOT NULL AUTO_INCREMENT,
  salary int(11) DEFAULT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE nama (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(25) DEFAULT NULL,
  id_work int(11) DEFAULT NULL,
  id_salary int(11) DEFAULT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE work (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(25) DEFAULT NULL,
  id_salary int(11) DEFAULT NULL,
  PRIMARY KEY (id)
);

INSERT INTO category(salary) VALUES(10000000);
INSERT INTO category(salary) VALUES(12000000);

INSERT INTO nama(name, id_work, id_salary) VALUES('Rebecca', 1, 1);
INSERT INTO nama(name, id_work, id_salary) VALUES('Vita', 2, 2);

INSERT INTO work(name, id_salary) VALUES('FrontEnd Dev', 1);
INSERT INTO work(name, id_salary) VALUES('BackEnd Dev', 2);


select * from nama;
select * from category;
select * from work;


select nama.name as name, work.name as work, category.salary from nama
inner join work on nama.id_work=work.id
inner join category on nama.id_salary=category.id;

Hasil:
category
![alt text](https://raw.githubusercontent.com/fajrulaulia/fajrulaulia-Arkademy-B11K4/master/soal7/7a/ss/category.png)

work
![alt text](https://raw.githubusercontent.com/fajrulaulia/fajrulaulia-Arkademy-B11K4/master/soal7/7a/ss/work.png)

nama
![alt text](https://raw.githubusercontent.com/fajrulaulia/fajrulaulia-Arkademy-B11K4/master/soal7/7a/ss/nama.png)

HASIL QUERY
![alt text](https://raw.githubusercontent.com/fajrulaulia/fajrulaulia-Arkademy-B11K4/master/soal7/7a/ss/query.png)
=======================================================================
SUB Soal No 7B :

home
![alt text](https://raw.githubusercontent.com/fajrulaulia/fajrulaulia-Arkademy-B11K4/master/soal7/7b/ss/home.png)

add
![alt text](https://raw.githubusercontent.com/fajrulaulia/fajrulaulia-Arkademy-B11K4/master/soal7/7b/ss/add.png)

hapus
![alt text](https://raw.githubusercontent.com/fajrulaulia/fajrulaulia-Arkademy-B11K4/master/soal7/7b/ss/hapus.png)

edit
![alt text](https://raw.githubusercontent.com/fajrulaulia/fajrulaulia-Arkademy-B11K4/master/soal7/7b/ss/edit.png)

======================================================
