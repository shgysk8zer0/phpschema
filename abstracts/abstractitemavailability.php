<?php
namespace shgysk8zer0\PHPSchema\Abstracts;

use \shgysk8zer0\PHPSchema\Interfaces\{ItemAvailabilityInterface};

abstract class AbstractItemAvailability extends AbstractEnnumeration implements ItemAvailabilityInterface
{
	const TYPE = 'ItemAvailability';
}
