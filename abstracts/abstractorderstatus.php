<?php
namespace shgysk8zer0\PHPSchema\Abstracts;
use \shgysk8zer0\PHPSchema\Interfaces\{OrderStatusInterface};

abstract class AbstractOrderStatus extends AbstractEnnumeration implements OrderStatusInterface
{
	const TYPE = 'OrderStatus';
}
