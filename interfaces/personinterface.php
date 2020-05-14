<?php
namespace shgysk8zer0\PHPSchema\Interfaces;
use \DateTimeInterface;
interface PersonInterface extends ThingInterface
{
	public function getBirthDate():? DateTimeInterface;

	public function getBirthDateAsString():? string;

	public function setBirthDate(?DateTimeInterface $val): void;

	public function getHomeLocation():? PlaceInterface;

	public function setHomeLocation(?PlaceInterface $val): void;

	public function getWorkLocation():? PlaceInterface;

	public function setWorkLocation(?PlaceInterface $val): void;

	public function getWorksFor():? OrganizationInterface;

	public function setWorksFor(?OrganizationInterface $org): void;
}
