<?php
namespace shgysk8zer0\PHPSchema\Interfaces;
use \JsonSerializable;

interface ThingInterface extends JsonSerializable
{
	public function getName():? string;

	public function setName(?string $val): void;

	public function getAlternateName():? string;

	public function setAlternateName(?string $val): void;

	public function getDescription():? string;

	public function setDescription(?string $val): void;

	public function getIdentifier():? string;

	public function setIdentifier(?string $val): void;

	public function getImage():? ImageObjectInterface;

	public function setImage(?ImageObjectInterface $val): void;

	public function getUrl():? string;

	public function setUrl(?string $val): void;

	public function setFromObject(object $data): void;

	public static function getSchemaUrl(): string;
}
