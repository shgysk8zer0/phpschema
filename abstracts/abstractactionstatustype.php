<?php

namespace shgysk8zer0\PHPSchema\Abstracts;

use \shgysk8zer0\PHPSchema\Interfaces\{ActionStatusTypeInterface};

abstract class AbstractActionStatusType extends AbstractEnumeration implements ActionStatusTypeInterface
{
	public const TYPE = 'ActionStatusType';
}
