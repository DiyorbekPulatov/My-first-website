<html>

<head>
 <meta name="robots" content="noindex, nofollow">
</head>

<body font=3 BGCOLOR=FFFFFF LINK=#0000CC VLINK=#0000CC TEXT=#000000 onKeyDown="keycntl1(event)">


<script language="javascript">                            // pass files from php array to javascript array; function?

    jfiles1 = new Array();
    jfiles2 = new Array();

    jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_000005_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_000030_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_001207_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_001230_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_002405_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_002430_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_003605_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_003630_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_004805_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_004830_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_012543_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_012530_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_013612_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_013630_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_014805_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_014830_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_020005_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_020030_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_021207_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_021230_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_022405_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_022430_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_023606_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_023630_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_024805_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_024830_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_031208_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_031230_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_032405_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_032430_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_033606_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_033630_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_034805_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_034830_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_040005_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_040030_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_041205_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_041230_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_042405_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_042430_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_043605_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_043630_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_044806_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_044830_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_050005_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_050030_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_051205_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_051230_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_052405_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_052430_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_053605_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_053630_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_054805_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_054830_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_060005_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_060030_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_061205_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_061230_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_062405_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_062430_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_063635_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_063630_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_064805_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_064830_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_070005_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_070030_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_071205_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_071230_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_072405_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_072430_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_073605_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_073630_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_074805_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_074830_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_080005_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_080030_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_081205_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_081230_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_082405_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_082430_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_083605_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_083630_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_084805_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_084830_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_091209_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_091230_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_092406_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_092430_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_093606_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_093630_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_094805_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_094830_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_100006_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_100030_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_101205_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_101230_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_102405_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_102430_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_103606_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_103630_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_104805_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_104830_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_110005_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_110030_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_111205_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_111230_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_112405_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_112430_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_113605_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_113630_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_114805_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_114830_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_120006_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_120030_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_121205_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_121230_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_122405_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_122430_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_123605_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_123630_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_124805_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_124830_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_132543_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_132530_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_133612_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_133630_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_134805_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_134830_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_140005_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_140030_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_141205_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_141230_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_142407_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_142430_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_143605_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_143630_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_144805_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_144830_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_151208_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_151230_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_152405_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_152430_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_153606_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_153630_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_154806_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_154830_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_160005_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_160030_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_161206_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_161230_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_162405_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_162430_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_163605_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_163630_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_164805_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_164830_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_170005_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_170030_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_171205_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_171230_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_172405_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_172430_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_173605_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_173630_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_174805_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_174830_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_180006_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_180030_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_181205_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_181230_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_182405_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_182430_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_183605_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_183630_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_184805_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_184830_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_190007_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_190030_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_191205_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_191230_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_192405_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_192430_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_193605_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_193630_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_194805_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_194830_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_200005_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_200030_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_201205_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_201230_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_202405_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_202430_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_203606_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_203630_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_204805_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_204830_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_205726_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_205730_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_211210_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_211230_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_212406_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_212430_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_213605_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_213630_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_214805_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_214830_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_220006_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_220030_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_221205_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_221230_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_222405_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_222430_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_223606_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_223630_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_231211_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_231230_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_232405_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_232430_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_233605_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_233630_goesxray.png" );
jfiles1.push("https://cdaw.gsfc.nasa.gov/images/soho/lasco/2017/10/18/20171018_234805_lasc2aia193.png" );
jfiles2.push("https://cdaw.gsfc.nasa.gov/images/goes/xrs/2017/10/18/20171018_234830_goesxray.png" );

</script>

<center><h2><BR><H2>2017/10/18</H2></h2></center>
<SCRIPT language="Javascript">
<!--

// Following variables control movie speed, labels, etc.
// should be dynamically determined

images1 = new Array(imax);
images2 = new Array(imax);
urls1= jfiles1;                               // gathers files from search
urls2= jfiles2;                               // gathers files from search
id= new Array(imax);

if (urls1.length >= urls2.length)
   { var imax = urls1.length; }                    
