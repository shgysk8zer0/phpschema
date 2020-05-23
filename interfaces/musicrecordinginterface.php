<?php
namespace shgysk8zer0\PHPSchema\Interfaces;

interface MusicRecordingInterface extends CreativeWorkInterface
{
	// @see https://schema.org/MusicRecording

	public function getByArtist():? MusicGroupInterface;

	public function setByArtist(?MusicGroupInterface $val): void;

	public function getDuration():? DurationInterface;

	public function setDuration(?DurationInterface $val): void;

	public function getInAlbum():? MusicAlbumInterface;

	public function setInAlbum(?MusicAlbumInterface $val): void;

	public function addInPlaylist(MusicPlaylistInterface $val): void;

	public function getInPlaylist(): iterable;

	public function setInPlaylist(MusicPlaylistInterface ...$vals): void;

	public function getIsrcCode():? string;

	public function setIsrcCode(?string $val): void;

	public function getRecordingOf():? MusicCompositionInterface;

	public function setRecordingOf(?MusicCompositionInterface $val): void;
}
