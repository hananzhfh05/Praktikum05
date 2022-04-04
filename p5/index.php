<?php
require_once 'class_dispenser.php';

$awal = new Dispenser('hana',1,1);
echo 'Volume awal galon: '.$awal->isi_awal();
echo '<br/>Volume pergelas: '.$awal->volume_gelas();
echo '<br/>Harga pergelas: '.$awal->harga_gelas();

$pembeli1 = new Dispenser('zai',2,1);
echo '<br/><br/>'.$pembeli1->nama.' membeli'.$pembeli1->jumlahBeli.' '.$pembeli1->nama_Minuman();
echo '<br/>Total pembayaran: '.$pembeli1->format_uang($pembeli1->Bayar());
echo '<br/>Sisa volume galon '.$pembeli1->nama_Minuman().' sekarang adalah '.$pembeli1->berkurang().' ml';
echo '<br/>Total penghasilan galon: '.$pembeli1->format_uang($pembeli1->penghasilan());

$pembeli2 = new Dispenser('larry',3,2);
echo '<br/><br/>'.$pembeli2->nama.' membeli'.$pembeli2->jumlahBeli.' '.$pembeli2->nama_Minuman();
echo '<br/>Total pembayaran: '.$pembeli2->format_uang($pembeli2->Bayar());
echo '<br/>Sisa volume galon '.$pembeli2->nama_Minuman().' sekarang adalah '.$pembeli2->berkurang().' ml';
echo '<br/>Total penghasilan galon: '.$pembeli2->format_uang($pembeli2->penghasilan());

$pembeli3 = new Dispenser('lula',3,1);
echo '<br/><br/>'.$pembeli3->nama.' membeli'.$pembeli3->jumlahBeli.' '.$pembeli3->nama_Minuman();
echo '<br/>Total pembayaran: '.$pembeli3->format_uang($pembeli3->Bayar());
echo '<br/>Sisa volume galon '.$pembeli3->nama_Minuman().' sekarang adalah '.$pembeli3->berkurang().' ml';
echo '<br/>Total penghasilan galon: '.$pembeli3->format_uang($pembeli3->penghasilan());


?>