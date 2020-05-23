<?php
namespace shgysk8zer0\PHPSchema;

use \shgysk8zer0\PHPSchema\Interfaces\{
	CreativeWorkInterface,
	EventInterface,
	MusicCompilationInterface,
	MusicRecordingInterface,
	PersonOrOrganizationInterface,
};

class MusicCompliation extends CreativeWork implements MusicCompilationInterface
{
	public const TYPE = 'MusicCompilation';

	private $_composer = null;

	private $_firstPerformance = null;

	private $_includedComposition = [];

	private $_lyricist = null;

	private $_lyrics = null;

	private $_musicArrangement = null;

	private $_musicalKey = null;

	private $_recordedAs = null;

	public function jsonSerialize(): array
	{
		return array_merge(
			parent::jsonSerialize(),
			[
				'composer'            => $this->getComposer(),
				'firstPerformance'    => $this->getFirstPerformance(),
				'includedComposition' => $this->getIncludedComposition(),
				'lyricist'            => $this->getLyricist(),
				'lyrics'              => $this->getLyrics(),
				'musicArrangement'    => $this->getMusicArrangement(),
				'musicalKey'          => $this->getMusicalKey(),
				'recordedAs'          => $this->getRecordedAs(),
			]
		);
	}

	public function getComposer():? PersonOrOrganizationInterface
	{
		return $this->_composer;
	}

	public function setComposer(?PersonOrOrganizationInterface $val): void
	{
		$this->_composer = $val;
	}

	public function getFirstPerformance():? EventInterface
	{
		return $this->_firstPerformance;
	}

	public function setFirstPerformance(?EventInterface $val): void
	{
		$this->_firstPerformacen = $val;
	}

	public function addIncludedComposition(MusicCompositionInterface $val): void
	{
		$this->_includedComposition[] = $val;
	}

	public function getIncludedComposition(): iterable
	{
		return $this->_includedComposition;
	}

	public function setIncludedComposition(MusicCompositionInterface ...$vals): void
	{
		$this->_includedComposition = $vals;
	}

	public function getLyricist():? PersonInterface
	{
		return $this->_lyricist;
	}

	public function setLyricist(?PersonInterface $val): void
	{
		$this->_lyricist = $val;
	}

	public function getLyrics():? CreativeWorkInterface
	{
		return $this->_lyrics;
	}

	public function setLyrics(?CreativeWorkInterface $val): void
	{
		$this->_lyrics = $val;
	}

	public function getMusicArrangement():? MusicCompositionInterface
	{
		return $this->_musicArrangement;
	}

	public function setMusicArrangement(?MusicCompositionInterface $val): void
	[
		$this->_musicArrangement = $val;
	]

	public function getMusicalKey():? string
	{
		return $this->_musicalKey;
	}

	public function setMusicalKey(?string $val): void
	{
		$this->_musicalKey = $val;
	}

	public function getRecordedAs():? MusicRecordingInterface
	{
		return $this->_recordedAs;
	}

	public function setRecordedAs(?MusicRecordingInterface $val): void
	{
		$this->_recordedAs = $val;
	}
}
