<?php
namespace shgysk8zer0\PHPSchema\Interfaces;

use \DateTimeInterface;

interface MediaObjectInterface extends CreativeWorkInterface
{
	public function getHeight():? int;

	public function setHeight(?int $val): void;

	public function getUploadDate():? DateTimeInterface;

	public function getUploadDateAsString():? string;

	public function setUploadDate(?DateTimeInterface $val): void;

	public function getWidth():? int;

	public function setWidth(?int $val): void;
}