else
   { var imax = urls2.length; }

var inc = 1.50, delay = 500;
var num_loaded_images1 = 0;
var num_loaded_images2 = 0;
var frame=-1, speed=12;
var timeout_id=null;
var dir=1, playing=0, swingon=0, run=0;
var bname = "Reverse";
var url_path = ".";
var context = "frame00.png";
var ctitle ="test";
var url_context=context;
var iwidth=null, iheight=null;
var index=0;
var rstart=0
var rstop=imax-1



// -->
</SCRIPT>

<CENTER>

  <TABLE BORDER="3" CELLPADDING="3">
    <TR>
      <TD align="center">
          <img src = "./frame00.png" NAME=animation1 ALT="FRAME">
      </TD>
      <TD align="center">
          <img src = "./frame00.png" NAME=animation2 ALT="FRAME">
      </TD>
    </TR>
    <TR>
      <TD align="center">
	<div id="measure_left"></div>
      </TD>
      <TD align="center">
	<div id="measure_goes"></div>
      </TD>
    </TR>
  </TABLE> <P>



<!--  <FORM NAME="form">-->
  <FORM NAME="form">
    <FONT COLOR="Black">
      <INPUT TYPE=button VALUE="Start" onClick="start_play();">
      <INPUT TYPE=button VALUE="Pause" onClick="stop_play();">
      <INPUT TYPE=button VALUE="Faster" onClick="speed*=inc; show_speed();">
      <INPUT TYPE=button VALUE="Slower" onClick="speed/=inc; show_speed();">
      <INPUT TYPE=button NAME="direction" VALUE="Reverse" onClick="reverse();">
      <INPUT TYPE=button VALUE="Swing Mode:" onClick="swing_mode();">
      <INPUT TYPE=text VALUE="OFF" NAME="swing" SIZE=3>

      <INPUT TYPE=button VALUE="Rewind" onClick="rewind();">
      <INPUT TYPE=button VALUE="Next" onClick="next();">
      <INPUT TYPE=button VALUE="Prev." onClick="prev();">
      <INPUT TYPE=button VALUE="+10" onClick="p10();">
      <INPUT TYPE=button VALUE="-10" onClick="m10();">
    </FONT>

    <BR>

    Frame: <INPUT TYPE=text VALUE="" NAME="frame" SIZE=22>
    &nbsp; Speed:<INPUT TYPE=text VALUE="" NAME="rate" SIZE=4> (frames/sec)

    <BR>

    <INPUT TYPE=button NAME="set_start" VALUE="Current->Start"  onClick="cur2start();" >
      Range Start: <INPUT TYPE=text VALUE="-1" NAME="start_frame" SIZE=3>
    <INPUT TYPE=button NAME="set_stop" VALUE="Current->Stop"  onClick="cur2stop();">
      Range Stop: <INPUT TYPE=text VALUE="-1" NAME="stop_frame" SIZE=3>
    <INPUT TYPE=button NAME="clearrange" VALUE="Clear Range" onClick="clear_range();">

  </FORM>

</CENTER>

<P>

<SCRIPT LANGUAGE="JavaScript">
<!--

///////////////////////////////////////////////////////////////////////////

function load_img() {        // asynchronously load all images into cache
  for (i=0; i < imax ; i++) {
    id[i]=setTimeout("load_src()",delay);
  }
  return;
}
/////////////////////////////////////////////////////////////////////////////

function load_src() {      // load individual images into cache

  if (index < imax) {
    if (iwidth && iheight) {
      images1[index] = new Image(iwidth,iheight);
      images2[index] = new Image(iwidth,iheight);
    }
    else {
      images1[index] = new Image();
      images2[index] = new Image();
    }
    images1[index].onload=count_images1;
    images2[index].onload=count_images2;
    images1[index].src = urls1[index];
    images2[index].src = urls2[index];
    index++;
    }
 return;
}

/////////////////////////////////////////////////////////////////////////////

