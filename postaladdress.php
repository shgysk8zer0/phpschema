<?php
namespace shgysk8zer0\PHPSchema;
use \shgysk8zer0\PHPSchema\Interfaces\{PostalAddressInterface};
use \shgysk8zer0\PHPAPI\{URL};
use \PDO;

class PostalAddress extends Thing implements  PostalAddressInterface
{
	private $_streetAddress = null;

	private $_postOfficeBoxNumber = null;

	private $_addressLocality = null;

	private $_addressRegion = null;

	private $_postalCode = null;

	private $_addressCountry = null;

	public function __toString(): string
	{
		return join(' ', array_filter([
			$this->getStreetAddress(),
			$this->getAddressLocality(),
			$this->getAddressRegion(),
			$this->getPostalCode(),
			$this->getAddressCountry(),
		]));
	}

	public function jsonSerialize(): array
	{
		return array_merge(
			parent::jsonSerialize(),
			[
				'streetAddress'       => $this->getStreetAddress(),
				'postOfficeBoxNumber' => $this->getPostOfficeBoxNumber(),
				'addressLocality'     => $this->getAddressLocality(),
				'addressRegion'       => $this->getAddressRegion(),
				'postalCode'          => $this->getPostalCode(),
				'addressCountry'      => $this->getAddressCountry(),
				'url'                 => $this->getUrl(),
			]
		);
	}

	final public function getStreetAddress():? string
	{
		return $this->_streetAddress;
	}

	final public function setStreetAddress(?string $val): void
	{
		$this->_streetAddress = $val;
	}

	final public function getPostOfficeBoxNumber():? string
	{
		return $this->_postOfficeBoxNumber;
	}

	final public function setPostOfficeBoxNumber(?string $val): void
	{
		$this->_postOfficeBoxNumber = $val;
	}

	final public function getAddressLocality():? string
	{
		return $this->_addressLocality;
	}

	final public function setAddressLocality(?string $val): void
	{
		$this->_addressLocality = $val;
	}

	final public function getAddressRegion():? string
	{
		return $this->_addressRegion;
	}

	final public function setAddressRegion(?string $val): void
	{
		$this->_addressRegion = $val;
	}

	final public function getPostalCode():? string
	{
		return $this->_postalCode;
	}

	final public function setPostalCode(?string $val): void
	{
		$this->_postalCode = $val;
	}

	final public function getAddressCountry():? string
	{
		return $this->_addressCountry;
	}

	final public function setAddressCountry(?string $val): void
	{
		$this->_addressCountry = $val;
	}

	public function setFromObject(?object $data): void
	{
		$this->setStreetAddress($data->streetAddress ?? null);
		$this->setPostOfficeBoxNumber($data->postOfficeBoxNumber ?? null);
		$this->setAddressLocality($data->addressLocality ?? null);
		$this->setAddressRegion($data->addressRegion ?? null);
		$this->setAddressCountry($data->addressCountry ?? null);
		$this->setPostalCode($data->postalCode ?? null);
	}
}
