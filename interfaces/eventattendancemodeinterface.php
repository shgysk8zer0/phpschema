<?php
namespace shgysk8zer0\PHPSchema\Interfaces;
use \JsonSerializable;

interface EventAttendanceModeInterface extends JsonSerializable
{
	// This should be used for setting ennumerable event status via string
	public function getValue():? string;

	public function getStatus():? string;
}
