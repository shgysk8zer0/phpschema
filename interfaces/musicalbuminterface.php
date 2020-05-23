<?php
namespace shgysk8zer0\PHPSchema\Interfaces;

interface MusicAlbumInterface extends MusicPlaylistInterface
{
	public function getAlbumProductionType():? MusicAlbumProductionTypeInterface;

	public function setAlbumProductionType(?MusicAlbumProductionTypeInterface $val): void;

	public function getAlbumRelease():? MusicReleaseInterface;

	public function setAlbumRelease(?MusicReleaseInterface $val): void;

	public function getAlbumReleaseType(): MusicAlbumReleaseTypeInterface;

	public function setAlbumReleaseType(?MusicAlbumReleaseTypeInterface $val): void;

	public function getByArtist():? MusicGroupInterface;

	public function setByArtist(?MusicGroupInterface $val): void;
}
