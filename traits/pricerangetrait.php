<?php
namespace shgysk8zer0\PHPSchema\Traits;

trait PriceRangeTrait
{
	private $_priceRange = null;

	public function getPriceRange():? string
	{
		return $this->_priceRange;
	}

	public function setPriceRange(?string $val)
	{
		$this->_priceRange = $val;
	}
}
