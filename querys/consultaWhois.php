<?php 
	function getwhois($domain, $tld)
	{
		require_once("whois.class.php");

		$whois = new Whois();

		if( !$whois->ValidDomain($domain.'.'.$tld) ){
			echo 'Sorry, the domain is not valid or not supported.';
		}

		if( $whois->Lookup($domain.'.'.$tld) )
		{
			echo $whois->GetData(1);
		}else{
			echo 'Sorry, an error occurred.';
		}
	}

	$domain = trim($_POST['dominio']);

	$dot = strpos($domain, '.');
	$sld = substr($domain, 0, $dot);
	$tld = substr($domain, $dot+1);

	$whois = getwhois($sld, $tld);

	echo ""; 
	echo $whois;
	echo "";