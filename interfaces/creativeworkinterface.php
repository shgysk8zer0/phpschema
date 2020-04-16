<?php
namespace shgysk8zer0\PHPSchema\Interfaces;

interface CreativeWorkInterface extends ThingInterface
{
	// @SEE https://schema.org/CreativeWork

	public function getAuthor():? PersonInterface;

	public function setAuthor(?PersonInterface $val): void;

	public function getCopyrightYear():? int;

	public function setCopyrightYear(?int $val): void;

	public function getHeadline():? string;

	public function setHeadline(?string $val): void;

	public function getText():? string;

	public function setText(?string $val): void;
}
