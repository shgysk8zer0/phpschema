<?php
namespace shgysk8zer0\PHPSchema\Interfaces;
use \JsonSerializable;

interface PaymentStatusTypeInterface extends JsonSerializable
{
	// This should be used for setting ennumerable event status via string
	public function getValue():? string;

	public function getStatus():? string;
}
