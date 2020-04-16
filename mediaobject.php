<?php
namespace shgysk8zer0\PHPSchema;
use \shgysk8zer0\PHPSchema\Interfaces\{MediaObjectInterface};
use \DateTimeInterface;

class MediaObject extends CreativeWork implements MediaObjectInterface
{
	public const TYPE = 'MediaObject';

	private $_height = null;

	private $_uploadDate = null;

	private $_width = null;

	public function jsonSerialize(): array
	{
		return array_merge(
			parent::jsonSerialize(),
			[
				'height'      => $this->getHeight(),
				'width'       => $this->getWidth(),
				'uploadDate'  => $this->getUploadDate(),
			]
		);
	}

	final public function getHeight():? int
	{
		return $this->_height;
	}

	final public function setHeight(?int $val): void
	{
		$this->_height = $val;
	}

	final public function getUploadDate():? DateTimeInterface
	{
		return $this->_uploadDate;
	}

	public function getUploadDateAsString():? string
	{
		if (isset($this->_uploadDate)) {
			return $this->_uploadDate->format(\DateTime::W3C);
		} else {
			return null;
		}
	}

	final public function setUploadDate(?DateTimeInterface $val): void
	{
		$this->_uploadDate = $val;
	}

	final public function getWidth():? int
	{
		return $this->_width;
	}

	final public function setWidth(?int $val): void
	{
		$this->_width = $val;
	}

	public function setFromObject(?object $data): void
	{
		parent::setFromObject($data);
		$this->setHeight($data->height ?? null);
		$this->setWidth($data->width ?? null);

		if (isset($data->uploadDate)) {
			$this->setUploadDate(is_string($data->uploadDate)
				? new DateTimeImmutable($data->uploadDate)
				: $data->uploadDate
			);
		}
	}
}
