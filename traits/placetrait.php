<?php
namespace shgysk8zer0\PHPSchema\Traits;

trait PlaceTrait
{
	use GeoTrait;
	use AddressTrait;
	use TelephoneTrait;
	use FaxTrait;
	use GeoCoordinatesTrait;

	protected function _placeJSON(): array
	{
		return array_merge(
			$this->_addressJSON(),
			$this->_telephoneJSON(),
			$this->_faxJSON(),
			[
				'address'   => $this->getAddress(),
				'geo'       => $this->getGeo(),
			]
		);
	}

	// abstract protected function _addressJSON(): array;

	// abstract protected function _telephoneJSON(): array;

	// abstract protected function _faxJSON(): array;
}
