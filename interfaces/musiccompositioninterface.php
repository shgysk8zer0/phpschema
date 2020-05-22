<?php
namespace shgysk8zer0\PHPSchema\Interfaces;

interface MusicCompositionInterface extends CreativeWorkInterface
{
	// @see https://schema.org/MusicComposition

	public function getComposer():? PersonOrOrganizationInterface;

	public function setComposer(?PersonOrOrganizationInterface $val): void;

	public function getFirstPerformance():? EventInterface;

	public function setFirstPerformance(?EventInterface $val): void;

	public function addIncludedComposition(MusicCompositionInterface $val): void;

	public function getIncludedComposition(): iterable;

	public function setIncludedComposition(MusicCompositionInterface ...$vals): void;

	public function getLyricist():? PersonInterface;

	public function setLyricist(?PersonInterface $val): void;

	public function getLyrics():? CreativeWorkInterface;

	public function setLyrics(?CreativeWorkInterface $val): void;

	public function getMusicArrangement():? MusicCompositionInterface;

	public function setMusicArrangement(?MusicCompositionInterface $val): void;

	public function getMusicalKey():? string;

	public function setMusicalKey(?string $val): void;

	public function getRecordedAs():? MusicRecordingInterface;

	public function setRecordedAs(?MusicRecordingInterface $val): void;
}
