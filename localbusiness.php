<?php
namespace shgysk8zer0\PHPSchema;
use \shgysk8zer0\PHPSchema\Interfaces\{PlaceInterface, GeoCoordinatesInterface};
use \shgysk8zer0\PHPSchema\Traits\{PlaceTrait};

class LocalBusiness extends Organization implements PlaceInterface, GeoCoordinatesInterface
{
	use PlaceTrait;
	public const TYPE = 'LocalBusiness';

	public function jsonSerialize(): array
	{
		return array_merge(
			parent::jsonSerialize(),
			$this->_placeJSON()
		);
	}
}
