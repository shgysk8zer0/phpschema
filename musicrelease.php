<?php
namespace shgysk8zer0\PHPSchema;

use \shgysk8zer0\PHPSchema\Interfaces\{
	DurationInterface,
	MusicAlbumInterface,
	MusicReleaseInterface,
	MusicReleaseFormatTypeInterface,
	OrganizationInterface,
	PersonOrOrganizationInterface,
};

use \shgysk8zer0\PHPSchema\Traits\{DurationTrait};
use \DateTimeInterface;
use \DateInterval;

class MusicRelease extends MusicPlaylist implements MusicReleaseInterface
{
	use DurationTrait;

	public const TYPE = 'MusicRelease';

	private $_catalogNumber = null;

	private $_creditedTo = null;

	private $_duration = null;

	private $_musicReleaseFormat = null;

	private $_recordLabel = null;

	private $_releaseOf = null;

	public function jsonSerialize(): array
	{
		return array_merge(
			parent::jsonSerialize(),
			[
				'catalogNumber'      => $this->getCatalogNumber(),
				'creditedTo'         => $this->getCreditedTo(),
				'duration'           => $this->getDuration(),
				'musicReleaseFormat' => $this->getMusicReleaseFormat(),
				'recordLabel'        => $this->getRecordLabel(),
				'releaseOf'          => $this->getReleaseOf(),
			]
		);
	}

	public function getCatalogNumber():? string
	{
		return $this->_catalogNumber;
	}

	public function setCatalogNumber(?string $val): void
	{
		$this->_catalogNumber = $val;
	}

	public function getCreditedTo():? PersonOrOrganizationInterface
	{
		return $this->_creditedTo;
	}

	public function setCreditedTo(?PersonOrOrganizationInterface $val): void
	{
		$this->_creditedTo = $val;
	}

	final public function getDuration():? DurationInterface
	{
		return $this->_duration;
	}

	public function getDurationAsString():? string
	{
		if ($dur = $this->getDuration()) {
			return $dur->getDateIntervalAsString();
		} else {
			return null;
		}
	}

	final public function getDurationAsDateInterval():? DateInterval
	{
		if ($dur = $this->getDuration()) {
			return $dur->getDateInterval();
		} else {
			return null;
		}
	}

	final public function setDuration(?DurationInterface $val): void
	{
		$this->_duration = $val;
	}

	final public function setDurationFromDateInterval(?DateInterval $val): void
	{
		$this->setDuration($this->getDurationFromDateInterval($val));
	}

	final public function setDurationFromDateRange(
		?DateTimeInterface $from,
		?DateTimeInterface $to
	): void
	{
		$this->setDuration($this->getDurationFromDateRange($from, $to));
	}

	public function getMusicReleaseFormat():? MusicReleaseFormatTypeInterface{
		return $this->_musicReleaseFormat;
	}

	public function setMusicReleaseFormat(?MusicReleaseFormatTypeInterface $val): void
	{
		$this->muscReleaseFormat = $val;
	}

	public function getRecordLabel():? OrganizationInterface
	{
		return $this->_recordLabel;
	}

	public function setRecordLabel(?OrganizationInterface $val): void
	{
		$this->_recordLabel = $val;
	}

	public function getReleaseOf():? MusicAlbumInterface
	{
		return $this->_releaseOf;
	}

	public function setReleaseof(?MusicAlbumInterface $val): void
	{
		$this->releaseOf = $val;
	}
}
