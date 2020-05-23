<?php
namespace shgysk8zer0\PHPSchema\Abstracts;
use \shgysk8zer0\PHPSchema\Interfaces\{OrderStatusInterface};

abstract class AbstractOrderStatus extends AbstractEnumeration implements OrderStatusInterface
{
	const TYPE = 'OrderStatus';
}
