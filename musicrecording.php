<?php
namespace shgysk8zer0\PHPSchema;

use \shgysk8zer0\PHPSchema\Interfaces\{
	MusicAlbumInterface,
	MusicCompositionInterface,
	MusicGroupInterface,
	MusicPlaylistInterface,
	MusicRecordingInterface,
};

use \shgysk8zer0\PHPSchema\Traits\{DurationTrait};
use \DateInterval;
use \DateTimeInterface;

class MusicRecording extends CreativeWork implements MusicRecordingInterface
{
	use DurationTrait;

	public const TYPE = 'MusicRecording';

	private $_byArtist = null;

	private $_duration = null;

	private $_inAlbum = null;

	private $_inPlaylist = [];

	private $_isrcCode = null;

	private $_recordingOf = null;

	public function jsonSerialize(): array
	{
		return array_merge(
			parent::jsonSerialize(),
			[
				'byArtist'    => $this->getByArtist(),
				'duration'    => $this->getDurationAsString(),
				'inAlbum'     => $this->getInAlbum(),
				'inPlaylist'  => $this->getInPlaylist(),
				'recordingOf' => $this->getRecordingOf(),
			]
		);
	}

	public function getByArtist():? MusicGroupInterface
	{
		return $this->_byArtist;
	}

	public function setByArtist(?MusicGroupInterface $val): void
	{
		$this->_byArtist = $val;
	}

	public function getDuration():? DurationInterface
	{
		return $this->_duration;
	}

	public function getDurationAsDateInterval():? DateInterval
	{
		if ($dur = $this->getDuration()) {
			return $dur->getDateInterval();
		} else {
			return null;
		}
	}

	public function getDurationAsString():? string
	{
		if ($dur = $this->getDuration()) {
			return $dur->getDateIntervalAsString();
		} else {
			return null;
		}
	}

	public function setDuration(?DurationInterface $val): void
	{
		$this->_duration = $val;
	}

	public function setDurationFromDateInterval(?DateInterval $val): void
	{
		$this->setDuration($this->getDurationFromDateInterval($val));
	}

	public function setDurationFromDateRange(?DateTimeInterface $from, ?DateTimeInterface $to): void
	{
		$this->setDuration($this->getDurationFromDaterange($from, $to));
	}

	public function getInAlbum():? MusicAlbumInterface
	{
		return $this->_inAlbum;
	}

	public function setInAlbum(?MusicAlbumInterface $val): void
	{
		$this->_inAlbum = $val;
	}

	public function addInPlaylist(MusicPlaylistInterface $val): void
	{
		$this->_inPlaylist[] = $val;
	}

	public function getInPlaylist(): iterable
	{
		return $this->_inPlaylist;
	}

	public function setInPlaylist(MusicPlaylistInterface... $vals): void
	{
		$this->_inPlaylist = $vals;
	}

	public function getIsrcCode():? string
	{
		return $this->_isrcCode;
	}

	public function setIsrcCode(?string $val): void
	{
		$this->_isrcCode = $val;
	}

	public function getRecordingOf():? MusicCompositionInterface
	{
		return $this->_recordingOf;
	}

	public function setRecordingOf(?MusicCompositionInterface $val): void
	{
		$this->_recordingOf = $val;
	}
}
