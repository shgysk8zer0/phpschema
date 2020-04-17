<?php
namespace shgysk8zer0\PHPSchema\Interfaces;

/**
 * Provide an interface for the very different `Place` & `VirtualLocation` types.
 * Other than branching from `Thing`, these different types have nothing in
 * common, but are both able to be used for `Event.location`.
 *
 * Classes that can be assigned to `Event.location` should implement this interface
 * in addition to anything else.
 */
interface EventLocationInterface extends ThingInterface
{
	// @see https://schema.org/location
}
