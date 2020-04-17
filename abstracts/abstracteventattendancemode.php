<?php
namespace shgysk8zer0\PHPSchema\Abstracts;

use \shgysk8zer0\PHPSchema\Interfaces\{EventAttendanceModeInterface};

abstract class AbstractEventAttendanceMode extends AbstractEnnumeration implements EventAttendanceModeInterface
{
	const TYPE = 'EventStatusAttendanceMode';
}
