<?php
namespace shgysk8zer0\PHPSchema;

use \shgysk8zer0\PHPSchema\Interfaces\{MusicPlaylistInterface, MusicRecodingInterface};

class MusicPlaylist extends CreativeWork implements MusicPlaylistInterface
{
	public const TYPE = 'MusicPlaylist';

	private $_track = [];

	public function jsonSerialize(): array
	{
		return array_merge(
			parent::jsonSerialize(),
			[
				'numTracks' => $this->getNumTracks(),
				'track'     => $this->getTracK(),
			]
		);
	}

	public function getNumTracks(): int
	{
		return count($this->getTrack());
	}

	public function addTrack(MusicRecodingInterface $val): void
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
