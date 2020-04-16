<?php
namespace shgysk8zer0\PHPSchema\Interfaces;

interface PlaceInterface extends ThingInterface
{
	public function getAddress():? PostalAddressInterface;

	public function setAddress(?PostalAddressInterface $val): void;

	public function getGeo():? GeoCoordinatesInterface;

	public function setGeo(?GeoCoordinatesInterface $val): void;
}
