<?php

$metadata[getenv('SIMPLESAMLPHP_IDP_METADATA_URL')] = array(
    'name' => array(
        'en' => 'Test IdP',
    ),
    'description' => 'Test IdP',
    'SingleSignOnService' => array (
        array (
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:' . getenv('SIMPLESAMLPHP_REQUEST_BINDING'),
            'Location' => getenv('SIMPLESAMLPHP_IDP_SSO_URL'),
        ),
    ),
    'certificate' => 'server.crt',
    'sign.authnrequest' => getenv('SIMPLESAMLPHP_SIGN_AUTHNREQUEST') === 'true',
    'sign.logout' => getenv('SIMPLESAMLPHP_SIGN_LOGOUT') === 'true',
    'validate.logout' => getenv('SIMPLESAMLPHP_VALIDATE_LOGOUT') === 'true',
);
