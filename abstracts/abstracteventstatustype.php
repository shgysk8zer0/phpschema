<?php
namespace shgysk8zer0\PHPSchema\Abstracts;
use \shgysk8zer0\PHPSchema\Interfaces\{EventStatusTypeInterface};
abstract class AbstractEventStatusType extends AbstractEnumeration implements EventStatusTypeInterface
{
	const TYPE = 'EventStatusType';
}
