<?php
namespace shgysk8zer0\PHPSchema;

use \shgysk8zer0\PHPSchema\Interfaces\{
	MusicAlbumInterface,
	MusicAlbumProductionTypeInterface,
	MusicReleaseInterface,
	MusicAlbumReleaseTypeInterface,
	MusicGroupInterface,
};

class MusicAlbum extends MusicPlaylist implements MusicAlbumInterface
{
	public const TYPE = 'MusicAlbum';

	private $_albumProductionType = null;

	private $_albumRelease = null;

	private $_albumReleaseType = null;

	private $_byArtist = null;

	public function jsonSerialize(): array
	{
		return array_merge(
			parent::jsonSerialize(),
			[
				'albumProductionType' => $this->getAlbumProductionType(),
				'albumRelease'        => $this->getAlbumRelease(),
				'albumReleaseType'    => $this->getAlbumReleaseType(),
				'byArtist'            => $this->getByArtist(),
			]
		);
	}

	public function getAlbumProductionType():? MusicAlbumProductionTypeInterface
	{
		return $this->_albumProductionType;
	}

	public function setAlbumProductionType(?MusicAlbumProductionTypeInterface $val): void
	{
		$this->_albumProductionType = $val;
	}

	public function getAlbumRelease():? MusicReleaseInterface
	{
		return $this->_albumRelease;
	}

	public function setAlbumRelease(?MusicReleaseInterface $val): void
	{
		$this->_albumRelease = $val;
	}

	public function getAlbumReleaseType():? MusicAlbumReleaseTypeInterface
	{
		return $this->_albumReleaseType;
	}

	public function setAlbumReleaseType(?MusicAlbumReleaseTypeInterface $val): void
	{
		$this->_albumReleaseType = $val;
	}

	public function getByArtist():? MusicGroupInterface
	{
		return $this->_byArtist;
	}

	public function setByArtist(?MusicGroupInterface $val): void
	{
		$this->_byArtist = $val;
	}
}
