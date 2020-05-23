<?php
namespace shgysk8zer0\PHPSchema\Abstracts;

use \shgysk8zer0\PHPSchema\Interfaces\{MusicAlbumReleaseTypeInterface};

abstract class AbstractMusicAlbumReleaseType extends AbstractEnumeration implements MusicAlbumReleaseTypeInterface
{
	const TYPE = 'MusicAlbumReleaseType';
}
