<?php 
	function getwhois($domain, $tld)
	{
		require_once("whois.class.php");

		$whois = new Whois();

		if( !$whois->ValidDomain($domain.'.'.$tld) ){
			return 'Sorry, the domain is not valid or not supported.';
		}

		if( $whois->Lookup($domain.'.'.$tld) )
		{
			return $whois->GetData(1);
		}else{
			return 'Sorry, an error occurred.';
		}
	}

	$domain = trim($_POST['dominio']);

	$dot = strpos($domain, '.');
	$sld = substr($domain, 0, $dot);
	$tld = substr($domain, $dot+1);

	$whois = getwhois($sld, $tld);


    function buscarCadena($whois,$palabra)
    {
        if (strstr($whois,$palabra))
        {
            echo '<p class="disponible">Felicitaciones su dominio "'.$_POST['dominio'].'" está libre.</p>';
        }
        else
        {
            echo '<p class="ocupado">Lo lamentamos el dominio "'.$_POST['dominio'].'" ya está registrado.</p>';
        }
    }
   
    $palabra="No match";
   	buscarCadena($whois,$palabra);
?>



