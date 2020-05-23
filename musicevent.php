<?php
namespace shgysk8zer0\PHPSchema;

use \shgysk8zer0\PHPSchema\Interfaces\{MusicEventInterface};

class MusicEvent extends Event implements MusicEventInterface
{
	public const TYPE = 'MusicEvent';
}
