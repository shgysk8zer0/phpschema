<?php
namespace shgysk8zer0\PHPSchema;
use \shgysk8zer0\PHPSchema\Interfaces\{PlaceInterface, GeoCoordinatesInterface};
use \shgysk8zer0\PHPSchema\Traits\{PlaceTrait, PriceRangeTrait};

class LocalBusiness extends Organization implements PlaceInterface, GeoCoordinatesInterface
{
	use PlaceTrait;
	use PriceRangeTrait;

	public const TYPE = 'LocalBusiness';

	public function jsonSerialize(): array
	{
		return array_merge(
			parent::jsonSerialize(),
			$this->_placeJSON(),
			[
				'priceRange' => $this->getPriceRange(),
			]
		);
	}
}
