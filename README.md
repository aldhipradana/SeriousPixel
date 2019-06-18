# Apa saja yang digunakan
PHP
MySQL
Jquery
Sweetalert
EaseScrollJs

#NOTE IMPORTANT DATABASE
SETIAP MENAMBAH/MENGUBAH TABLE MAUPUN ISI FIELD, INGAT UNTUK SELALU UPDATE seriouspixel.sql DENGAN CARA IMPORT DATABASE TERBARU, MAKASIH 

# How To use

Untuk membuka halaman admin 
/admin

BILA TIDAK BISA LOGIN
IMPORT DATABASE TERBARU DAN BUAT AKUN USER DI TABLE SPUSER

# SeriousPixel

!!!! Inget selalu apdet di branch development !!!


--Command List--

#Buat atur login username sama email pake:
  git config --global user.name "Your Username" 
  git config --global user.email "Your Email"

#Buat Clone Repository pake:
  git clone "https://github.com/rhadana/SeriousPixel"

#Buat Liat status file pake:
  git status

#Buat pindah branch pake:
  git checkout -b "namabranch"   | contoh: $ git checkout -b development

!!! Setelah pindah branch inget di fetch dulu baru di pull !!!

#Buat fetch pake:
 git fetch 
 
#Buat pull pake:
  git pull origin development    |  origin boleh disi ato ngga


!!! Setela edit inget di fetch lagi sama liat statusnya kalo udah pull dulu baru add file dan commit !!! 

#Buat add file ke commi pake:
  git add .   |   Harus ada titik nya !!!

#Buat commit pake:
  git commit -m "Isi descripsi yang kamu edit apa aja dengan singkat dan jelas"

#Buat Push pake:
  git push origin development 
   --Atau--
  git push development


!!! SETELAH DI PUSH INGET DI FETCH SAMA PULL LAGI + CHECK STATUSNYA !!!

### DESIGN PATTERN ##

UNTUK SECTION DI BODY GUNAKAN PATTERN SEPERTI :  
section.NamaPageSection-Section-KeBerapa, diikuti dengan row column    
Contoh : Halaman About  
Section.AboutSection-1 .row .column  
Usahakan untuk styling pada bagian column dulu, jika terpaksa/dibutuhkan baru dilanjutkan ke columnnya lalu ke section.  
  
Penamaan/Penambahan Image :   
GUNAKAN PATTERN SEPERTI   
bg-NamaPage-NamaSectionYangMenggunakan  
image-NamaPage-NamaSectionYangMenggunakan  

### PENTING !!! ###
### SELALU PULL DULU SEBELUM PUSH  ###

