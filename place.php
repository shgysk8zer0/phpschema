<?php
namespace shgysk8zer0\PHPSchema;
use \shgysk8zer0\PHPSchema\Interfaces\{
	GeoCoordinatesInterface,
	PostalAddressInterface,
	PlaceInterface,
};
use \shgysk8zer0\PHPSchema\Traits\{PlaceTrait, GeoCoordinatesTrait};
class Place extends Thing implements PlaceInterface, GeoCoordinatesInterface
{
	public const TYPE = 'Place';

	use PlaceTrait;

	public function jsonSerialize(): array
	{
		return array_merge(
			parent::jsonSerialize(),
			$this->_placeJSON()
		);
	}
}
