<?php
namespace shgysk8zer0\PHPSchema\Interfaces;

interface ImageObjectInterface extends MediaObjectInterface
{
	public function getCaption():? string;

	public function setCaption(?string $val): void;
}
