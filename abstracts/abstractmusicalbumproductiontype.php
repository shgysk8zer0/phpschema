<?php
namespace shgysk8zer0\PHPSchema\Abstracts;

use \shgysk8zer0\PHPSchema\Interfaces\{MusicAlbumProductionTypeInterface};

abstract class AbstractMusicAlbumProductionType extends AbstractEnumeration implements MusicAlbumProductionTypeInterface
{
	const TYPE = 'MusicAlbumProductionType';
}
