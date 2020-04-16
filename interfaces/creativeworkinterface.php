<?php
namespace shgysk8zer0\PHPSchema\Interfaces;

interface CreativeWorkInterface extends ThingInterface
{
	// @SEE https://schema.org/CreativeWork

	public function getAbout():? ThingInterface;

	public function setAbout(?ThingInterface $val): void;

	public function getAuthor():? ContactableInterface;

	public function setAuthor(?ContactableInterface $val): void;

	public function getCopyrightYear():? int;

	public function setCopyrightYear(?int $val): void;

	public function getHeadline():? string;

	public function setHeadline(?string $val): void;

	public function getText():? string;

	public function setText(?string $val): void;
}