function clear_ids() {         // clear asynchronous id's
 for (i=0; i < imax ; i++) {clearTimeout(id[i]);}
 return;
}


/////////////////////////////////////////////////////////////////////////////

function count_images1() // count images as they are loaded into cache
{
 if (++num_loaded_images1 == imax) {
  clear_ids();
 } else {
  document.animation1.src=images1[num_loaded_images1-1].src;
  document.form.frame.value="Loading "+num_loaded_images1+" of "+imax; 
 }
}

function count_images2() // count images as they are loaded into cache
{
 if (++num_loaded_images2 == imax) {
  show_speed();
  clear_ids();
  animate();
 } else {
  document.animation2.src=images2[num_loaded_images2-1].src;
  document.form.frame.value="Loading "+num_loaded_images2+" of "+imax;
 }
}


///////////////////////////////////////////////////////////////////////////

function reset_display()      // update display/settings after range change
{
  var j;
  frame=rstart;
  j=frame+1;
  if (images1[frame].complete) {
    document.animation1.src=images1[frame].src;
    document.animation2.src=images2[frame].src;
    document.form.frame.value="Displaying "+j+" of "+imax;
  }
  playing=0;
}  
                    
///////////////////////////////////////////////////////////////////////////

function clear_range() // clear subrange
{
  rstart=0;
  frame=-1;
  rstop=imax-1;
  dir=1;
  playing=0;
  document.form.start_frame.value=rstart+1;
  document.form.stop_frame.value=rstop+1;
  document.form.direction.value="Reverse"; bname="Reverse";
  reset_display();
}

///////////////////////////////////////////////////////////////////////////
   
function cur2start() // set current frame to start range
{
  playing=0;
  rstart=frame;
  document.form.start_frame.value=rstart+1;
  if (rstart >= rstop) {
     rstop=imax-1;
     document.form.stop_frame.value=rstop+1;
  }
}
                                     
///////////////////////////////////////////////////////////////////////////

function cur2stop() // set current frame to stop range
{
  playing=0;
  rstop=frame;
  document.form.stop_frame.value=rstop+1;
  if (rstart >= rstop) {
     rstart=0;
     document.form.start_frame.value=rstart+1;
  } 
}

///////////////////////////////////////////////////////////////////////////

function image_abort() //  abort loading images
{ 
 imax=num_loaded_images1;
 if (!images1[num_loaded_images1].complete) imax=imax-1;
 alert("Aborting");
 if (imax > -1) animate(); 
}

///////////////////////////////////////////////////////////////////////////

function image_error(message) //  abort loading images
{ 
 alert(message);
}

///////////////////////////////////////////////////////////////////////////

function start_play()  // start movie
{
 if (playing == 0) {
  if (timeout_id == null && num_loaded_images1==imax) animate();
 }
}

///////////////////////////////////////////////////////////////////////////

function stop_play() // stop movie
{ 
 if (timeout_id) clearTimeout(timeout_id);
  timeout_id=null;
  playing = 0;
} 

///////////////////////////////////////////////////////////////////////////

function swing_mode()    // set swing mode
{
 if (swingon) {
  swingon=0;
  document.form.swing.value="OFF";
 }
  else {
  swingon=1;
  document.form.swing.value="ON";
 }
}

///////////////////////////////////////////////////////////////////////////

function next_frame()   // increment frame logic (TODO - work through equivilent  "mod" logic....
{
  frame=frame+dir;
  if (frame < rstart) {
    frame=rstop;
    if (swingon) frame=rstart;
    } else
    {
      if (frame > rstop) {
        frame=rstart;
        if (swingon) frame=rstop;
        }
    }
}

///////////////////////////////////////////////////////////////////////////


