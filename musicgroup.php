<?php
namespace shgysk8zer0\PHPSchema;

use \shgysk8zer0\PHPSchema\Interfaces\{MusicGroupInterface};

class MusicGroup extends PerformingGroup implements MusicGroupInterface
{
	public const type = 'MusicGroup';

	private $_album = [];

	private $_genre = null;

	private $_track = [];

	public function jsonSerialize(): array
	{
		return array_merge(
			parent::jsonSerialize(),
			[
				'album' => $this->getAlbum(),
				'genre' => $this->getGenre(),
				'track' => $this->getTrack(),
			]
		);
	}

	public function addAlbum(MusicAlbumInterface $val): void
	{
		$this->_album[] = $val;
	}

	public function getAlbum(): iterable
	{
		return $this->_album;
	}

	public function setAlbum(MusicAlbumInterface ...$vals): void
	{
		$this->_album = $vals;
	}

	public function getGenre():? string
	{
		return $this->_genre;
	}

	public function setGenre(?string $val): void
	{
		$this->_genre = $val;
	}

	public function addTrack(MusicRecordingInterface $val): void
	{
		$this->_track[] = $val;
	}

	public function getTrack(): iterable
	{
		return $this->_track;
	}

	public function setTrack(MusicRecordingInterface ...$vals): void
	{
		$this->_track = $vals;
	}
}
