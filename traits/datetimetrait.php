<?php
namespace shgysk8zer0\PHPSchema\Traits;
use \DateTimeInterface;

trait DateTimeTrait
{
	final protected function _stringifyDate(?DateTimeInterface $date, string $format = DateTimeInterface::W3C):? string
	{
		if (isset($date)) {
			return $date->format($format);
		} else {
			return null;
		}
	}

	final protected function _asDateString(?DateTimeInterface $date):? string
	{
		return $this->_stringifyDate($date, 'Y-m-d');
	}
}
