<?php 
//onligne
/*
define('_DB_NAME_', 'service2_ebay');
define('_DB_SERVER_', 'localhost');
define('_DB_USER_', 'service2_ebay');
define('_DB_PASSWD_', '{vqB^DxamS!N');
*/
//outligne

define('_DB_NAME_', '{dbname}');
define('_DB_SERVER_', '{dbserver}');
define('_DB_USER_', '{dbuser}');
define('_DB_PASSWD_', '{dbpassword}');

define("TAUX_TVA", 21);
define('FPDF_FONTPATH','../font/');

define('_DB_TYPE_', 'MySQL');
define('_COOKIE_KEY_', 'zDKO6dcyDZrarJm5NdrC8NppCePhdHiUvs347ywdXxrwy1Z937moG2yG');
//define('EMAIL_ADMIN', 'dev.goldprint@gmail.com');
//define('ASSISTANCE_', 'dev.goldprint@gmail.com');
define('MAGIC_QUOTES_GPC_',         get_magic_quotes_gpc());
define('MYSQL_REAL_ESCAPE_STRING_', function_exists('mysql_real_escape_string'));

global $giveMenu;

$giveMenu['GestionAdmin'][1]['nom'] ='Liste des administrateurs';
$giveMenu['GestionAdmin'][1]['action'] ='ListeAdmin';

$giveMenu['GestionAdmin'][2]['nom'] ='Creer un administrateur';
$giveMenu['GestionAdmin'][2]['action'] ='CreerAdmin';

$giveMenu['GestionAdmin'][3]['nom'] ='Profils Administrateur';
$giveMenu['GestionAdmin'][3]['action'] ='ProfilsAdmin';

$giveMenu['GestionFacture'][1]['nom'] ='Synchroniser Depuis Ebay';
$giveMenu['GestionFacture'][1]['action'] ='SynFacture';

$giveMenu['GestionFacture'][2]['nom'] ='Liste Facture';
$giveMenu['GestionFacture'][2]['action'] ='ListeFacture';

$giveMenu['GestionFacture'][3]['nom'] ='Emetteur Facture';
$giveMenu['GestionFacture'][3]['action'] ='EmetteurFacture';

$giveMenu['GestionFacture'][4]['nom'] ='Configuration API ebay';
$giveMenu['GestionFacture'][4]['action'] ='ConfigEbayAPI';



$mmois = array(1=>"Janvier", 2=>"Février", 3=>"Mars", 4=>"Avril", 5=>"Mai", 6=>"Juin", 7=>"Juillet", 8=>"Août", 9=>"Septembre", 10=>"Octobre", 11=>"Novembre", 12=>"Décembre" );


///////////droits administrateurs

global $droit;
/**********/
$droit[1]['label'] = "Voir la liste des administrateurs";
$droit[1]['code'] = 1;
$droit[1]['ctrl'] = "GestionAdmin";
$droit[1]['action'] = "ListeAdmin";
$droit[1]['group'] = "Gestion des comptes administrateur";

$droit[2]['label'] = "Voir les fiches des administrateurs";
$droit[2]['code'] = 2;
$droit[2]['ctrl'] = "GestionAdmin";
$droit[2]['action'] = "Voir";
$droit[2]['group'] = "Gestion des comptes administrateur";

$droit[3]['label'] = "Supprimer les comptes administrateurs";
$droit[3]['code'] = 3;
$droit[3]['ctrl'] = "GestionAdmin";
$droit[3]['action'] = "Supprimer";
$droit[3]['group'] = "Gestion des comptes administrateur";

$droit[4]['label'] = "Editer les comptes administrateurs";
$droit[4]['code'] = 4;
$droit[4]['ctrl'] = "GestionAdmin";
$droit[4]['action'] = "Editer";
$droit[4]['group'] = "Gestion des comptes administrateur";


$droit[5]['label'] = "Activer/Désactiver les comptes administrateurs";
$droit[5]['code'] = 5;
$droit[5]['ctrl'] = "GestionAdmin";
$droit[5]['action'] = "Bloquer";
$droit[5]['group'] = "Gestion des comptes administrateur";

$droit[6]['label'] = "Créer les comptes administrateurs";
$droit[6]['code'] = 6;
$droit[6]['ctrl'] = "GestionAdmin";
$droit[6]['action'] = "CreerAdmin";
$droit[6]['group'] = "Gestion des comptes administrateur";


/********droits sur les facture***********/
$droit[7]['label'] = "Lister les  factures";
$droit[7]['code'] = 7;
$droit[7]['ctrl'] = "GestionFacture";
$droit[7]['action'] = "ListeFacture";
$droit[7]['group'] = "Gestion Facture Ebay";

