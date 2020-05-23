<?php
namespace shgysk8zer0\PHPSchema\Interfaces;

interface MusicReleaseInterface extends MusicPlaylistInterface
{
	public function getCatalogNumber():? string;

	public function setCatalogNumber(?string $val): void;

	public function getCreditedTo():? PersonOrOrganizationInterface;

	public function setCreditedTo(?PersonOrOrganizationInterface $val): void;

	public function getDuration():? DurationInterface;

	public function setDuration(?DurationInterface $val): void;

	public function getMusicReleaseFormat():? MusicReleaseFormatTypeInterface;

	public function setMusicReleaseFormat(?MusicReleaseFormatTypeInterface $val): void;

	public function getRecordLabel():? OrganizationInterface;

	public function setRecordLabel(?OrganizationInterface $val): void;

	public function getReleaseOf():? MusicAlbumInterfacce;

	public function setReleaseof(?MusicAlbumInterface $val): void;
}
