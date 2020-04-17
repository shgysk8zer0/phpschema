<?php
namespace shgysk8zer0\PHPSchema\Traits;

use \shgysk8zer0\PHPSchema\Interfaces\{OfferInterface};

trait OffersTrait
{
	private $_offers = [];

	public function getOffers(): array
	{
		return $this->_offers;
	}

	public function addOffers(OfferInterface... $vals): void
	{
		$this->_offers = array_merge($this->_offers, $vals);
	}

	public function setOffers(OfferInterface... $val): void
	{
		$this->_offers = $val;
	}
}
