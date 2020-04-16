<?php
namespace shgysk8zer0\PHPSchema\Abstracts;

abstract class AbstractEventStatusType
{
	public const EventCancelled   = 'https://scheme.org/EventCancelled';

	public const EventMovedOnline = 'https://schema.org/EventMovedOnline';

	public const EventPostponed   = 'https://schema.org/EventPostponed';

	public const EventRescheduled = 'https://schema.org/EventRescheduled';

	public const EventScheduled   = 'https://schema.org/EventScheduled';
}
