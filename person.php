<?php
namespace shgysk8zer0\PHPSchema;
use \shgysk8zer0\PHPSchema\Interfaces\{
		PersonInterface,
		OrganizationInterface,
		PersonOrOrganizationInterface,
		PlaceInterface,
};
use \shgysk8zer0\PHPSchema\Traits\{ContactableTrait, DateTimeTrait};
use \DateTimeInterface;
use \Throwable;

class Person extends Thing implements PersonInterface, PersonOrOrganizationInterface
{
	use ContactableTrait;
	use DateTimeTrait;

	public const TYPE = 'Person';

	private $_birthDate = null;

	private $_homeLocation = null;

	private $_workLocation = null;

	private $_worksFor = null;

	public function jsonSerialize(): array
	{
		return array_merge(
			parent::jsonSerialize(),
			$this->_contactableJSON(),
			[
				'birthDate'    => $this->getBirthDateAsString(),
				'homeLocation' => $this->getHomeLocation(),
				'workLocation' => $this->getWorkLocation(),
				'worksFor'     => $this->getWorksFor(),
			]
		);
	}

	public function getBirthDate():? DateTimeInterface
	{
		return $this->_birthDate;
	}

	public function getBirthDateAsString():? string
	{
		return $this->_asDateString($this->getBirthDate());
	}

	public function setBirthDate(?DateTimeInterface $val): void
	{
		$this->_birthDate = $val;
	}

	public function getHomeLocation():? PlaceInterface
	{
		return $this->_homeLocation;
	}

	public function setHomeLocation(?PlaceInterface $val): void
	{
		$this->_homeLocation = $val;
	}

	public function getWorkLocation():? PlaceInterface
	{
		return $this->_workLocation;
	}

	public function setWorkLocation(?PlaceInterface $val): void
	{
		$this->_workLocation = $val;
	}

	public function getWorksFor():? OrganizationInterface
	{
		return $this->_worksFor;
	}

	public function setWorksFor(?OrganizationInterface $val): void
	{
		$this->_worksFor = $val;
	}

	public function setFromObject(object $data): void
	{
		parent::setFromObject($data);
		$this->setEmail($data->email ?? null);
		$this->setTelephone($data->telephone ?? null);

		if (isset($data->address)) {
			$this->setAddress(new PostalAddress($data->address));
		}
	}
}