$droit[8]['label'] = "Sychroniser Factures";
$droit[8]['code'] = 8;
$droit[8]['ctrl'] = "GestionFacture";
$droit[8]['action'] = "SynFacture";
$droit[8]['group'] = "Gestion Facture Ebay";

$droit[9]['label'] = "Supprimer Factures";
$droit[9]['code'] = 9;
$droit[9]['ctrl'] = "GestionFacture";
$droit[9]['action'] = "SuppFacture";
$droit[9]['group'] = "Gestion Facture Ebay";

$droit[10]['label'] = "Editer Facture";
$droit[10]['code'] = 10;
$droit[10]['ctrl'] = "GestionFacture";
$droit[10]['action'] = "EditFacture";
$droit[10]['group'] = "Gestion Facture Ebay";



/*********profil**************/
$droit[11]['label'] = "Lister les  profils";
$droit[11]['code'] = 11;
$droit[11]['ctrl'] = "GestionAdmin";
$droit[11]['action'] = "ProfilsAdmin";
$droit[11]['group'] = "Gestion profils administrateur";

$droit[12]['label'] = "Créer les profils";
$droit[12]['code'] = 12;
$droit[12]['ctrl'] = "GestionAdmin";
$droit[12]['action'] = "";
$droit[12]['group'] = "Gestion profils administrateur";

$droit[13]['label'] = "Voir les details d'un profil";
$droit[13]['code'] = 13;
$droit[13]['ctrl'] = "GestionAdmin";
$droit[13]['action'] = "VoirProfil";
$droit[13]['group'] = "Gestion profils administrateur";

$droit[14]['label'] = "Editer les profils";
$droit[14]['code'] = 14;
$droit[14]['ctrl'] = "GestionAdmin";
$droit[14]['action'] = "";
$droit[14]['group'] = "Gestion profils administrateur";

$droit[15]['label'] = "Supprimer les profils";
$droit[15]['code'] = 15;
$droit[15]['ctrl'] = "GestionAdmin";
$droit[15]['action'] = "";
$droit[15]['group'] = "Gestion profils administrateur";



$droit[16]['label'] = "Envoyer Facture";
$droit[16]['code'] = 16;
$droit[16]['ctrl'] = "GestionFacture";
$droit[16]['action'] = "SendFacture";
$droit[16]['group'] = "Gestion Facture Ebay";

$droit[17]['label'] = "Configurer Emetteur facture";
$droit[17]['code'] = 17;
$droit[17]['ctrl'] = "GestionFacture";
$droit[17]['action'] = "EmetteurFacture";
$droit[17]['group'] = "Gestion Facture Ebay";

$droit[18]['label'] = "Configuration API ebay";
$droit[18]['code'] = 18;
$droit[18]['ctrl'] = "GestionFacture";
$droit[18]['action'] = "ConfigEbayAPI";
$droit[18]['group'] = "Gestion Facture Ebay";

