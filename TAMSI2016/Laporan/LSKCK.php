<?php
$nama_dokumen='Laporan SKCK';
include_once "../mpdf60/mpdf.php";
$mpdf = new mPDF('utf-8', 'A4'); 
ob_start();

include "../includes/config.php";
$config = new Config();
$db = $config->getConnection();

include '../includes/skck.inc.php';
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
$eks = new skck($db);
$eks->nSKCK = $id;
$eks->readOne();

?>
<html><head><meta content="text/html; charset=UTF-8" http-equiv="content-type"><style type="text/css">.lst-kix_lou0jbxibp5-7>li{counter-increment:lst-ctn-kix_lou0jbxibp5-7}.lst-kix_lou0jbxibp5-4>li{counter-increment:lst-ctn-kix_lou0jbxibp5-4}ol.lst-kix_lou0jbxibp5-6.start{counter-reset:lst-ctn-kix_lou0jbxibp5-6 0}.lst-kix_lou0jbxibp5-1>li{counter-increment:lst-ctn-kix_lou0jbxibp5-1}ol.lst-kix_lou0jbxibp5-1.start{counter-reset:lst-ctn-kix_lou0jbxibp5-1 0}.lst-kix_lou0jbxibp5-5>li{counter-increment:lst-ctn-kix_lou0jbxibp5-5}.lst-kix_lou0jbxibp5-0>li:before{content:"" counter(lst-ctn-kix_lou0jbxibp5-0,lower-latin) ". "}ol.lst-kix_lou0jbxibp5-3.start{counter-reset:lst-ctn-kix_lou0jbxibp5-3 0}ol.lst-kix_lou0jbxibp5-8.start{counter-reset:lst-ctn-kix_lou0jbxibp5-8 0}.lst-kix_lou0jbxibp5-8>li{counter-increment:lst-ctn-kix_lou0jbxibp5-8}ol.lst-kix_lou0jbxibp5-5.start{counter-reset:lst-ctn-kix_lou0jbxibp5-5 0}ol.lst-kix_lou0jbxibp5-0.start{counter-reset:lst-ctn-kix_lou0jbxibp5-0 0}.lst-kix_lou0jbxibp5-5>li:before{content:"" counter(lst-ctn-kix_lou0jbxibp5-5,decimal) ". "}.lst-kix_lou0jbxibp5-6>li:before{content:"" counter(lst-ctn-kix_lou0jbxibp5-6,lower-latin) ". "}ol.lst-kix_lou0jbxibp5-7.start{counter-reset:lst-ctn-kix_lou0jbxibp5-7 0}.lst-kix_lou0jbxibp5-7>li:before{content:"" counter(lst-ctn-kix_lou0jbxibp5-7,lower-roman) ". "}.lst-kix_lou0jbxibp5-3>li:before{content:"" counter(lst-ctn-kix_lou0jbxibp5-3,lower-latin) ". "}.lst-kix_lou0jbxibp5-4>li:before{content:"" counter(lst-ctn-kix_lou0jbxibp5-4,lower-roman) ". "}ol.lst-kix_lou0jbxibp5-2.start{counter-reset:lst-ctn-kix_lou0jbxibp5-2 0}.lst-kix_lou0jbxibp5-1>li:before{content:"" counter(lst-ctn-kix_lou0jbxibp5-1,lower-roman) ". "}.lst-kix_lou0jbxibp5-2>li:before{content:"" counter(lst-ctn-kix_lou0jbxibp5-2,decimal) ". "}.lst-kix_lou0jbxibp5-8>li:before{content:"" counter(lst-ctn-kix_lou0jbxibp5-8,decimal) ". "}ol.lst-kix_lou0jbxibp5-2{list-style-type:none}ol.lst-kix_lou0jbxibp5-1{list-style-type:none}.lst-kix_lou0jbxibp5-2>li{counter-increment:lst-ctn-kix_lou0jbxibp5-2}ol.lst-kix_lou0jbxibp5-0{list-style-type:none}ol.lst-kix_lou0jbxibp5-6{list-style-type:none}ol.lst-kix_lou0jbxibp5-5{list-style-type:none}ol.lst-kix_lou0jbxibp5-4{list-style-type:none}ol.lst-kix_lou0jbxibp5-4.start{counter-reset:lst-ctn-kix_lou0jbxibp5-4 0}ol.lst-kix_lou0jbxibp5-3{list-style-type:none}ol.lst-kix_lou0jbxibp5-8{list-style-type:none}ol.lst-kix_lou0jbxibp5-7{list-style-type:none}.lst-kix_lou0jbxibp5-3>li{counter-increment:lst-ctn-kix_lou0jbxibp5-3}.lst-kix_lou0jbxibp5-0>li{counter-increment:lst-ctn-kix_lou0jbxibp5-0}.lst-kix_lou0jbxibp5-6>li{counter-increment:lst-ctn-kix_lou0jbxibp5-6}ol{margin:0;padding:0}table td,table th{padding:0}.c15{border-right-style:solid;padding:5pt 5pt 5pt 5pt;border-bottom-color:#000000;border-top-width:0pt;border-right-width:0pt;border-left-color:#000000;vertical-align:top;border-right-color:#000000;border-left-width:0pt;border-top-style:solid;border-left-style:solid;border-bottom-width:0pt;width:18pt;border-top-color:#000000;border-bottom-style:solid}.c9{border-right-style:solid;padding:5pt 5pt 5pt 5pt;border-bottom-color:#000000;border-top-width:0pt;border-right-width:0pt;border-left-color:#000000;vertical-align:top;border-right-color:#000000;border-left-width:0pt;border-top-style:solid;border-left-style:solid;border-bottom-width:0pt;width:195pt;border-top-color:#000000;border-bottom-style:solid}.c7{border-right-style:solid;padding:5pt 5pt 5pt 5pt;border-bottom-color:#000000;border-top-width:0pt;border-right-width:0pt;border-left-color:#000000;vertical-align:top;border-right-color:#000000;border-left-width:0pt;border-top-style:solid;border-left-style:solid;border-bottom-width:0pt;width:331.5pt;border-top-color:#000000;border-bottom-style:solid}.c6{color:#000000;font-weight:400;text-decoration:none;vertical-align:baseline;font-size:11pt;font-family:"Arial";font-style:normal}.c17{color:#000000;font-weight:400;vertical-align:baseline;font-size:11pt;font-family:"Arial";font-style:normal}.c3{line-height:1.0;orphans:2;widows:2;text-align:justify;margin-right:0.2pt;height:11pt}.c13{orphans:2;widows:2;text-align:center;margin-right:0.2pt;height:11pt}.c10{margin-left:180pt;orphans:2;widows:2;text-align:justify;margin-right:0.2pt}.c12{color:#000000;font-weight:400;text-decoration:none;vertical-align:baseline;font-family:"Arial"}.c26{margin-left:-6pt;border-spacing:0;border-collapse:collapse;margin-right:auto}.c11{orphans:2;widows:2;text-align:justify;margin-right:0.2pt}.c23{margin-left:180pt;orphans:2;widows:2;margin-right:49.7pt}.c18{orphans:2;widows:2;text-align:center;margin-right:283.7pt}.c27{background-color:#ffffff;max-width:538.6pt;padding:28.3pt 28.3pt 28.3pt 28.3pt}.c19{padding-top:0pt;padding-bottom:0pt;text-align:left}.c14{orphans:2;widows:2;margin-right:0.2pt}.c20{padding:0;margin:0}.c1{text-decoration:underline;font-style:italic}.c24{margin-left:36pt;padding-left:0pt}.c28{margin-left:216pt;text-align:left}.c22{text-align:center}.c8{line-height:1.0}.c30{margin-left:216pt}.c5{text-decoration:underline}.c16{height:11pt}.c0{font-weight:700}.c31{height:35pt}.c2{font-style:italic}.c25{text-indent:36pt}.c4{font-size:10pt}.c21{height:0pt}.c29{height:30pt}.title{padding-top:0pt;color:#000000;font-size:26pt;padding-bottom:3pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}.subtitle{padding-top:0pt;color:#666666;font-size:15pt;padding-bottom:16pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}li{color:#000000;font-size:11pt;font-family:"Arial"}p{margin:0;color:#000000;font-size:11pt;font-family:"Arial"}h1{padding-top:20pt;color:#000000;font-size:20pt;padding-bottom:6pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}h2{padding-top:18pt;color:#000000;font-size:16pt;padding-bottom:6pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}h3{padding-top:16pt;color:#434343;font-size:14pt;padding-bottom:4pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}h4{padding-top:14pt;color:#666666;font-size:12pt;padding-bottom:4pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}h5{padding-top:12pt;color:#666666;font-size:11pt;padding-bottom:4pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}h6{padding-top:12pt;color:#666666;font-size:11pt;padding-bottom:4pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;font-style:italic;orphans:2;widows:2;text-align:left}</style></head><body class="c27"><p class="c18 c8"><span class="c0">POLRI DAERAH LAMPUNG</span></p><p class="c18 c8"><span class="c0">RESOR KOTA BANDAR LAMPUNG</span></p><p class="c18 c8"><span class="c0">SEKTOR TANJUNG KARANG BARAT</span></p><p class="c18 c8"><span class="c5 c4">Jl. Bung Tomo No. 08 Bandar Lampung 35151</span></p><p class="c18 c8 c16"><span class="c5"></span></p><p class="c8 c16 c18"><span class="c5"></span></p><p class="c14 c22 c8"><span class="c5 c0">SURAT KETERANGAN CATATAN KEPOLISISAN</span></p><p class="c14 c8 c22"><span class="c0">POLICE RECORD</span></p><p class="c14 c22 c8">
<span>Nomor : <?php echo $eks->nSKCK; ?></span></p><p class="c8 c13"><span></span></p><p class="c8 c14"><span>Diterangkan bersama ini bahwa :</span></p><p class="c14 c8"><span class="c2 c4">This is to certif that</span></p><a id="t.a1c52ae7a468d6a3144eba5052daeb2831c4f464"></a><a id="t.0"></a><table class="c26"><tbody><tr class="c29"><td class="c9" colspan="1" rowspan="1"><p class="c19 c8"><span class="c17 c5">Nama</span></p><p class="c19 c8"><span class="c12 c2 c4">Name</span></p></td><td class="c15" colspan="1" rowspan="1"><p class="c19 c8"><span class="c6">:</span></p></td><td class="c7" colspan="1" rowspan="1"><p class="c19 c8"><span class="c6"><?php echo $eks->Nama; ?></span></p></td></tr><tr class="c21"><td class="c9" colspan="1" rowspan="1"><p class="c19 c8"><span class="c17 c5">Jenis Kelamin</span></p><p class="c19 c8"><span class="c12 c2 c4">Sex</span></p></td><td class="c15" colspan="1" rowspan="1"><p class="c19 c8"><span class="c6">:</span></p></td><td class="c7" colspan="1" rowspan="1"><p class="c19 c8"><span class="c6"><?php echo $eks->JK; ?></span></p></td></tr><tr class="c21"><td class="c9" colspan="1" rowspan="1"><p class="c19 c8"><span class="c17 c5">Kebangsaan</span></p><p class="c8 c19"><span class="c12 c2 c4">Nationality</span></p></td><td class="c15" colspan="1" rowspan="1"><p class="c19 c8"><span class="c6">:</span></p></td><td class="c7" colspan="1" rowspan="1"><p class="c19 c8"><span class="c6"><?php echo $eks->Kebangsaan; ?></span></p></td></tr><tr class="c21"><td class="c9" colspan="1" rowspan="1"><p class="c19 c8"><span class="c17 c5">Agama</span></p><p class="c19 c8"><span class="c12 c2 c4">Religion</span></p></td><td class="c15" colspan="1" rowspan="1"><p class="c19 c8"><span class="c6">:</span></p></td><td class="c7" colspan="1" rowspan="1"><p class="c19 c8"><span class="c6"><?php echo $eks->agama; ?></span></p></td></tr><tr class="c21"><td class="c9" colspan="1" rowspan="1"><p class="c19 c8"><span class="c17 c5">Tempat dan tgl lahir</span></p><p class="c19 c8"><span class="c12 c2 c4">Place and date of birth</span></p></td><td class="c15" colspan="1" rowspan="1"><p class="c19 c8">
<span class="c6">:</span></p></td><td class="c7" colspan="1" rowspan="1"><p class="c19 c8"><span class="c6"><?php echo $eks->tempat; ?> / <?php echo $eks->year; ?>-<?php echo $eks->mont; ?>-<?php echo $eks->day; ?></span></p></td></tr><tr class="c31"><td class="c9" colspan="1" rowspan="1"><p class="c19 c8"><span class="c5 c17">Tempat tinggal sekarang</span></p><p class="c19 c8"><span class="c12 c2 c4">Current address</span></p></td><td class="c15" colspan="1" rowspan="1"><p class="c19 c8"><span class="c6">:</span></p></td><td class="c7" colspan="1" rowspan="1"><p class="c19 c8"><span class="c6"><?php echo $eks->alamat; ?></span></p></td></tr><tr class="c21"><td class="c9" colspan="1" rowspan="1"><p class="c19 c8"><span class="c17 c5">Pekerjaan</span></p><p class="c19 c8"><span class="c2 c4 c12">Occupation</span></p></td><td class="c15" colspan="1" rowspan="1"><p class="c19 c8"><span class="c6">:</span></p></td><td class="c7" colspan="1" rowspan="1"><p class="c19 c8"><span class="c6"><?php echo $eks->Pekerjaan; ?></span></p></td></tr><tr class="c21"><td class="c9" colspan="1" rowspan="1"><p class="c19 c8"><span class="c17 c5">Nomor Kartu Tanda Penduduk</span></p><p class="c19 c8"><span class="c12 c2 c4">Citizens card number</span></p></td><td class="c15" colspan="1" rowspan="1"><p class="c19 c8"><span class="c6">:</span></p></td><td class="c7" colspan="1" rowspan="1"><p class="c19 c8"><span class="c6"><?php echo $eks->ktp; ?></span></p></td></tr><tr class="c21"><td class="c9" colspan="1" rowspan="1"><p class="c19 c8"><span class="c17 c5">Nomor Pasport/KITAS/KITAP*</span></p><p class="c19 c8"><span class="c12 c2 c4">Passport/KITAS/KITAP number</span></p></td><td class="c15" colspan="1" rowspan="1"><p class="c19 c8"><span class="c6">:</span></p></td><td class="c7" colspan="1" rowspan="1"><p class="c19 c8"><span class="c6"><?php echo $eks->pasport; ?></span></p></td></tr><tr class="c21"><td class="c9" colspan="1" rowspan="1"><p class="c19 c8"><span class="c17 c5">Rumus sidik jari</span></p><p class="c19 c8"><span class="c12 c2 c4">Fingerprints Formula</span></p></td><td class="c15" colspan="1" rowspan="1"><p class="c19 c8"><span class="c6">:</span></p></td><td class="c7" colspan="1" rowspan="1"><p class="c19 c8"><span class="c6"><?php echo $eks->rtj; ?></span></p></td></tr></tbody></table><p class="c14 c8 c16"><span></span></p><p class="c14 c8"><span class="c5">Setelah diadakan penelitian hingga saat dikeluarkan surat keterangan ini yang didasari kepada</span><span>&nbsp;:</span></p><p class="c8"><span class="c2 c4">As of screening throught the issue here of by vurtue of:</span></p><ol class="c20 lst-kix_lou0jbxibp5-0 start" start="1"><li class="c8 c24"><span class="c5">Catatan Kepolisisan yang ada</span></li></ol><p class="c8 c25"><span class="c2 c4">Existing Police record</span></p><ol class="c20 lst-kix_lou0jbxibp5-0" start="2"><li class="c24 c8"><span class="c5">Surat Keterangan dari Kepala Desa /Lurah</span></li></ol><p class="c8"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="c2 c4">Information from local Authorithies</span></p><p class="c8"><span>&nbsp; &nbsp; </span><span class="c5">&nbsp;Bahwa nama tersebut diatas tidak memiliki catatan atau keterlibatan &nbsp;dalam kegiatan kriminal apapun</span></p><p class="c14 c8"><span>&nbsp; &nbsp; &nbsp;</span><span class="c2 c4">the bearer herof proves not to be involved in any criminal cases</span></p><p class="c11 c8"><span class="c2">&nbsp; &nbsp; &nbsp;</span><span class="c5">Selama ia berada di indonesia dari</span><span class="c2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span><span>: <?php echo $eks->yearINDSE; ?>-<?php echo $eks->montINDSE; ?>-<?php echo $eks->dayINDSE; ?>
</span></p><p class="c11 c8"><span class="c2">&nbsp; &nbsp; &nbsp;</span><span class="c2 c4">During his/her stay in Indonesia From &nbsp;</span><span class="c2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p><p class="c11 c8"><span class="c2">&nbsp; &nbsp; &nbsp;</span><span class="c5">Sampai dengan &nbsp;</span><span>&nbsp; &nbsp;</span><span class="c2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span><span>&nbsp;: <?php echo $eks->yearINDHING; ?>-<?php echo $eks->montINDHING; ?>-<?php echo $eks->dayINDHING; ?></span></p><p class="c8 c11"><span class="c2">&nbsp; &nbsp; &nbsp;</span><span class="c2 c4">To</span></p><p class="c11 c8 c30"><span class="c5">Keterangan ini diberikan berhubungan dengan perm</span><span class="c4 c5">ohonan</span></p><p class="c14 c8 c28"><span class="c2">This certificate is issued at request to the applicant</span><span class="c2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span></p><p class="c11 c8"><span class="c1">Untuk keperluan/menuju &nbsp;</span><span class="c2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span>:</span><span class="c2">&nbsp;</span><span class="c0"><?php echo $eks->keperluan; ?></span></p><p class="c11 c8"><span class="c1">Berlaku dari tanggal</span><span class="c2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span><span><?php echo $eks->dayBerlaku; ?></span></p><p class="c11 c8"><span class="c2 c4">Valid from</span></p><p class="c11 c8"><span class="c1">Sampai dengan</span><span class="c2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span><span><?php echo $eks->yearHingga; ?>-<?php echo $eks->montHingga; ?>-<?php echo $eks->dayHingga; ?></span></p><p class="c11 c8"><span class="c2">To &nbsp; &nbsp;</span><span class="c2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p><p class="c10 c8"><span>Dikeluarkan di &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Bandar Lampung</span></p><p class="c10 c8"><span class="c2 c4">Issued in</span></p><p class="c10 c8"><span>Pada tanggal &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</span><span class="c2">&nbsp;</span><span><?php echo $eks->dayBerlaku; ?></span></p><p class="c8 c10"><span class="c2 c4">On</span><span class="c2">&nbsp; </span><span class="c2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span></p><p class="c10 c8"><span>KEPALA KEPOLISIAN SEKTOR TANJUNG KARANG BARAT</span></p><p class="c3"><span></span></p><p class="c3"><span></span></p><p class="c3"><span></span></p><p class="c22 c8 c23"><span class="c5"><?php echo $eks->anggotapolsek; ?></span></p><p class="c23 c22 c8"><span>NRP <?php echo $eks->nrp; ?></span></p></body></html>
<?php
$html = ob_get_contents(); 
ob_end_clean();
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($nama_dokumen.".pdf" ,'I');
exit;
?>