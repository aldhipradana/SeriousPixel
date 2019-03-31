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
