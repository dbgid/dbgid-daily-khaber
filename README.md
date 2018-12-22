# Daily Khaber And News Line Bot
New Release Bot Daily Khaber<br>
# Installations
git clone https://github.com/dbgid/dbgid-daily-khaber.git [enter]<br>
# Usage
Silahkan snif/capture pada appsnya, ambil data capture<br>
sebagai berikut:<br>
• Token : dapat di ambil pada bagian request header<br>
• Session : dapat di ambil pada bagian request header<br>
• Data : dapat di ambil pada bagian request header body<br>
apabila data di atas sudah didapat, silahkan masukan di file config.php<br>
dan apabila sudah siap data yg di perlukan, tinggal eksekusi saja<br>
cd dbgid-daily-khaber [enter]<br>
php run.php [enter]<br>
pastikan kalian sudah mengisi data yang di perlukan dengan benar<br>
apabila belum silahkan isi data nya di file config.php<br>
nano config.php [enter]<br>
isi config sesuai data yang di perlukan<br>
• $khaber_token='isi dengan token';<br>
• $khaber_session='isi dengan session';<br>
• $khaber_data='isi dengan data yg di dapat';<br>
apabila di rasa sudah benar, silahkan tekan CTRL+O (menulis ke file) lalu tekan CTRL+X (untuk selesai edit)<br>
# Notice
Bot ini tidak menampilkan output/hasil apapun di terminal linux<br>
kalian bisa lihat hasil nya pada apps nya di menu "wallet"<br>
bot akan berjalan apabila kalian benar memasukan data yg di butuhkan dgn benar<br>
bot tidak akan berjalan apabila kalian salah memasukan data yg di butuhkan<br>
sekali lagi saya jelaskan, bot ini tidak menampilkan output apapun<br>
karena server apps di enkripsi menggunakan module okio base64 encode<br>
sampai sejauh ini saya belum bisa mendecode module okio base64<br>
karena berbeda dengan base64 basic layak nya di PHP<br>
jadi saya harap, untuk dapat menggunkan bot ini, harap teliti pada memasukan di file config<br>
karena data post di enkripsi dengan base64 ya guys.
