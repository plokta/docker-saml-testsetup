<?php
/**
 * SAML 2.0 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

$metadata[getenv('SIMPLESAMLPHP_SP_ENTITY_ID')] = array(
    'AssertionConsumerService' => getenv('SIMPLESAMLPHP_SP_ASSERTION_CONSUMER_SERVICE'),
    'SingleLogoutService' => array(
	    array(
		'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:' . getenv('SIMPLESAMLPHP_SLO_RESP_BINDING'),
	    	'Location' => getenv('SIMPLESAMLPHP_SP_SINGLE_LOGOUT_SERVICE'),
	),
    ),
    #'WantAssertionsSigned' => getenv('SIMPLESAMLPHP_SIGN_ASSERTION' === 'true'), 
    'saml20.sign.assertion' => getenv('SIMPLESAMLPHP_SIGN_ASSERTION') === 'true',
    'saml20.sign.response' => getenv('SIMPLESAMLPHP_SIGN_RESPONSE') === 'true',
    'signature.algorithm' => getenv('SIMPLESAMLPHP_SIGNATURE_ALGORITHM'),
    'assertion.encryption' => getenv('SIMPLESAMLPHP_ENCRYPT_ASSERTIONS') === 'true',
    'sign.logout' => getenv('SIMPLESAMLPHP_SIGN_LOGOUT') === 'true',
    'validate.logout' => getenv('SIMPLESAMLPHP_VALIDATE_LOGOUT') === 'true',
    'validate.authnrequest' => getenv('SIMPLESAMLPHP_VALIDATE_AUTHNREQUEST') === 'true',
    'certificate' => 'sp-cert.pem',    
);
