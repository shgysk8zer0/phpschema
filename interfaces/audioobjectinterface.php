<?php
namespace shgysk8zer0\PHPSchema\Interfaces;

interface AudioObjectInterface extends MediaObjectInterface
{
	public function getCaption():? MediaObjectInterface;

	public function setCaption(?MediaObjectInterface $val): void;

	public function getTranscript():? string;

	public function setTranscript(?string $val): void;
}
