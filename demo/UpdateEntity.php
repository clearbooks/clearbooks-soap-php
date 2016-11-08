<?php

require_once __DIR__ . '/includes.php';

$entity = new \Clearbooks_Soap_1_0_Entity();
$entity->company_name = "ClearBooks Api Example";
$entity->supplier     = new \Clearbooks_Soap_1_0_EntityExtra();
$entityId = $client->createEntity( $entity );

$entityQuery = new \Clearbooks_Soap_1_0_EntityQuery();
$entityQuery->id = [ $entityId ];
list( $storedEntity ) = $client->listEntities( $entityQuery  );

$storedEntity->town = "London";
$storedEntity->bankAccount->bankName = "Bank";
( $storedEntity->bankAccount = null);
$storedEntity->supplier = null;
$client->updateEntity( $storedEntity->id, $storedEntity );

list( $updatedEntity ) = $client->listEntities( $entityQuery );

