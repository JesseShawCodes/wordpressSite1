<?php

namespace MPHB\Bundles;

class CurrencyBundle {

	private $labels;
	private $symbols;
	private $positions;

	public function __construct(){
		add_action( 'init', array( $this, 'init' ), 4 );
	}

	public function init(){
		$labels = array(
			'AED' => __( 'United Arab Emirates dirham', 'motopress-hotel-booking' ),
			'AFN' => __( 'Afghan afghani', 'motopress-hotel-booking' ),
			'ALL' => __( 'Albanian lek', 'motopress-hotel-booking' ),
			'AMD' => __( 'Armenian dram', 'motopress-hotel-booking' ),
			'ANG' => __( 'Netherlands Antillean guilder', 'motopress-hotel-booking' ),
			'AOA' => __( 'Angolan kwanza', 'motopress-hotel-booking' ),
			'ARS' => __( 'Argentine peso', 'motopress-hotel-booking' ),
			'AUD' => __( 'Australian dollar', 'motopress-hotel-booking' ),
			'AWG' => __( 'Aruban florin', 'motopress-hotel-booking' ),
			'AZN' => __( 'Azerbaijani manat', 'motopress-hotel-booking' ),
			'BAM' => __( 'Bosnia and Herzegovina convertible mark', 'motopress-hotel-booking' ),
			'BBD' => __( 'Barbadian dollar', 'motopress-hotel-booking' ),
			'BDT' => __( 'Bangladeshi taka', 'motopress-hotel-booking' ),
			'BGN' => __( 'Bulgarian lev', 'motopress-hotel-booking' ),
			'BHD' => __( 'Bahraini dinar', 'motopress-hotel-booking' ),
			'BIF' => __( 'Burundian franc', 'motopress-hotel-booking' ),
			'BMD' => __( 'Bermudian dollar', 'motopress-hotel-booking' ),
			'BND' => __( 'Brunei dollar', 'motopress-hotel-booking' ),
			'BOB' => __( 'Bolivian boliviano', 'motopress-hotel-booking' ),
			'BRL' => __( 'Brazilian real', 'motopress-hotel-booking' ),
			'BSD' => __( 'Bahamian dollar', 'motopress-hotel-booking' ),
			'BTC' => __( 'Bitcoin', 'motopress-hotel-booking' ),
			'BTN' => __( 'Bhutanese ngultrum', 'motopress-hotel-booking' ),
			'BWP' => __( 'Botswana pula', 'motopress-hotel-booking' ),
			'BYR' => __( 'Belarusian ruble (old)', 'motopress-hotel-booking' ),
			'BYN' => __( 'Belarusian ruble', 'motopress-hotel-booking' ),
			'BZD' => __( 'Belize dollar', 'motopress-hotel-booking' ),
			'CAD' => __( 'Canadian dollar', 'motopress-hotel-booking' ),
			'CDF' => __( 'Congolese franc', 'motopress-hotel-booking' ),
			'CHF' => __( 'Swiss franc', 'motopress-hotel-booking' ),
			'CLP' => __( 'Chilean peso', 'motopress-hotel-booking' ),
			'CNY' => __( 'Chinese yuan', 'motopress-hotel-booking' ),
			'COP' => __( 'Colombian peso', 'motopress-hotel-booking' ),
			'CRC' => __( 'Costa Rican col&oacute;n', 'motopress-hotel-booking' ),
			'CUC' => __( 'Cuban convertible peso', 'motopress-hotel-booking' ),
			'CUP' => __( 'Cuban peso', 'motopress-hotel-booking' ),
			'CVE' => __( 'Cape Verdean escudo', 'motopress-hotel-booking' ),
			'CZK' => __( 'Czech koruna', 'motopress-hotel-booking' ),
			'DJF' => __( 'Djiboutian franc', 'motopress-hotel-booking' ),
			'DKK' => __( 'Danish krone', 'motopress-hotel-booking' ),
			'DOP' => __( 'Dominican peso', 'motopress-hotel-booking' ),
			'DZD' => __( 'Algerian dinar', 'motopress-hotel-booking' ),
			'EGP' => __( 'Egyptian pound', 'motopress-hotel-booking' ),
			'ERN' => __( 'Eritrean nakfa', 'motopress-hotel-booking' ),
			'ETB' => __( 'Ethiopian birr', 'motopress-hotel-booking' ),
			'EUR' => __( 'Euro', 'motopress-hotel-booking' ),
			'FJD' => __( 'Fijian dollar', 'motopress-hotel-booking' ),
			'FKP' => __( 'Falkland Islands pound', 'motopress-hotel-booking' ),
			'GBP' => __( 'Pound sterling', 'motopress-hotel-booking' ),
			'GEL' => __( 'Georgian lari', 'motopress-hotel-booking' ),
			'GGP' => __( 'Guernsey pound', 'motopress-hotel-booking' ),
			'GHS' => __( 'Ghana cedi', 'motopress-hotel-booking' ),
			'GIP' => __( 'Gibraltar pound', 'motopress-hotel-booking' ),
			'GMD' => __( 'Gambian dalasi', 'motopress-hotel-booking' ),
			'GNF' => __( 'Guinean franc', 'motopress-hotel-booking' ),
			'GTQ' => __( 'Guatemalan quetzal', 'motopress-hotel-booking' ),
			'GYD' => __( 'Guyanese dollar', 'motopress-hotel-booking' ),
			'HKD' => __( 'Hong Kong dollar', 'motopress-hotel-booking' ),
			'HNL' => __( 'Honduran lempira', 'motopress-hotel-booking' ),
			'HRK' => __( 'Croatian kuna', 'motopress-hotel-booking' ),
			'HTG' => __( 'Haitian gourde', 'motopress-hotel-booking' ),
			'HUF' => __( 'Hungarian forint', 'motopress-hotel-booking' ),
			'IDR' => __( 'Indonesian rupiah', 'motopress-hotel-booking' ),
			'ILS' => __( 'Israeli new shekel', 'motopress-hotel-booking' ),
			'IMP' => __( 'Manx pound', 'motopress-hotel-booking' ),
			'INR' => __( 'Indian rupee', 'motopress-hotel-booking' ),
			'IQD' => __( 'Iraqi dinar', 'motopress-hotel-booking' ),
			'IRR' => __( 'Iranian rial', 'motopress-hotel-booking' ),
			'IRT' => __( 'Iranian toman', 'motopress-hotel-booking' ),
			'ISK' => __( 'Icelandic kr&oacute;na', 'motopress-hotel-booking' ),
			'JEP' => __( 'Jersey pound', 'motopress-hotel-booking' ),
			'JMD' => __( 'Jamaican dollar', 'motopress-hotel-booking' ),
			'JOD' => __( 'Jordanian dinar', 'motopress-hotel-booking' ),
			'JPY' => __( 'Japanese yen', 'motopress-hotel-booking' ),
			'KES' => __( 'Kenyan shilling', 'motopress-hotel-booking' ),
			'KGS' => __( 'Kyrgyzstani som', 'motopress-hotel-booking' ),
			'KHR' => __( 'Cambodian riel', 'motopress-hotel-booking' ),
			'KMF' => __( 'Comorian franc', 'motopress-hotel-booking' ),
			'KPW' => __( 'North Korean won', 'motopress-hotel-booking' ),
			'KRW' => __( 'South Korean won', 'motopress-hotel-booking' ),
			'KWD' => __( 'Kuwaiti dinar', 'motopress-hotel-booking' ),
			'KYD' => __( 'Cayman Islands dollar', 'motopress-hotel-booking' ),
			'KZT' => __( 'Kazakhstani tenge', 'motopress-hotel-booking' ),
			'LAK' => __( 'Lao kip', 'motopress-hotel-booking' ),
			'LBP' => __( 'Lebanese pound', 'motopress-hotel-booking' ),
			'LKR' => __( 'Sri Lankan rupee', 'motopress-hotel-booking' ),
			'LRD' => __( 'Liberian dollar', 'motopress-hotel-booking' ),
			'LSL' => __( 'Lesotho loti', 'motopress-hotel-booking' ),
			'LYD' => __( 'Libyan dinar', 'motopress-hotel-booking' ),
			'MAD' => __( 'Moroccan dirham', 'motopress-hotel-booking' ),
			'MDL' => __( 'Moldovan leu', 'motopress-hotel-booking' ),
			'MGA' => __( 'Malagasy ariary', 'motopress-hotel-booking' ),
			'MKD' => __( 'Macedonian denar', 'motopress-hotel-booking' ),
			'MMK' => __( 'Burmese kyat', 'motopress-hotel-booking' ),
			'MNT' => __( 'Mongolian t&ouml;gr&ouml;g', 'motopress-hotel-booking' ),
			'MOP' => __( 'Macanese pataca', 'motopress-hotel-booking' ),
			'MRO' => __( 'Mauritanian ouguiya', 'motopress-hotel-booking' ),
			'MUR' => __( 'Mauritian rupee', 'motopress-hotel-booking' ),
			'MVR' => __( 'Maldivian rufiyaa', 'motopress-hotel-booking' ),
			'MWK' => __( 'Malawian kwacha', 'motopress-hotel-booking' ),
			'MXN' => __( 'Mexican peso', 'motopress-hotel-booking' ),
			'MYR' => __( 'Malaysian ringgit', 'motopress-hotel-booking' ),
			'MZN' => __( 'Mozambican metical', 'motopress-hotel-booking' ),
			'NAD' => __( 'Namibian dollar', 'motopress-hotel-booking' ),
			'NGN' => __( 'Nigerian naira', 'motopress-hotel-booking' ),
			'NIO' => __( 'Nicaraguan c&oacute;rdoba', 'motopress-hotel-booking' ),
			'NOK' => __( 'Norwegian krone', 'motopress-hotel-booking' ),
			'NPR' => __( 'Nepalese rupee', 'motopress-hotel-booking' ),
			'NZD' => __( 'New Zealand dollar', 'motopress-hotel-booking' ),
			'OMR' => __( 'Omani rial', 'motopress-hotel-booking' ),
			'PAB' => __( 'Panamanian balboa', 'motopress-hotel-booking' ),
			'PEN' => __( 'Sol', 'motopress-hotel-booking' ),
			'PGK' => __( 'Papua New Guinean kina', 'motopress-hotel-booking' ),
			'PHP' => __( 'Philippine peso', 'motopress-hotel-booking' ),
			'PKR' => __( 'Pakistani rupee', 'motopress-hotel-booking' ),
			'PLN' => __( 'Polish z&#x142;oty', 'motopress-hotel-booking' ),
			'PRB' => __( 'Transnistrian ruble', 'motopress-hotel-booking' ),
			'PYG' => __( 'Paraguayan guaran&iacute;', 'motopress-hotel-booking' ),
			'QAR' => __( 'Qatari riyal', 'motopress-hotel-booking' ),
			'RON' => __( 'Romanian leu', 'motopress-hotel-booking' ),
			'RSD' => __( 'Serbian dinar', 'motopress-hotel-booking' ),
			'RUB' => __( 'Russian ruble', 'motopress-hotel-booking' ),
			'RWF' => __( 'Rwandan franc', 'motopress-hotel-booking' ),
			'SAR' => __( 'Saudi riyal', 'motopress-hotel-booking' ),
			'SBD' => __( 'Solomon Islands dollar', 'motopress-hotel-booking' ),
			'SCR' => __( 'Seychellois rupee', 'motopress-hotel-booking' ),
			'SDG' => __( 'Sudanese pound', 'motopress-hotel-booking' ),
			'SEK' => __( 'Swedish krona', 'motopress-hotel-booking' ),
			'SGD' => __( 'Singapore dollar', 'motopress-hotel-booking' ),
			'SHP' => __( 'Saint Helena pound', 'motopress-hotel-booking' ),
			'SLL' => __( 'Sierra Leonean leone', 'motopress-hotel-booking' ),
			'SOS' => __( 'Somali shilling', 'motopress-hotel-booking' ),
			'SRD' => __( 'Surinamese dollar', 'motopress-hotel-booking' ),
			'SSP' => __( 'South Sudanese pound', 'motopress-hotel-booking' ),
			'STD' => __( 'S&atilde;o Tom&eacute; and Pr&iacute;ncipe dobra', 'motopress-hotel-booking' ),
			'SYP' => __( 'Syrian pound', 'motopress-hotel-booking' ),
			'SZL' => __( 'Swazi lilangeni', 'motopress-hotel-booking' ),
			'THB' => __( 'Thai baht', 'motopress-hotel-booking' ),
			'TJS' => __( 'Tajikistani somoni', 'motopress-hotel-booking' ),
			'TMT' => __( 'Turkmenistan manat', 'motopress-hotel-booking' ),
			'TND' => __( 'Tunisian dinar', 'motopress-hotel-booking' ),
			'TOP' => __( 'Tongan pa&#x2bb;anga', 'motopress-hotel-booking' ),
			'TRY' => __( 'Turkish lira', 'motopress-hotel-booking' ),
			'TTD' => __( 'Trinidad and Tobago dollar', 'motopress-hotel-booking' ),
			'TWD' => __( 'New Taiwan dollar', 'motopress-hotel-booking' ),
			'TZS' => __( 'Tanzanian shilling', 'motopress-hotel-booking' ),
			'UAH' => __( 'Ukrainian hryvnia', 'motopress-hotel-booking' ),
			'UGX' => __( 'Ugandan shilling', 'motopress-hotel-booking' ),
			'USD' => __( 'United States (US) dollar', 'motopress-hotel-booking' ),
			'UYU' => __( 'Uruguayan peso', 'motopress-hotel-booking' ),
			'UZS' => __( 'Uzbekistani som', 'motopress-hotel-booking' ),
			'VEF' => __( 'Venezuelan bol&iacute;var', 'motopress-hotel-booking' ),
			'VES' => __( 'Bol&iacute;var soberano', 'motopress-hotel-booking' ),
			'VND' => __( 'Vietnamese &#x111;&#x1ed3;ng', 'motopress-hotel-booking' ),
			'VUV' => __( 'Vanuatu vatu', 'motopress-hotel-booking' ),
			'WST' => __( 'Samoan t&#x101;l&#x101;', 'motopress-hotel-booking' ),
			'XAF' => __( 'Central African CFA franc', 'motopress-hotel-booking' ),
			'XCD' => __( 'East Caribbean dollar', 'motopress-hotel-booking' ),
			'XOF' => __( 'West African CFA franc', 'motopress-hotel-booking' ),
			'XPF' => __( 'CFP franc', 'motopress-hotel-booking' ),
			'YER' => __( 'Yemeni rial', 'motopress-hotel-booking' ),
			'ZAR' => __( 'South African rand', 'motopress-hotel-booking' ),
			'ZMW' => __( 'Zambian kwacha', 'motopress-hotel-booking' )
		);
		$labels = apply_filters( 'mphb_currency_labels', $labels );

		$symbols = array(
			'AED' => '&#x62f;.&#x625;',
			'AFN' => '&#x60b;',
			'ALL' => 'L',
			'AMD' => 'AMD',
			'ANG' => '&fnof;',
			'AOA' => 'Kz',
			'ARS' => '&#36;',
			'AUD' => '&#36;',
			'AWG' => 'Afl.',
			'AZN' => 'AZN',
			'BAM' => 'KM',
			'BBD' => '&#36;',
			'BDT' => '&#2547;&nbsp;',
			'BGN' => '&#1083;&#1074;.',
			'BHD' => '.&#x62f;.&#x628;',
			'BIF' => 'Fr',
			'BMD' => '&#36;',
			'BND' => '&#36;',
			'BOB' => 'Bs.',
			'BRL' => '&#82;&#36;',
			'BSD' => '&#36;',
			'BTC' => '&#3647;',
			'BTN' => 'Nu.',
			'BWP' => 'P',
			'BYR' => 'Br',
			'BYN' => 'Br',
			'BZD' => '&#36;',
			'CAD' => '&#36;',
			'CDF' => 'Fr',
			'CHF' => '&#67;&#72;&#70;',
			'CLP' => '&#36;',
			'CNY' => '&yen;',
			'COP' => '&#36;',
			'CRC' => '&#x20a1;',
			'CUC' => '&#36;',
			'CUP' => '&#36;',
			'CVE' => '&#36;',
			'CZK' => '&#75;&#269;',
			'DJF' => 'Fr',
			'DKK' => 'DKK',
			'DOP' => 'RD&#36;',
			'DZD' => '&#x62f;.&#x62c;',
			'EGP' => 'EGP',
			'ERN' => 'Nfk',
			'ETB' => 'Br',
			'EUR' => '&euro;',
			'FJD' => '&#36;',
			'FKP' => '&pound;',
			'GBP' => '&pound;',
			'GEL' => '&#x20be;',
			'GGP' => '&pound;',
			'GHS' => '&#x20b5;',
			'GIP' => '&pound;',
			'GMD' => 'D',
			'GNF' => 'Fr',
			'GTQ' => 'Q',
			'GYD' => '&#36;',
			'HKD' => '&#36;',
			'HNL' => 'L',
			'HRK' => 'Kn',
			'HTG' => 'G',
			'HUF' => '&#70;&#116;',
			'IDR' => 'Rp',
			'ILS' => '&#8362;',
			'IMP' => '&pound;',
			'INR' => '&#8377;',
			'IQD' => '&#x639;.&#x62f;',
			'IRR' => '&#xfdfc;',
			'IRT' => '&#x062A;&#x0648;&#x0645;&#x0627;&#x0646;',
			'ISK' => 'kr.',
			'JEP' => '&pound;',
			'JMD' => '&#36;',
			'JOD' => '&#x62f;.&#x627;',
			'JPY' => '&yen;',
			'KES' => 'KSh',
			'KGS' => '&#x441;&#x43e;&#x43c;',
			'KHR' => '&#x17db;',
			'KMF' => 'Fr',
			'KPW' => '&#x20a9;',
			'KRW' => '&#8361;',
			'KWD' => '&#x62f;.&#x643;',
			'KYD' => '&#36;',
			'KZT' => 'KZT',
			'LAK' => '&#8365;',
			'LBP' => '&#x644;.&#x644;',
			'LKR' => '&#xdbb;&#xdd4;',
			'LRD' => '&#36;',
			'LSL' => 'L',
			'LYD' => '&#x644;.&#x62f;',
			'MAD' => '&#x62f;.&#x645;.',
			'MDL' => 'MDL',
			'MGA' => 'Ar',
			'MKD' => '&#x434;&#x435;&#x43d;',
			'MMK' => 'Ks',
			'MNT' => '&#x20ae;',
			'MOP' => 'P',
			'MRO' => 'UM',
			'MUR' => '&#x20a8;',
			'MVR' => '.&#x783;',
			'MWK' => 'MK',
			'MXN' => '&#36;',
			'MYR' => '&#82;&#77;',
			'MZN' => 'MT',
			'NAD' => '&#36;',
			'NGN' => '&#8358;',
			'NIO' => 'C&#36;',
			'NOK' => '&#107;&#114;',
			'NPR' => '&#8360;',
			'NZD' => '&#36;',
			'OMR' => '&#x631;.&#x639;.',
			'PAB' => 'B/.',
			'PEN' => 'S/.',
			'PGK' => 'K',
			'PHP' => '&#8369;',
			'PKR' => '&#8360;',
			'PLN' => '&#122;&#322;',
			'PRB' => '&#x440;.',
			'PYG' => '&#8370;',
			'QAR' => '&#x631;.&#x642;',
			'RMB' => '&yen;',
			'RON' => 'lei',
			'RSD' => '&#x434;&#x438;&#x43d;.',
			'RUB' => '&#8381;',
			'RWF' => 'Fr',
			'SAR' => '&#x631;.&#x633;',
			'SBD' => '&#36;',
			'SCR' => '&#x20a8;',
			'SDG' => '&#x62c;.&#x633;.',
			'SEK' => '&#107;&#114;',
			'SGD' => '&#36;',
			'SHP' => '&pound;',
			'SLL' => 'Le',
			'SOS' => 'Sh',
			'SRD' => '&#36;',
			'SSP' => '&pound;',
			'STD' => 'Db',
			'SYP' => '&#x644;.&#x633;',
			'SZL' => 'L',
			'THB' => '&#3647;',
			'TJS' => '&#x405;&#x41c;',
			'TMT' => 'm',
			'TND' => '&#x62f;.&#x62a;',
			'TOP' => 'T&#36;',
			'TRY' => '&#8378;',
			'TTD' => '&#36;',
			'TWD' => '&#78;&#84;&#36;',
			'TZS' => 'Sh',
			'UAH' => '&#8372;',
			'UGX' => 'UGX',
			'USD' => '&#36;',
			'UYU' => '&#36;',
			'UZS' => 'UZS',
			'VEF' => 'Bs F',
			'VES' => 'Bs.S',
			'VND' => '&#8363;',
			'VUV' => 'Vt',
			'WST' => 'T',
			'XAF' => 'CFA',
			'XCD' => '&#36;',
			'XOF' => 'CFA',
			'XPF' => 'Fr',
			'YER' => '&#xfdfc;',
			'ZAR' => '&#82;',
			'ZMW' => 'ZK'
		);
		$symbols = apply_filters( 'mphb_currency_symbols', $symbols );

		foreach ( $labels as $key => &$label ) {
			$label .= ' (' . $symbols[$key] . ')';
		}
		$this->labels	 = $labels;
		$this->symbols	 = $symbols;

		$positions = array(
			'before'		 => __( 'Before', 'motopress-hotel-booking' ),
			'after'			 => __( 'After', 'motopress-hotel-booking' ),
			'before_space'	 => __( 'Before with space', 'motopress-hotel-booking' ),
			'after_space'	 => __( 'After with space', 'motopress-hotel-booking' )
		);
		$this->positions = $positions;
	}

	public function getLabels(){
		return $this->labels;
	}

	public function getPositions(){
		return $this->positions;
	}

	public function getSymbols(){
		return $this->symbols;
	}

	public function getLabel( $key ){
		return isset( $this->labels[$key] ) ? $this->labels[$key] : '';
	}

	/**
	 * Get symbol from settings.
	 *
	 * @param string $key
	 * @return string
	 */
	public function getSymbol( $key ){
		return isset( $this->symbols[$key] ) ? $this->symbols[$key] : '';
	}

}
