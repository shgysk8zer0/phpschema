<?php
namespace shgysk8zer0\PHPSchema\Interfaces;

use \DateTimeInterface;

interface CreativeWorkInterface extends ThingInterface
{
	// @SEE https://schema.org/CreativeWork
	public function getAudio():? AudioObjectInterface;

	public function setAudio(?AudioObjectInterface $val): void;

	public function getAbout():? ThingInterface;

	public function setAbout(?ThingInterface $val): void;

	public function getAuthor():? PersonOrOrganizationInterface;

	public function setAuthor(?PersonOrOrganizationInterface $val): void;

	public function getCopyrightHolder():? PersonOrOrganizationInterface;

	public function setCopyrightHolder(?PersonOrOrganizationInterface $val): void;

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

	public function getGenre():? string;

	public function setGenre(?string $val): void;

	public function getHeadline():? string;

	public function setHeadline(?string $val): void;

	public function getKeywords():? string;

	public function setKeywords(?string $val): void;

	public function getPublisher():? PersonOrOrganizationInterface;

	public function setPublisher(?PersonOrOrganizationInterface $val): void;

	public function getText():? string;

	public function setText(?string $val): void;

	public function getVideo():? VideoObjectInterface;

	public function setVideo(?VideoObjectInterface $val): void;
}
