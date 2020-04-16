<?php
namespace shgysk8zer0\PHPSchema;
use \shgysk8zer0\PHPSchema\Interfaces\{ImageObjectInterface};

class ImageObject extends MediaObject implements ImageObjectInterface
{
	public const TYPE = 'ImageObject';

	private $_caption = null;

	public function jsonSerialize(): array
	{
		return array_merge(
			parent::jsonSerialize(),
			[
				'caption' => $this->getCaption(),
			]
		);
	}

	final public function getCaption():? string
	{
		return $this->_caption;
	}

	final public function setCaption(?string $val): void
	{
		$this->_caption = $val;
	}

	public function setFromObject(?object $data): void
	{
		parent::setFromObject($data);
		$this->setCaption($data->caption ?? null);
	}
}
