<?php
namespace shgysk8zer0\PHPSchema\Abstracts;

use \shgysk8zer0\PHPSchema\Interfaces\{EventAttendanceModeInterface};

abstract class AbstractEventAttendanceMode extends AbstractEnnumeration implements EventAttendanceModeInterface
{
	const CONTEXT = 'https://pending.schema.org/MixedEventAttendanceMode';
	const TYPE = 'EventStatusAttendanceMode';
}
