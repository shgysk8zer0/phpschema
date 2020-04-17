<?php
namespace shgysk8zer0\PHPSchema\Traits;
use \shgysk8zer0\PHPSchema\Interfaces\{GeoCoordinatesInterface};
trait GeoTrait
{
	private $_geo = null;

	public function getGeo():? GeoCoordinatesInterface
	{
		return $this->_geo;
	}

	public function setGeo(?GeoCoordinatesInterface $val): void
	{
		if (isset($val) and $this instanceof GeoCoordinatesInterface) {
			$this->setElevation($val->getElevation());
			$this->setLatitude($val->getLatitude());
			$this->setLongitude($val->getLongitude());
		} elseif ($this instanceof GeoCoordinatesInterface) {
			$this->setElevation(null);
			$this->setLatitude(null);
			$this->setLongitude(null);
		}
		$this->_geo = $val;
	}
}
