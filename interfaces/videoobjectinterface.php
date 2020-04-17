<?php
namespace shgysk8zer0\PHPSchema\Interfaces;

interface VideoObjectInterface extends MediaObjectInterface
{
	public function getActor(): iterable;

	public function setActor(PersonInterface... $vals): void;

	public function getCaption():? MediaObjectInterface;

	public function setCaption(?MediaObjectInterface $val): void;

	public function getThumbnail():? ImageObjectInterface;

	public function setThumbnail(?ImageObjectInterface $val): void;

	public function getTranscript():? string;

	public function setTranscript(?string $val): void;

	public function getVideoFrameSize():? string;

	public function setVideoFrameSize(?string $val): void;

	public function getVideoQuality():? string;

	public function setVideoQuality(?string $val): void;
}
