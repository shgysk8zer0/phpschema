<?php
namespace shgysk8zer0\PHPSchema\Traits;

use \shgysk8zer0\PHPSchema\Interfaces\{PriceSpecificationInterface};

trait PriceSpecificationTrait
{
	private $_priceSpecification = [];

	final public function getPriceSpecification(): iterable
	{
		return $this->_priceSpecification;
	}

	final public function setPriceSpecification(PriceSpecificationInterface... $vals): void
	{
		$this->_priceSpecification = $vals;
	}
}