function animate()  // control movie loop
{
 var j;
 next_frame();
 j=frame+1;
 if (images1[frame].complete) {
  document.animation1.src=images1[frame].src;
  document.animation2.src=images2[frame].src;
  document.form.frame.value="Displaying "+j+" of "+imax;

//  target = document.getElementById("measure_left");
//  target.innerHTML = "<a target=_blank href=https://cdaw.gsfc.nasa.gov/tools/htmem.php?img="+images1[frame].src+">Measurement</a>";

  if (swingon && (j == (rstop+1) || frame == rstart)) reverse();
  timeout_id=setTimeout("animate()",delay);
  playing=1;
 }
}

///////////////////////////////////////////////////////////////////////////

function rewind() // rewind frames
{
 var j;
 if (timeout_id) clearTimeout(timeout_id); timeout_id=null;
 playing=0;
 frame=rstart;
 j=frame+1;
 if (images1[frame].complete) {
  document.animation1.src=images1[frame].src;
  document.animation2.src=images2[frame].src;
  document.form.frame.value="Displaying "+j+" of "+imax;

//  target = document.getElementById("measure_left");
//  target.innerHTML = "<a target=_blank href=https://cdaw.gsfc.nasa.gov/tools/htmem.php?img="+images1[frame].src+">Measurement</a>";
 }
}

///////////////////////////////////////////////////////////////////////////

function next() // next frames
{
 var j;
 if (timeout_id) clearTimeout(timeout_id); timeout_id=null;
 playing=0;
 dir=1;
 next_frame();
 j=frame+1;
 if (images1[frame].complete) {
  document.animation1.src=images1[frame].src;
  document.animation2.src=images2[frame].src;
  document.form.frame.value="Displaying "+j+" of "+imax;

//  target = document.getElementById("measure_left");
//  target.innerHTML = "<a target=_blank href=https://cdaw.gsfc.nasa.gov/tools/htmem.php?img="+images1[frame].src+">Measurement</a>";
 }
}

///////////////////////////////////////////////////////////////////////////

function prev() // prev frames
{
 var j;
 if (timeout_id) clearTimeout(timeout_id); timeout_id=null;
 playing=0;
 dir=-1;
 next_frame();
 j=frame+1;
 if (images1[frame].complete) {
  document.animation1.src=images1[frame].src;
  document.animation2.src=images2[frame].src;
  document.form.frame.value="Displaying "+j+" of "+imax;

//  target = document.getElementById("measure_left");
//  target.innerHTML = "<a target=_blank href=https://cdaw.gsfc.nasa.gov/tools/htmem.php?img="+images1[frame].src+">Measurement</a>";
 }
}

///////////////////////////////////////////////////////////////////////////

function p10() // plus 10 frames
{
 var j;
 if (timeout_id) clearTimeout(timeout_id); timeout_id=null;
 playing=0;
 dir=10;
 next_frame();
 dir=1;
 j=frame+1;
 if (images1[frame].complete) {
  document.animation1.src=images1[frame].src;
  document.animation2.src=images2[frame].src;
  document.form.frame.value="Displaying "+j+" of "+imax;


//  target = document.getElementById("measure_left");
//  target.innerHTML = "<a target=_blank href=https://cdaw.gsfc.nasa.gov/tools/htmem.php?img="+images1[frame].src+">Measurement</a>";


 }
}

///////////////////////////////////////////////////////////////////////////

function m10() // minus 10 frames
{
 var j;
 if (timeout_id) clearTimeout(timeout_id); timeout_id=null;
 playing=0;
 dir=-10;
 next_frame();
 dir=-1;
 j=frame+1;
 if (images1[frame].complete) {
  document.animation1.src=images1[frame].src;
  document.animation2.src=images2[frame].src;
  document.form.frame.value="Displaying "+j+" of "+imax;

//  target = document.getElementById("measure_left");
//  target.innerHTML = "<a target=_blank href=https://cdaw.gsfc.nasa.gov/tools/htmem.php?img="+images1[frame].src+">Measurement</a>";
 }
}

///////////////////////////////////////////////////////////////////////////

