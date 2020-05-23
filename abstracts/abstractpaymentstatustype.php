<?php
namespace shgysk8zer0\PHPSchema\Abstracts;

use \shgysk8zer0\PHPSchema\Interfaces\{PaymentStatusTypeInterface};

abstract class AbstractPaymentStatusType extends AbstractEnumeration implements PaymentStatusTypeInterface
{
	const TYPE = 'PaymentStatusType';
}
