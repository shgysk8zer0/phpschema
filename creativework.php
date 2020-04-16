<?php
namespace shgysk8zer0\PHPSchema;
use \shgysk8zer0\PHPSchema\Interfaces\{
	AudioObjectInterface,
	CreativeWorkInterface,
	PersonorOrganizationInterface,
	ThingInterface,
	VideoObjectInterface,
};

use \shgysk8zer0\PHPSchema\Traits\{DateTimeTrait};

use \DateTimeInterface;

class CreativeWork extends Thing implements CreativeWorkInterface
{
	use DateTimeTrait;

	public const TYPE = 'CreativeWork';

	private $_audio = null;

	private $_about = null;

	private $_author = null;

	private $_copytightHolder = null;

	private $_copyrightYear = null;

	private $_datePublished = null;

	private $_dateModified = null;

	private $_dateCreated = null;

	private $_genre = null;

	private $_keywords = null;

	private $_headline = null;

	private $_publisher = null;

	private $_text = null;

	private $_video = null;

	// @SEE https://schema.org/CreativeWork

	public function jsonSerialize(): array
	{
		return array_merge(
			parent::jsonSerialize(),
			[
				'audio'           => $this->getAudio(),
				'about'           => $this->getAbout(),
				'author'          => $this->getAuthor(),
				'copyrightHolder' => $this->getCopyrightHolder(),
				'copyrightyear'   => $this->getCopyrightYear(),
				'dateCreated'     => $this->getDateCreatedAsString(),
				'dateModified'    => $this->getDateModifiedAsString(),
				'datePublished'   => $this->getDatePublishedAsString(),
				'genre'           => $this->getGenre(),
				'keywords'        => $this->getKeywords(),
				'headline'        => $this->getHeadline(),
				'publisher'       => $this->getPublisher(),
				'text'            => $this->getText(),
				'video'           => $this->getVideo(),
			]
		);
	}

	public function getAudio():? AudioObjectInterface
	{
		return $this->_audio;
	}

	public function setAudio(?AudioObjectInterface $val): void
	{
		$this->_audio = $val;
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

	public function getCopyrightHolder():? PersonorOrganizationInterface
	{
		return $this->_copytightHolder;
	}

	public function setCopyrightHolder(?PersonorOrganizationInterface $val): void
	{
		$this->_copytightHolder = $val;
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

	public function getGenre():? string
	{
		return $this->_genre;
	}

	public function setGenre(?string $val): void
	{
		$this->_genre = $val;
	}

	public function getHeadline():? string
	{
		return $this->_headline;
	}

	public function setHeadline(?string $val): void
	{
		$this->_headline = $val;
	}

	public function getKeywords():? string
	{
		return $this->_keywords;
	}

	public function setKeywords(?string $val): void
	{
		$this->_keywords = $val;
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

	public function getVideo():? VideoObjectInterface
	{
		return $this->_video;
	}

	public function setVideo(?VideoObjectInterface $val): void
	{
		$this->_video = $val;
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
