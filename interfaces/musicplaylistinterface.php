<?php
namespace shgysk8zer0\PHPSchema\Interfaces;

interface MusicPlaylistInterface extends CreativeWorkInterface
{
	public function getNumTracks(): int;

	public function addTrack(MusicRecordingInterface $val): void;

	public function getTrack(): iterable;

	public function setTrack(MusicRecordingInterface ...$vals): void;
}
