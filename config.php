<?php
/**Config File Bot
* Pastikan snif/ambil capture di path /apps/daily_khaber/api/add_coin.php (untuk daily khaber)
* /apps/news/api/add_coin.php (untuk newsline)
* ambil data yang di perlukan sebagai berikut
* token
* session
* data (pada request header body copy semua)
* Dan apabila session sudah expired
* Silahkan snif lagi data capture nya
* Cukup ganti session dan data aja, token masih sama
/*

/** Config bot Daily Khaber */
//contoh pengisian token
//$khaber_token='cukup isi token yg didapat dari capture';
$khaber_token='xxxxxxxxxxxxxxx';
//contoh penisian session
//$khaber_session='Etxxxxxxxxxxxxxx==';
$khaber_session='xxxxxxxxxx';
//contoh pengisian data
//$khaber_data='data=xxxxxxx&d_info=xxxxxxxxxx';
$khaber_data='xxxxxxxxxxxxxxx';


/** Config bot News Line */
//contoh pengisian token
//$news_token='cukup isi token yang di dapat dari capture';
$news_token='xxxxxxxxxxxxxxx';
//contoh penisian session
//$news_session='Etxxxxxxxxxxxxxx==';
$news_session='xxxxxxxxxx';
//contoh pengisian data
//$news_data='data=xxxxxxx&d_info=xxxxxxxxxx';
$news_data='xxxxxxxxxxxxxxx';


?>