<?php
error_reporting(E_ERROR);

if (!empty($_GET)) {

// URL Mobicach
	$url = "http://serveurtest.com/webservice";
// nom du compte
	$rec = "demouser";

//$numero de téléphone
	$tel = $_GET['tel'];

//$code pin
	$pin = $_GET['pin'];

//$montant a envoyer
	$montant = $_GET['montant'];

	$resultat = array();

	$xml = '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:rec="http://receivewebservice.mmoney.com/"> <soapenv:Header/> <soapenv:Body> <rec:' . $rec . '> <arg1> <mpin>' . $pin . '</mpin> <amount>' . $montant . '</amount> <msisdn>' . $tel . '</msisdn> <type>CMPREQ</type> </arg1> </rec:' . $rec . '> </soapenv:Body> </soapenv:Envelope> ';

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HTTPHEADER, Array("Content-Type: text/xml"));
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$data = curl_exec($ch);
	curl_close($ch);

	$response = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $data);
	$xm = new SimpleXMLElement($response);
	$body = $xm->xpath('//soapenvBody')[0];

	$statut = (int) $body->recuserDetailsResponse->return->txnstatus;

	if ($statut == 0) {

		$resultat[] = array("op" => 'success');
		$json = array("msg" => $resultat);

	} else {

		$resultat[] = array("op" => 'echec');
		$json = array("msg" => $resultat);

	}

	header('Content-type: application/json');
	echo json_encode($json);
}

?>