$countries = array(
    'AF'=>'AFGHANISTAN',
    'AL'=>'ALBANIA',
    'DZ'=>'ALGERIA',
    'AS'=>'AMERICAN SAMOA',
    'AD'=>'ANDORRA',
    'AO'=>'ANGOLA',
    'AI'=>'ANGUILLA',
    'AQ'=>'ANTARCTICA',
    'AG'=>'ANTIGUA AND BARBUDA',
    'AR'=>'ARGENTINA',
    'AM'=>'ARMENIA',
    'AW'=>'ARUBA',
    'AU'=>'AUSTRALIA',
    'AT'=>'AUSTRIA',
    'AZ'=>'AZERBAIJAN',
    'BS'=>'BAHAMAS',
    'BH'=>'BAHRAIN',
    'BD'=>'BANGLADESH',
    'BB'=>'BARBADOS',
    'BY'=>'BELARUS',
    'BE'=>'BELGIUM',
    'BZ'=>'BELIZE',
    'BJ'=>'BENIN',
    'BM'=>'BERMUDA',
    'BT'=>'BHUTAN',
    'BO'=>'BOLIVIA',
    'BA'=>'BOSNIA AND HERZEGOVINA',
    'BW'=>'BOTSWANA',
    'BV'=>'BOUVET ISLAND',
    'BR'=>'BRAZIL',
    'IO'=>'BRITISH INDIAN OCEAN TERRITORY',
    'BN'=>'BRUNEI DARUSSALAM',
    'BG'=>'BULGARIA',
    'BF'=>'BURKINA FASO',
    'BI'=>'BURUNDI',
    'KH'=>'CAMBODIA',
    'CM'=>'CAMEROON',
    'CA'=>'CANADA',
    'CV'=>'CAPE VERDE',
    'KY'=>'CAYMAN ISLANDS',
    'CF'=>'CENTRAL AFRICAN REPUBLIC',
    'TD'=>'CHAD',
    'CL'=>'CHILE',
    'CN'=>'CHINA',
    'CX'=>'CHRISTMAS ISLAND',
    'CC'=>'COCOS (KEELING) ISLANDS',
    'CO'=>'COLOMBIA',
    'KM'=>'COMOROS',
    'CG'=>'CONGO',
    'CD'=>'CONGO, THE DEMOCRATIC REPUBLIC OF THE',
    'CK'=>'COOK ISLANDS',
    'CR'=>'COSTA RICA',
    'CI'=>'COTE D IVOIRE',
    'HR'=>'CROATIA',
    'CU'=>'CUBA',
    'CY'=>'CYPRUS',
    'CZ'=>'CZECH REPUBLIC',
    'DK'=>'DENMARK',
    'DJ'=>'DJIBOUTI',
    'DM'=>'DOMINICA',
    'DO'=>'DOMINICAN REPUBLIC',
    'TP'=>'EAST TIMOR',
    'EC'=>'ECUADOR',
    'EG'=>'EGYPT',
    'SV'=>'EL SALVADOR',
    'GQ'=>'EQUATORIAL GUINEA',
    'ER'=>'ERITREA',
    'EE'=>'ESTONIA',
    'ET'=>'ETHIOPIA',
    'FK'=>'FALKLAND ISLANDS (MALVINAS)',
    'FO'=>'FAROE ISLANDS',
    'FJ'=>'FIJI',
    'FI'=>'FINLAND',
    'FR'=>'FRANCE',
    'GF'=>'FRENCH GUIANA',
    'PF'=>'FRENCH POLYNESIA',
    'TF'=>'FRENCH SOUTHERN TERRITORIES',
    'GA'=>'GABON',
    'GM'=>'GAMBIA',
    'GE'=>'GEORGIA',
    'DE'=>'GERMANY',
    'GH'=>'GHANA',
    'GI'=>'GIBRALTAR',
    'GR'=>'GREECE',
    'GL'=>'GREENLAND',
    'GD'=>'GRENADA',
    'GP'=>'GUADELOUPE',
    'GU'=>'GUAM',
    'GT'=>'GUATEMALA',
    'GN'=>'GUINEA',
    'GW'=>'GUINEA-BISSAU',
    'GY'=>'GUYANA',
    'HT'=>'HAITI',
    'HM'=>'HEARD ISLAND AND MCDONALD ISLANDS',
    'VA'=>'HOLY SEE (VATICAN CITY STATE)',
    'HN'=>'HONDURAS',
    'HK'=>'HONG KONG',
    'HU'=>'HUNGARY',
    'IS'=>'ICELAND',
    'IN'=>'INDIA',
    'ID'=>'INDONESIA',
    'IR'=>'IRAN, ISLAMIC REPUBLIC OF',
    'IQ'=>'IRAQ',
    'IE'=>'IRELAND',
    'IL'=>'ISRAEL',
    'IT'=>'ITALY',
    'JM'=>'JAMAICA',
    'JP'=>'JAPAN',
    'JO'=>'JORDAN',
    'KZ'=>'KAZAKSTAN',
    'KE'=>'KENYA',
    'KI'=>'KIRIBATI',
    'KP'=>'KOREA DEMOCRATIC PEOPLES REPUBLIC OF',
    'KR'=>'KOREA REPUBLIC OF',
    'KW'=>'KUWAIT',
    'KG'=>'KYRGYZSTAN',
    'LA'=>'LAO PEOPLES DEMOCRATIC REPUBLIC',
    'LV'=>'LATVIA',
    'LB'=>'LEBANON',
    'LS'=>'LESOTHO',
    'LR'=>'LIBERIA',
    'LY'=>'LIBYAN ARAB JAMAHIRIYA',
    'LI'=>'LIECHTENSTEIN',
    'LT'=>'LITHUANIA',
    'LU'=>'LUXEMBOURG',
    'MO'=>'MACAU',
    'MK'=>'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF',
    'MG'=>'MADAGASCAR',
    'MW'=>'MALAWI',
    'MY'=>'MALAYSIA',
    'MV'=>'MALDIVES',
    'ML'=>'MALI',
    'MT'=>'MALTA',
    'MH'=>'MARSHALL ISLANDS',
    'MQ'=>'MARTINIQUE',
    'MR'=>'MAURITANIA',
    'MU'=>'MAURITIUS',
    'YT'=>'MAYOTTE',
    'MX'=>'MEXICO',
    'FM'=>'MICRONESIA, FEDERATED STATES OF',
    'MD'=>'MOLDOVA, REPUBLIC OF',
    'MC'=>'MONACO',
    'MN'=>'MONGOLIA',
    'MS'=>'MONTSERRAT',
    'MA'=>'MOROCCO',
    'MZ'=>'MOZAMBIQUE',
    'MM'=>'MYANMAR',
    'NA'=>'NAMIBIA',
    'NR'=>'NAURU',
    'NP'=>'NEPAL',
    'NL'=>'NETHERLANDS',
    'AN'=>'NETHERLANDS ANTILLES',
    'NC'=>'NEW CALEDONIA',
    'NZ'=>'NEW ZEALAND',
    'NI'=>'NICARAGUA',
    'NE'=>'NIGER',
    'NG'=>'NIGERIA',
    'NU'=>'NIUE',
    'NF'=>'NORFOLK ISLAND',
    'MP'=>'NORTHERN MARIANA ISLANDS',
    'NO'=>'NORWAY',
    'OM'=>'OMAN',
    'PK'=>'PAKISTAN',
    'PW'=>'PALAU',
    'PS'=>'PALESTINIAN TERRITORY, OCCUPIED',
    'PA'=>'PANAMA',
    'PG'=>'PAPUA NEW GUINEA',
    'PY'=>'PARAGUAY',
    'PE'=>'PERU',
    'PH'=>'PHILIPPINES',
    'PN'=>'PITCAIRN',
    'PL'=>'POLAND',
    'PT'=>'PORTUGAL',
    'PR'=>'PUERTO RICO',
    'QA'=>'QATAR',
    'RE'=>'REUNION',
    'RO'=>'ROMANIA',
    'RU'=>'RUSSIAN FEDERATION',
    'RW'=>'RWANDA',
    'SH'=>'SAINT HELENA',
    'KN'=>'SAINT KITTS AND NEVIS',
    'LC'=>'SAINT LUCIA',
    'PM'=>'SAINT PIERRE AND MIQUELON',
    'VC'=>'SAINT VINCENT AND THE GRENADINES',
    'WS'=>'SAMOA',
    'SM'=>'SAN MARINO',
    'ST'=>'SAO TOME AND PRINCIPE',
    'SA'=>'SAUDI ARABIA',
    'SN'=>'SENEGAL',
    'SC'=>'SEYCHELLES',
    'SL'=>'SIERRA LEONE',
    'SG'=>'SINGAPORE',
    'SK'=>'SLOVAKIA',
    'SI'=>'SLOVENIA',
    'SB'=>'SOLOMON ISLANDS',
    'SO'=>'SOMALIA',
    'ZA'=>'SOUTH AFRICA',
    'GS'=>'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS',
    'ES'=>'SPAIN',
    'LK'=>'SRI LANKA',
    'SD'=>'SUDAN',
    'SR'=>'SURINAME',
    'SJ'=>'SVALBARD AND JAN MAYEN',
    'SZ'=>'SWAZILAND',
    'SE'=>'SWEDEN',
    'CH'=>'SWITZERLAND',
    'SY'=>'SYRIAN ARAB REPUBLIC',
    'TW'=>'TAIWAN, PROVINCE OF CHINA',
    'TJ'=>'TAJIKISTAN',
    'TZ'=>'TANZANIA, UNITED REPUBLIC OF',
    'TH'=>'THAILAND',
    'TG'=>'TOGO',
    'TK'=>'TOKELAU',
    'TO'=>'TONGA',
    'TT'=>'TRINIDAD AND TOBAGO',
    'TN'=>'TUNISIA',
    'TR'=>'TURKEY',
    'TM'=>'TURKMENISTAN',
    'TC'=>'TURKS AND CAICOS ISLANDS',
    'TV'=>'TUVALU',
    'UG'=>'UGANDA',
    'UA'=>'UKRAINE',
    'AE'=>'UNITED ARAB EMIRATES',
    'GB'=>'UNITED KINGDOM',
    'US'=>'UNITED STATES',
    'UM'=>'UNITED STATES MINOR OUTLYING ISLANDS',
    'UY'=>'URUGUAY',
    'UZ'=>'UZBEKISTAN',
    'VU'=>'VANUATU',
    'VE'=>'VENEZUELA',
    'VN'=>'VIET NAM',
    'VG'=>'VIRGIN ISLANDS, BRITISH',
    'VI'=>'VIRGIN ISLANDS, U.S.',
    'WF'=>'WALLIS AND FUTUNA',
    'EH'=>'WESTERN SAHARA',
    'YE'=>'YEMEN',
    'YU'=>'YUGOSLAVIA',
    'ZM'=>'ZAMBIA',
    'ZW'=>'ZIMBABWE'
  );

?>