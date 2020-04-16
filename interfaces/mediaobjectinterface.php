<?php
namespace shgysk8zer0\PHPSchema\Interfaces;

use \DateTimeInterface;

interface MediaObjectInterface extends CreativeWorkInterface
{
	public function getBitRate():? string;

	public function setBitRate(?string $val): void;

	public function getContentSize():? string;

	public function setContentSize(?string $val): void;

	public function getContentUrl():? string;

	public function setContentUrl(?string $val): void;

	public function getEmbedUrl():? string;

	public function setEmbedUrl(?string $val): void;

	public function getEncodingFormat():? string;

	public function setEncodingFormat(?string $val): void;

	public function getHeight():? int;

	public function setHeight(?int $val): void;

	public function getUploadDate():? DateTimeInterface;

	public function getUploadDateAsString():? string;

	public function setUploadDate(?DateTimeInterface $val): void;

	public function getWidth():? int;

	public function setWidth(?int $val): void;
}
