<?php

/*
* @package >Module - Facebook Comments By Internet Partner v1.0 for Joomla 2.5 and 3.0
* @copyright    Copyright (C) 2011 Internet Partner Agency <office@internetpartner.info>. All rights reserved.
* @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Joomla! is free software.
* This extension is made for Joomla! 1.6 and newer;

** THE BEST CMS : JOOMLA! **
*/

	defined( '_JEXEC' ) or die( 'Restricted access' );

	function ipModuleSetLangFBComments( $fblang = null ) {
		$lang = null;
		$deflang = "en_US";
		$jLang =& JFactory::getLanguage();
		$joomla_lang = $jLang->getLocale();
		$joomla_lang = explode('.', $joomla_lang[0]);
		$joomla_lang = str_replace('-', '_', $joomla_lang[0]);
		if( $fblang ) { $lang =  $fblang; }
		else { $lang = $joomla_lang; }
	
		$fblangs = array( "af_ZA"=>"Afrikaans", "sq_AL"=>"Albanian", "ar_AR"=>"Arabic", "hy_AM"=>"Armenian", "az_AZ"=>"Azeri", 
				"eu_ES"=>"Basque", "be_BY"=>"Belarusian", "bn_IN"=>"Bengali", "bs_BA"=>"Bosnian", "bg_BG"=>"Bulgarian", 
				"ca_ES"=>"Catalan", "hr_HR"=>"Croatian", "cs_CZ"=>"Czech", "da_DK"=>"Danish", "nl_NL"=>"Dutch", 
				"en_PI"=>"English (Pirate)", "en_GB"=>"English (UK)", "en_UD"=>"English (Upside Down)", "en_US"=>"English (US)", 
				"eo_EO"=>"Esperanto", "et_EE"=>"Estonian", "fo_FO"=>"Faroese", "tl_PH"=>"Filipino", "fi_FI"=>"Finnish", 
				"fr_CA"=>"French (Canada)", "fr_FR"=>"French (France)", "fy_NL"=>"Frisian", "gl_ES"=>"Galician", "ka_GE"=>"Georgian", 
				"de_DE"=>"German", "el_GR"=>"Greek", "he_IL"=>"Hebrew", "hi_IN"=>"Hindi", "hu_HU"=>"Hungarian", "is_IS"=>"Icelandic", 
				"id_ID"=>"Indonesian", "ga_IE"=>"Irish", "it_IT"=>"Italian", "ja_JP"=>"Japanese", "km_KH"=>"Khmer", "ko_KR"=>"Korean", 
				"ku_TR"=>"Kurdish", "la_VA"=>"Latin", "lv_LV"=>"Latvian", "fb_LT"=>"Leet Speak", "lt_LT"=>"Lithuanian", 
				"mk_MK"=>"Macedonian", "ms_MY"=>"Malay", "ml_IN"=>"Malayalam", "ne_NP"=>"Nepali", "nb_NO"=>"Norwegian (bokmal)",
				"nn_NO"=>"Norwegian (nynorsk)", "ps_AF"=>"Pashto", "fa_IR"=>"Persian", "pl_PL"=>"Polish", "pt_BR"=>"Portuguese (Brazil)",
				"pt_PT"=>"Portuguese (Portugal)", "pa_IN"=>"Punjabi", "ro_RO"=>"Romanian", "ru_RU"=>"Russian", "sr_RS"=>"Serbian",
				"zh_CN"=>"Simplified Chinese (China)", "sk_SK"=>"Slovak", "sl_SI"=>"Slovenian", "es_LA"=>"Spanish", 
				"es_ES"=>"Spanish (Spain)", "sw_KE"=>"Swahili", "sv_SE"=>"Swedish", "ta_IN"=>"Tamil", "te_IN"=>"Telugu", 
				"th_TH"=>"Thai", "zh_HK"=>"Traditional Chinese (Hong Kong)", "zh_TW"=>"Traditional Chinese (Taiwan)", 
				"tr_TR"=>"Turkish", "uk_UA"=>"Ukrainian", "vi_VN"=>"Vietnamese", "cy_GB"=>"Welsh");	

		if( $lang ) {	
			$find = null;
			foreach( $fblangs as $key => $value ) {
				if( $key == $lang ) { $find = true; break; }
			}
			if( $find == null ) { $lang = null; }
		}	
		if( $lang == null ) { $lang = $deflang; }
		return $lang;
	}
	

	$ips = explode(",", $params->get('blockedIPs') );
	foreach($ips as &$ip) { $ip = trim($ip); }
	if( in_array($_SERVER["REMOTE_ADDR"], $ips ) ) { 
		echo '<div style="clear:both;">' . $params->get('altMessage') . '</div>'; 
	}
	else {		
		$appId 		= $params->get('appId');
		$datanumposts  	 = $params->get('data-num-posts');         
		$datawidth  	 = $params->get('data-width');  
		$datacolorscheme = $params->get('data-colorscheme'); 
		$developerlink 	 = $params->get('developer-link');        

		if( $appId ) 			{ $appId = "&appId=".$appId; }
		if( $datanumposts ) 	{ $datanumposts = "data-num-posts='".$datanumposts."'"; }
		if( $datawidth ) 		{ $datawidth = "data-width='".$datawidth."'"; }
		if( $datacolorscheme )  { $datacolorscheme = "data-colorscheme='".$datacolorscheme."'"; }
		$lang = ipModuleSetLangFBComments( $params->get('lang') ); 		
			   
		echo "<div id='fb-root'></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = '//connect.facebook.net/".$lang."/all.js#xfbml=1$appId';
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
		
			<div class='fb-comments' data-href='http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']."' ".
					$datanumposts." ".$datawidth." ".$datacolorscheme."></div>";
	}
	
