<?php
namespace shgysk8zer0\PHPSchema;
use \shgysk8zer0\PHPSchema\Interfaces\{
	PersonorOrganizationInterface,
	CreativeWorkInterface,
	ThingInterface,
};

use \shgysk8zer0\PHPSchema\Traits\{DateTimeTrait};

use \DateTimeInterface;

class CreativeWork extends Thing implements CreativeWorkInterface
{
	use DateTimeTrait;

	public const TYPE = 'CreativeWork';

	private $_about = null;

	private $_author = null;

	private $_copyrightYear = null;

	private $_datePublished = null;

	private $_dateModified = null;

	private $_dateCreated = null;

	private $_headline = null;

	private $_publisher = null;

	private $_text = null;

	// @SEE https://schema.org/CreativeWork

	public function jsonSerialize(): array
	{
		return array_merge(
			parent::jsonSerialize(),
			[
				'about'         => $this->getAbout(),
				'author'        => $this->getAuthor(),
				'copyrightyear' => $this->getCopyrightYear(),
				'dateCreated'   => $this->getDateCreatedAsString(),
				'dateModified'  => $this->getDateModifiedAsString(),
				'datePublished' => $this->getDatePublishedAsString(),
				'headline'      => $this->getHeadline(),
				'publisher'     => $this->getPublisher(),
				'text'          => $this->getText(),
			]
		);
	}

	public function getAbout():? ThingInterface
	{
		return $this->_about;
	}

	public function setAbout(?ThingInterface $val): void
	{
		$this->_about = $val;
	}

	public function getAuthor():? PersonorOrganizationInterface
	{
		return $this->_author;
	}

	public function setAuthor(?PersonorOrganizationInterface $val): void
	{
		$this->_author = $val;
	}

	public function getCopyrightYear():? int
	{
		return $this->_copyrightYear;
	}

	public function setCopyrightYear(?int $val): void
	{
		$this->_copyrightYear = $val;
	}

	public function getDateCreated():? DateTimeInterface
	{
		return $this->_dateCreated;
	}

	public function getDateCreatedAsString():? string
	{
		return $this->_stringifyDate($this->getDateCreated());
	}

	public function setDateCreated(?DateTimeInterface $val): void
	{
		$this->_dateCreated = $val;
	}

	public function getDateModified():? DateTimeInterface
	{
		return $this->_dateModified;
	}

	public function getDateModifiedAsString():? string
	{
		return $this->_stringifyDate($this->getDateModified());
	}

	public function setDateModified(?DateTimeInterface $val): void
	{
		$this->_dateModified = $val;
	}

	public function getDatePublished():? DateTimeInterface
	{
		return $this->_datePublished;
	}

	public function getDatePublishedAsString():? string
	{
		return $this->_stringifyDate($this->getDatePublished());
	}

	public function setDatePublished(?DateTimeInterface $val): void
	{
		$this->_datePublished = $val;
	}

	public function getHeadline():? string
	{
		return $this->_headline;
	}

	public function setHeadline(?string $val): void
	{
		$this->_headline = $val;
	}

	public function getPublisher():? PersonorOrganizationInterface
	{
		return $this->_publisher;
	}

	public function setPublisher(?PersonorOrganizationInterface $val): void
	{
		$this->_publisher = $val;
	}

	public function getText():? string
	{
		return $this->_text;
	}

	public function setText(?string $val): void
	{
		$this->_text = $val;
	}

	public function setFromObject(?object $data): void
	{
		parent::setFromObject($data);
		if (isset($data->author)) {
			if (is_string($data->author)) {
				$author = new Person();
				$author->setName($data->author);
				$this->setAuthor($author);
				unset($author);
			} elseif (is_object($data->author)) {
				$this->setAuthor(new Person($data->author));
			}
		}

		$this->setCopyrightYear($data->copyrightYear ?? null);
		$this->setHeadline($data->headline ?? null);
		$this->setText($data->text ?? null);
	}
}
