<?php
namespace shgysk8zer0\PHPSchema;

if (PHP_SAPI === 'cli') {
	\date_default_timezone_set('America/Los_Angeles');
	\spl_autoload_register('spl_autoload');
	\set_include_path(dirname(__DIR__, 2));

	$person = new Person();
	$addr = new PostalAddress();
	$img = new ImageObject();

	$img->setIdentifier(trim(`uuidgen`));
	$img->setUrl('https://kernvalley.us/img/favicon.svg');
	$img->setHeight(256);
	$img->setWidth(256);

	$addr->setIdentifier(trim(`uuidgen`));
	$addr->setStreetAddress('619 Burlando Rd.');
	$addr->setPostOfficeBoxNumber('Box 1422');
	$addr->setAddressLocality('Kernville');
	$addr->setAddressRegion('CA');
	$addr->setAddressCountry('US');
	$addr->setPostalCode(93238);

	$person->setName('Chris Zuber');
	$person->setIdentifier(trim(`uuidgen`));
	$person->setEmail('shgysk8zer0@gmail.com');
	$person->setTelephone('+1-661-619-6712');
	$person->setImage($img);
	$person->setAddress($addr);

	echo json_encode($person, JSON_PRETTY_PRINT);
}
