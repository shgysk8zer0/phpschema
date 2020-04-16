<?php
namespace shgysk8zer0\PHPSchema\Interfaces;

use \DateTimeInterface;

interface CreativeWorkInterface extends ThingInterface
{
	// @SEE https://schema.org/CreativeWork

	public function getAbout():? ThingInterface;

	public function setAbout(?ThingInterface $val): void;

	public function getAuthor():? PersonorOrganizationInterface;

	public function setAuthor(?PersonorOrganizationInterface $val): void;

	public function getCopyrightHolder():? PersonorOrganizationInterface;

	public function setCopyrightHolder(?PersonorOrganizationInterface $val): void;

	public function getCopyrightYear():? int;

	public function setCopyrightYear(?int $val): void;

	public function getDatePublished():? DateTimeInterface;

	public function getDatePublishedAsString():? string;

	public function setDatePublished(?DateTimeInterface $val): void;

	public function getDateCreated():? DateTimeInterface;

	public function getDateCreatedAsString():? string;

	public function setDateCreated(?DateTimeInterface $val): void;

	public function getDateModified():? DateTimeInterface;

	public function getDateModifiedAsString():? string;

	public function setDateModified(?DateTimeInterface $val): void;

	public function getHeadline():? string;

	public function setHeadline(?string $val): void;

	public function getPublisher():? PersonorOrganizationInterface;

	public function setPublisher(?PersonorOrganizationInterface $val): void;

	public function getText():? string;

	public function setText(?string $val): void;
}
