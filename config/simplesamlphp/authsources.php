<?php

if (getenv('SIMPLESAMLPHP_IS_IDP') === 'true') {

	$config = array(

	    'IdP-Local-Admin' => array(
		'core:AdminPassword',
	    ),

	    'example-userpass' => array(
		'exampleauth:UserPass',
		'user1:user1pass' => array(
		    'uid' => array('1'),
		    'eduPersonAffiliation' => array('group1'),
		    'email' => 'user1@example.com',
		    'name' => 'Alice',
		),
		'user2:user2pass' => array(
		    'uid' => array('2'),
		    'eduPersonAffiliation' => array('group2'),
		    'email' => 'user2@example.com',
	    	    'name' => 'Bob',
	    	),
	    ),
	);
} else {

	$config = array(

	    'SP-Local-Admin' => array(
		'core:AdminPassword',
	    ),

	    'Test-IdP' => array(
		'saml:SP',
		'entityID' => getenv('SIMPLESAMLPHP_SP_ENTITY_ID'),
		'idp' => getenv('SIMPLESAMLPHP_IDP_METADATA_URL'),
		'privatekey' => 'sp-key.pem',
		'certificate' => 'sp-cert.pem',
	    ),

	);
}