function keycntl1(event) // Keybord Control
{
 if (event.keyCode != 0) {
  if (event.keyCode == 37) prev(); // <--
  if (event.keyCode == 66) prev(); // b
  if (event.keyCode == 80) prev(); // p
  if (event.keyCode == 39) next(); // -->
  if (event.keyCode == 70) next(); // f
  if (event.keyCode == 78) next(); // n
  if (event.keyCode == 40) rewind(); //
  if (event.keyCode == 82) rewind(); //
 } else {
  if (event.charCode == 37) prev(); // <--
  if (event.charCode == 66) prev(); // b
  if (event.charCode == 80) prev(); // p
  if (event.charCode == 39) next(); // -->
  if (event.charCode == 70) next(); // f
  if (event.charCode == 78) next(); // n
  if (event.charCode == 40) rewind(); //
  if (event.charCode == 82) rewind(); //
 }
}

///////////////////////////////////////////////////////////////////////////


function reverse()  // reverse direction
{
 dir=-dir;
 if (dir > 0) document.form.direction.value="Reverse"; bname="Reverse";
 if (dir < 0) document.form.direction.value="Forward"; bname="Forward";
}

///////////////////////////////////////////////////////////////////////////

function show_speed()      // show speed
{
  document.form.rate.value=Math.round(speed);
  delay = 1000.0/speed;
}

///////////////////////////////////////////////////////////////////////////
// actual image loading is done here

show_speed();
load_img();
start_play();


target = document.getElementById("measure_left");
target.innerHTML = "<a target=_blank href=/movie/make_htmem_js.php?step=1&img1=lasc2aia193&stime=20171018_0000&etime=20171018_2359>Measurement</a>";

// -->
</script>



<center></center>
<br><center><a href=/movie/make_javamovie.php?img1=lasc2aia193&img2=goesx&date=20171017>Prev Day</a>&nbsp;
<a href=/movie/make_javamovie.php?img1=lasc2aia193&img2=goesx&stime=20171017_0000&etime=20171017_2359>-24h</a>&nbsp;
<a href=/movie/make_javamovie.php?img1=lasc2aia193&img2=goesx&stime=20171017_1200&etime=20171018_1159>-12h</a>&nbsp;
<a href=/movie/make_javamovie.php?img1=lasc2aia193&img2=goesx&stime=20171017_1600&etime=20171018_1559>-8h</a>&nbsp;
<a href=/movie/make_javamovie.php?img1=lasc2aia193&img2=goesx&stime=20171017_2000&etime=20171018_1959>-4h</a>&nbsp;
<a href=/movie/make_javamovie.php?img1=lasc2aia193&img2=goesx&stime=20171017_2200&etime=20171018_2159>-2h</a>&nbsp;
<a href=/movie/make_javamovie.php?img1=lasc2aia193&img2=goesx&stime=20171018_0200&etime=20171019_0159>+2h</a>&nbsp;
<a href=/movie/make_javamovie.php?img1=lasc2aia193&img2=goesx&stime=20171018_0400&etime=20171019_0359>+4h</a>&nbsp;
<a href=/movie/make_javamovie.php?img1=lasc2aia193&img2=goesx&stime=20171018_0800&etime=20171019_0759>+8h</a>&nbsp;
<a href=/movie/make_javamovie.php?img1=lasc2aia193&img2=goesx&stime=20171018_1200&etime=20171019_1159>+12h</a>&nbsp;
<a href=/movie/make_javamovie.php?img1=lasc2aia193&img2=goesx&stime=20171019_0000&etime=20171019_2359>+24h</a>&nbsp;
<a href=/movie/make_javamovie.php?img1=lasc2aia193&img2=goesx&date=20171019>Next Day</a><br><br>

<a href=/movie/make_javamovie.php?step=1&img1=lasc2aia193&img2=goesx&stime=20171018_0000&etime=20171018_2359>full cadence(111 frames)</a>&nbsp;&nbsp;
<a href=/movie/make_javamovie.php?step=2&img1=lasc2aia193&img2=goesx&stime=20171018_0000&etime=20171018_2359>half cadence(56 frames)</a>&nbsp;
</center>


<br><center></center>

</body>
</html>
