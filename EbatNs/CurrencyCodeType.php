<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class CurrencyCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $AFA
	var $AFA = 'AFA';
	// @var string $ALL
	var $ALL = 'ALL';
	// @var string $DZD
	var $DZD = 'DZD';
	// @var string $ADP
	var $ADP = 'ADP';
	// @var string $AOA
	var $AOA = 'AOA';
	// @var string $ARS
	var $ARS = 'ARS';
	// @var string $AMD
	var $AMD = 'AMD';
	// @var string $AWG
	var $AWG = 'AWG';
	// @var string $AZM
	var $AZM = 'AZM';
	// @var string $BSD
	var $BSD = 'BSD';
	// @var string $BHD
	var $BHD = 'BHD';
	// @var string $BDT
	var $BDT = 'BDT';
	// @var string $BBD
	var $BBD = 'BBD';
	// @var string $BYR
	var $BYR = 'BYR';
	// @var string $BZD
	var $BZD = 'BZD';
	// @var string $BMD
	var $BMD = 'BMD';
	// @var string $BTN
	var $BTN = 'BTN';
	// @var string $INR
	var $INR = 'INR';
	// @var string $BOV
	var $BOV = 'BOV';
	// @var string $BOB
	var $BOB = 'BOB';
	// @var string $BAM
	var $BAM = 'BAM';
	// @var string $BWP
	var $BWP = 'BWP';
	// @var string $BRL
	var $BRL = 'BRL';
	// @var string $BND
	var $BND = 'BND';
	// @var string $BGL
	var $BGL = 'BGL';
	// @var string $BGN
	var $BGN = 'BGN';
	// @var string $BIF
	var $BIF = 'BIF';
	// @var string $KHR
	var $KHR = 'KHR';
	// @var string $CAD
	var $CAD = 'CAD';
	// @var string $CVE
	var $CVE = 'CVE';
	// @var string $KYD
	var $KYD = 'KYD';
	// @var string $XAF
	var $XAF = 'XAF';
	// @var string $CLF
	var $CLF = 'CLF';
	// @var string $CLP
	var $CLP = 'CLP';
	// @var string $CNY
	var $CNY = 'CNY';
	// @var string $COP
	var $COP = 'COP';
	// @var string $KMF
	var $KMF = 'KMF';
	// @var string $CDF
	var $CDF = 'CDF';
	// @var string $CRC
	var $CRC = 'CRC';
	// @var string $HRK
	var $HRK = 'HRK';
	// @var string $CUP
	var $CUP = 'CUP';
	// @var string $CYP
	var $CYP = 'CYP';
	// @var string $CZK
	var $CZK = 'CZK';
	// @var string $DKK
	var $DKK = 'DKK';
	// @var string $DJF
	var $DJF = 'DJF';
	// @var string $DOP
	var $DOP = 'DOP';
	// @var string $TPE
	var $TPE = 'TPE';
	// @var string $ECV
	var $ECV = 'ECV';
	// @var string $ECS
	var $ECS = 'ECS';
	// @var string $EGP
	var $EGP = 'EGP';
	// @var string $SVC
	var $SVC = 'SVC';
	// @var string $ERN
	var $ERN = 'ERN';
	// @var string $EEK
	var $EEK = 'EEK';
	// @var string $ETB
	var $ETB = 'ETB';
	// @var string $FKP
	var $FKP = 'FKP';
	// @var string $FJD
	var $FJD = 'FJD';
	// @var string $GMD
	var $GMD = 'GMD';
	// @var string $GEL
	var $GEL = 'GEL';
	// @var string $GHC
	var $GHC = 'GHC';
	// @var string $GIP
	var $GIP = 'GIP';
	// @var string $GTQ
	var $GTQ = 'GTQ';
	// @var string $GNF
	var $GNF = 'GNF';
	// @var string $GWP
	var $GWP = 'GWP';
	// @var string $GYD
	var $GYD = 'GYD';
	// @var string $HTG
	var $HTG = 'HTG';
	// @var string $HNL
	var $HNL = 'HNL';
	// @var string $HKD
	var $HKD = 'HKD';
	// @var string $HUF
	var $HUF = 'HUF';
	// @var string $ISK
	var $ISK = 'ISK';
	// @var string $IDR
	var $IDR = 'IDR';
	// @var string $IRR
	var $IRR = 'IRR';
	// @var string $IQD
	var $IQD = 'IQD';
	// @var string $ILS
	var $ILS = 'ILS';
	// @var string $JMD
	var $JMD = 'JMD';
	// @var string $JPY
	var $JPY = 'JPY';
	// @var string $JOD
	var $JOD = 'JOD';
	// @var string $KZT
	var $KZT = 'KZT';
	// @var string $KES
	var $KES = 'KES';
	// @var string $AUD
	var $AUD = 'AUD';
	// @var string $KPW
	var $KPW = 'KPW';
	// @var string $KRW
	var $KRW = 'KRW';
	// @var string $KWD
	var $KWD = 'KWD';
	// @var string $KGS
	var $KGS = 'KGS';
	// @var string $LAK
	var $LAK = 'LAK';
	// @var string $LVL
	var $LVL = 'LVL';
	// @var string $LBP
	var $LBP = 'LBP';
	// @var string $LSL
	var $LSL = 'LSL';
	// @var string $LRD
	var $LRD = 'LRD';
	// @var string $LYD
	var $LYD = 'LYD';
	// @var string $CHF
	var $CHF = 'CHF';
	// @var string $LTL
	var $LTL = 'LTL';
	// @var string $MOP
	var $MOP = 'MOP';
	// @var string $MKD
	var $MKD = 'MKD';
	// @var string $MGF
	var $MGF = 'MGF';
	// @var string $MWK
	var $MWK = 'MWK';
	// @var string $MYR
	var $MYR = 'MYR';
	// @var string $MVR
	var $MVR = 'MVR';
	// @var string $MTL
	var $MTL = 'MTL';
	// @var string $EUR
	var $EUR = 'EUR';
	// @var string $MRO
	var $MRO = 'MRO';
	// @var string $MUR
	var $MUR = 'MUR';
	// @var string $MXN
	var $MXN = 'MXN';
	// @var string $MXV
	var $MXV = 'MXV';
	// @var string $MDL
	var $MDL = 'MDL';
	// @var string $MNT
	var $MNT = 'MNT';
	// @var string $XCD
	var $XCD = 'XCD';
	// @var string $MZM
	var $MZM = 'MZM';
	// @var string $MMK
	var $MMK = 'MMK';
	// @var string $ZAR
	var $ZAR = 'ZAR';
	// @var string $NAD
	var $NAD = 'NAD';
	// @var string $NPR
	var $NPR = 'NPR';
	// @var string $ANG
	var $ANG = 'ANG';
	// @var string $XPF
	var $XPF = 'XPF';
	// @var string $NZD
	var $NZD = 'NZD';
	// @var string $NIO
	var $NIO = 'NIO';
	// @var string $NGN
	var $NGN = 'NGN';
	// @var string $NOK
	var $NOK = 'NOK';
	// @var string $OMR
	var $OMR = 'OMR';
	// @var string $PKR
	var $PKR = 'PKR';
	// @var string $PAB
	var $PAB = 'PAB';
	// @var string $PGK
	var $PGK = 'PGK';
	// @var string $PYG
	var $PYG = 'PYG';
	// @var string $PEN
	var $PEN = 'PEN';
	// @var string $PHP
	var $PHP = 'PHP';
	// @var string $PLN
	var $PLN = 'PLN';
	// @var string $USD
	var $USD = 'USD';
	// @var string $QAR
	var $QAR = 'QAR';
	// @var string $ROL
	var $ROL = 'ROL';
	// @var string $RUB
	var $RUB = 'RUB';
	// @var string $RUR
	var $RUR = 'RUR';
	// @var string $RWF
	var $RWF = 'RWF';
	// @var string $SHP
	var $SHP = 'SHP';
	// @var string $WST
	var $WST = 'WST';
	// @var string $STD
	var $STD = 'STD';
	// @var string $SAR
	var $SAR = 'SAR';
	// @var string $SCR
	var $SCR = 'SCR';
	// @var string $SLL
	var $SLL = 'SLL';
	// @var string $SGD
	var $SGD = 'SGD';
	// @var string $SKK
	var $SKK = 'SKK';
	// @var string $SIT
	var $SIT = 'SIT';
	// @var string $SBD
	var $SBD = 'SBD';
	// @var string $SOS
	var $SOS = 'SOS';
	// @var string $LKR
	var $LKR = 'LKR';
	// @var string $SDD
	var $SDD = 'SDD';
	// @var string $SRG
	var $SRG = 'SRG';
	// @var string $SZL
	var $SZL = 'SZL';
	// @var string $SEK
	var $SEK = 'SEK';
	// @var string $SYP
	var $SYP = 'SYP';
	// @var string $TWD
	var $TWD = 'TWD';
	// @var string $TJS
	var $TJS = 'TJS';
	// @var string $TZS
	var $TZS = 'TZS';
	// @var string $THB
	var $THB = 'THB';
	// @var string $XOF
	var $XOF = 'XOF';
	// @var string $TOP
	var $TOP = 'TOP';
	// @var string $TTD
	var $TTD = 'TTD';
	// @var string $TND
	var $TND = 'TND';
	// @var string $TRL
	var $TRL = 'TRL';
	// @var string $TMM
	var $TMM = 'TMM';
	// @var string $UGX
	var $UGX = 'UGX';
	// @var string $UAH
	var $UAH = 'UAH';
	// @var string $AED
	var $AED = 'AED';
	// @var string $GBP
	var $GBP = 'GBP';
	// @var string $USS
	var $USS = 'USS';
	// @var string $USN
	var $USN = 'USN';
	// @var string $UYU
	var $UYU = 'UYU';
	// @var string $UZS
	var $UZS = 'UZS';
	// @var string $VUV
	var $VUV = 'VUV';
	// @var string $VEB
	var $VEB = 'VEB';
	// @var string $VND
	var $VND = 'VND';
	// @var string $MAD
	var $MAD = 'MAD';
	// @var string $YER
	var $YER = 'YER';
	// @var string $YUM
	var $YUM = 'YUM';
	// @var string $ZMK
	var $ZMK = 'ZMK';
	// @var string $ZWD
	var $ZWD = 'ZWD';
	// @var string $ATS
	var $ATS = 'ATS';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function CurrencyCodeType()
	{
		$this->EbatNs_FacetType('CurrencyCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_CurrencyCodeType = new CurrencyCodeType();

?>
