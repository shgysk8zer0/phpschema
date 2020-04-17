<?php
namespace shgysk8zer0\PHPSchema;

use \shgysk8zer0\PHPSchema\Interfaces\{
	VirtualLocationInterface,
	EventLocationInterface,
};

class VirtualLocation extends Intangible implements VirtualLocationInterface, EventLocationInterface
{
	public const TYPE    = 'VirtualLocation';
}
