<?php
namespace shgysk8zer0\PHPSchema;
use \shgysk8zer0\PHPSchema\Interfaces\{AutoObjectInterface, MediaObjectInterface};

class AudioObject extends MediaObject implements AutoObjectInterface
{
	public const TYPE = 'AudioObject';

	private $_caption = null;

	private $_transcript = null;

	public function jsonSerialize(): array
	{
		return array_merge(
			parent::jsonSerialize(),
			[
				'caption'    => $this->getCaption(),
				'transcript' =>$this->getTranscript(),
			]
		);
	}
	public function getCaption():? MediaObjectInterface
	{
		return $this->_caption;
	}

	public function setCaption(?MediaObjectInterface $val): void
	{
		$this->_caption = $val;
	}

	public function getTranscript():? string
	{
		return $this->_transcript;
	}

	public function setTranscript(?string $val): void
	{
		$this->_transcript = $val;
	}
}
