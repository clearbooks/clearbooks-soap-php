<?php
require_once __DIR__ . '/includes.php';

// create the entity
$entity = new \Clearbooks_Soap_1_0_Entity();
$entity->address1     = '107 Hammersmith Road';
$entity->address2     = 'West Kensington';
$entity->building     = 'Master\'s House';
$entity->company_name = 'Clear Books';
$entity->email        = 'support@clearbooks.co.uk';
$entity->postcode     = 'W14 0QH';
$entity->town         = 'London';
$entity->website      = 'http://www.clearbooks.co.uk';

// indicate that the entity is a supplier - an entity must be a customer, supplier or both
$entity->supplier     = new \Clearbooks_Soap_1_0_EntityExtra();

$entityId = $client->createEntity( $entity );
print_r( $entityId );

/*
32
*/