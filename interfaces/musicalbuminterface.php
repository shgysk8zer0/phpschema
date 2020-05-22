<?php
namespace shgysk8zer0\PHPSchema\Interfaces;

interface MusicAlbumInterface extends MusicPlaylistInterface
{
	public function getAlbumProductionType():? MusicAlbumProductionTypeInterface;

	public function setAlbumProductionType(?MusicAlbumProductionTypeInterface $val): void;
}
