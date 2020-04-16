<?php
namespace shgysk8zer0\PHPSchema;
use \shgysk8zer0\PHPSchema\Interfaces\{
	AutoObjectInterface,
	MediaObjectInterface,
	PersonInterface,
	ImageObjectInterface,
	VideoObjectInterface,
};

class VideoObject extends MediaObject implements VideoObjectInterface
{
	public const TYPE = 'VideoObject';

	private $_actor = [];

	private $_caption = null;

	private $_thumbnail = null;

	private $_transcript = null;

	private $_videoFrameSize = null;

	private $_videoQuality = null;

	public function jsonSerialize(): array
	{
		return array_merge(
			parent::jsonSerialize(),
			[
				'actor'          => $this->getActor(),
				'caption'        => $this->getCaption(),
				'thumbnail'      => $this->getThumbnail(),
				'transcript'     => $this->getTranscript(),
				'videoFrameSize' => $this->getVideoFrameSize(),
				'videoQuality'   => $this->getVideoQuality(),
			]
		);
	}

	public function getActor(): iterable
	{
		return $this->_actor;
	}

	public function setActor(PersonInterface... $vals): void
	{
		$this->_actor = $vals;
	}

	public function getCaption():? MediaObjectInterface
	{
		return $this->_caption;
	}

	public function setCaption(?MediaObjectInterface $val): void
	{
		$this->_caption = $val;
	}

	public function getThumbnail():? ImageObjectInterface
	{
		return $this->_thumbnail;
	}

	public function setThumbnail(?ImageObjectInterface $val): void
	{
		$this->_thumbnail = $val;
	}

	public function getTranscript():? string
	{
		return $this->_transcript;
	}

	public function setTranscript(?string $val): void
	{
		$this->_transcript = $val;
	}

	public function getVideoFrameSize():? string
	{
		return $this->_videoFrameSize;
	}

	public function setVideoFrameSize(?string $val): void
	{
		$this->_videoFrameSize = $val;
	}

	public function getVideoQuality():? string
	{
		return $this->_videoQuality;
	}

	public function setVideoQuality(?string $val): void
	{
		$this->_videoQuality = $val;
	}
}
