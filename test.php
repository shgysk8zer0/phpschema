<?php
namespace shgysk8zer0\PHPSchema;
use \shgysk8zer0\PHPAPI\{SAPILogger, UUID, URL, Headers};
use \DateTimeImmutable;
const CONFIG_FILE = './config.ini';

if (in_array(PHP_SAPI, ['cli', 'cli-server'])) {
	define('CONFIG', parse_ini_file(CONFIG_FILE, false, INI_SCANNER_TYPED));
	date_default_timezone_set(CONFIG['timezone']);
	spl_autoload_register(CONFIG['autoloader']);
	set_include_path(join(PATH_SEPARATOR, array_map('realpath', CONFIG['include_path'])));
	Headers::contentType('application/json');

	$logger = new SAPILogger();

	$now     = new DateTimeImmutable();
	$person  = new Person();
	$addr    = new PostalAddress();
	$img     = new ImageObject();
	$event   = new MusicEvent();
	$place   = new Place();
	$geo     = new GeoCoordinates();
	$offer   = new Offer();
	$offer2  = new Offer();
	$org     = new Organization();
	$spec    = new PriceSpecification();
	$qty     = new QuantitativeValue();
	$article = new Article();
	$grav    = new ImageObject();
	$invoice = new Invoice();
	$order   = new Order();
	$price   = new MonetaryAmount();
	$item    = new OrderItem();
	$virt    = new VirtualLocation();

	$qty->setMinValue(5);
	$qty->setMaxValue(10);
	$qty->setUnitText('Persons');

	$spec->setIdentifier(new UUID());
	$spec->setEligibleQuantity($qty);
	$spec->setPrice(23.56);
	$spec->setPriceCurrency('USD');
	$spec->setValidFrom($now);
	$spec->setValidThrough($spec->getValidFrom()->modify('+5 days'));
	$spec->setValueAddedTaxIncluded(false);

	$img->setIdentifier(new UUID());
	$img->setUrl('https://kernvalley.us/img/icon-192.png');
	$img->setHeight(192);
	$img->setWidth(192);
	$img->setEncodingFormat('image/png');
	$img->setContentUrl($img->getUrl());

	$addr->setIdentifier(new UUID());
	$addr->setStreetAddress('619 Burlando Rd.');
	$addr->setPostOfficeBoxNumber('Box 1422');
	$addr->setAddressLocality('Kernville');
	$addr->setAddressRegion('CA');
	$addr->setAddressCountry('US');
	$addr->setPostalCode(93238);

	$grav->setIdentifier(new UUID());
	$grav->setUrl('https://secure.gravatar.com/avatar/43578597e449298f5488c2407c8a8ae5?s=256&d=mm');
	$grav->setWidth(256);
	$grav->setHeight(256);
	$grav->setEncodingFormat('image/jpeg');
	$grav->setContentUrl($grav->getUrl());

	$geo->setIdentifier(new UUID());
	$geo->setElevation(808.6);
	$geo->setLongitude(-118.4323155);
	$geo->setLatitude(35.7645902);

	$org->setIdentifier(new UUID());
	$org->setName('KernValley.US');
	$org->setAddress($addr);
	$org->setLogo($img);
	$org->setImage($org->getLogo());
	$org->setEmail('admin@kernvalley.us');
	$org->setUrl('https://kernvalley.us');
	$org->setTelephone('+1-661-619-6712');
	// $org->setPriceRange('$$');

	$person->setName('Chris Zuber');
	$person->setIdentifier(new UUID());
	$person->setEmail('shgysk8zer0@gmail.com');
	$person->setTelephone('+1-661-619-6712');
	$person->setImage($grav);
	$person->setAddress($addr);
	$person->setWorksFor($org);
	$person->setUrl('https://shgysk8zer0.github.io');
	$person->setBirthDate(new \DateTimeImmutable('1985-03-26'));

	$place->setName('Home');
	$place->setIdentifier(new UUID());
	$place->setAddress($addr);
	$place->setGeo($geo);

	$offer->setIdentifier(new UUID());
	$offer->setName('General Admission');
	$offer->setPrice(14.95);
	$offer->setPriceCurrency('USD');
	$offer->setValidFrom($now);
	$offer->setAvailability(new OnlineOnly());
	$offer->setValidThrough($offer->getValidFrom()->modify('+10 min'));
	$offer->setUrl("./{$offer->getIdentifier()}", 'https://events.kernvalley.us/event/');

	$offer2->setIdentifier(new UUID());
	$offer2->setName('Early Admission');
	$offer2->setPriceSpecification($spec);
	$offer2->setValidFrom($spec->getValidFrom());
	$offer2->setValidThrough($spec->getValidThrough());
	$offer2->setPrice($spec->getPrice());
	$offer2->setPriceCurrency($spec->getPriceCurrency());
	$offer2->setUrl('https://events.kernvalley.us/event/' . $offer2->getIdentifier());

	$virt->setIdentifier(new UUID());
	$virt->setUrl('https://cloud.kernvalley.us/call/jjcndhw6');
	$virt->setName('Nextcloud Talk');
	$virt->setDescription('An online video chat');

	$event->setIdentifier(new UUID());
	$event->setOrganizer($person);
	$event->setLocation($virt);
	$event->setIdentifier(new UUID());
	$event->setName('Test Event');
	$event->setEventStatus(new EventScheduled());
	$event->setStartDate($now);
	$event->setEndDate($event->getStartDate()->modify('+2 hours'));
	$event->setOffers($offer, $offer2);
	$event->setImage($img);
	$event->setEventAttendanceMode(new OnlineEventAttendanceMode());
	$event->setDescription('This is just a test event');
	$event->setPerformer($person);
	$event->setUrl('https://events.kernvalley.us');

	$article->setIdentifier(new UUID());
	$article->setAuthor($person);
	$article->setPublisher($person->getWorksFor());
	$article->setDatePublished($now);
	$article->setDateCreated($now);
	$article->setDateModified($now);
	$article->setHeadline('Event Article');
	$article->setDescription("An Article about {$event->getName()}");
	$article->setArticleBody('Lorem Ipsum and stuff');
	$article->setText($article->getArticleBody());
	$article->setCopyRightYear($now->format('Y'));
	$article->setCopyrightHolder($org);
	$article->setAbout($event);
	$article->setImage($img);

	$item->setIdentifier(new UUID());
	$item->setOrderItemNumber($item->getIdentifier());
	$item->setName('An item');
	$item->setDescription('Just some thing I bought');
	$item->setOffers($offer, $offer2);
	$item->setOrderItemStatus(new OrderPaymentDue());

	$order->setIdentifier(new UUID());
	$order->setCustomer($person);
	$order->setSeller($org);
	$order->setOrderDate($now);
	$order->setOrderedItem($item);

	$invoice->setIdentifier(new UUID());
	$invoice->setCustomer($person);
	$invoice->setProvider($org);
	$invoice->setPaymentDueDate($now);
	$invoice->setPaymentStatus(new PaymentPastDue());
	$invoice->setReferencesOrder($order);
	$invoice->setTotalPaymentDue($price);
	echo json_encode($article, JSON_PRETTY_PRINT) . PHP_EOL;

	// print_r(get_included_files());
	// exit();
	// $logger->debug(new ItemAvailability('OnlineOnly'));
	// echo json_encode($article, JSON_PRETTY_PRINT);
}
