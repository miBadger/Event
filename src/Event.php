<?php

/**
 * This file is part of the miBadger package.
 *
 * @author Michael Webbers <michael@webbers.io>
 * @license http://opensource.org/licenses/Apache-2.0 Apache v2 License
 * @version 1.0.0
 */

namespace miBadger\Event;

use miBadger\Observer\SubjectInterface;
use miBadger\Observer\SubjectTrait;

/**
 * The event class.
 *
 * @since 1.0.0
 */
class Event implements SubjectInterface
{
	use SubjectTrait;
}
