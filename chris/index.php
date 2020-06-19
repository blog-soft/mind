<?php
// Query params are:  

require_once dirname(__FILE__) . '/kclick_client.php';
$client = new KClickClient('https://yourfunnel.club/api.php?', 'q6pvcjb9vmtgtpt3k9fy1lllxg7pv9v6');
$client->sendAllParams();       // to send all params from page query
$client->forceRedirectOffer();       // redirect to offer if an offer is chosen
// $client->param('sub_id_5', '123'); // you can send any params
// $client->keyword('PASTE_KEYWORD');  // send custom keyword
// $client->currentPageAsReferrer(); // to send current page URL as click referrer
// $client->debug();              // to enable debug mode and show the errors
// $client->execute();             // request to api, show the output and continue
$client->executeAndBreak();     // to stop page execution if there is redirect or some output
?>