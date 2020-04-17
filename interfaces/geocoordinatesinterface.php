<?php
namespace shgysk8zer0\PHPSchema\Interfaces;

interface GeoCoordinatesInterface extends StructuredValueInterface
{
	public function getElevation():? float;

	public function setElevation(?float $val): void;

	public function getLatitude():? float;

	public function setLatitude(?float $val): void;

	public function getLongitude():? float;

	public function setLongitude(?float $val): void;
}
