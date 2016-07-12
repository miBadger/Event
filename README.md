# Event

[![Build Status](https://scrutinizer-ci.com/g/miBadger/miBadger.Event/badges/build.png?b=master)](https://scrutinizer-ci.com/g/miBadger/miBadger.Event/build-status/master)
[![Code Coverage](https://scrutinizer-ci.com/g/miBadger/miBadger.Event/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/miBadger/miBadger.Event/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/miBadger/miBadger.Event/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/miBadger/miBadger.Event/?branch=master)

The Event Component.

## Example(s)

```php
<?php

use miBadger\Event\EventListenerInterface;

/**
 * The event listener class.
 */
class EventListener implements EventListenerInterface
{
	/**
	 * {@inheritdoc}
	 */
	public function update(SubjectInterface $subject, $arguments = null)
	{
		// Action that needs to be executed if the event fires.
	}
}
```

```php
<?php

use miBadger\Event\Event;

/**
 * Construct a new event.
 */
$event = new Event();

/**
 * Construct a new event listener.
 */
$eventListener = new EventListener()

/**
 * Returns true if the observer is attached successfully.
 */
$event->attach($eventListener);

/**
 * Notify all the attached observers.
 */
$event->notify();
```
