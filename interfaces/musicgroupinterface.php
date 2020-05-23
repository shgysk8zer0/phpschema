<?php
namespace shgysk8zer0\PHPSchema\Interfaces;

interface MusicGroupInterface extends PerformingGroupInterface
{
	public function addAlbum(MusicAlbumInterface $val): void;

	public function getAlbum(): iterable;

	public function setAlbum(MusicAlbumInterface ...$vals): void;

	public function getGenre():? string;

	public function setGenre(?string $val): void;

	public function addTrack(MusicRecordingInterface $val): void;

	public function getTrack(): iterable;

	public function setTrack(MusicRecordingInterface ...$vals): void;
}
