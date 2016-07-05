# Event

The event class.

## Example(s)(s)

```php
<?php

use miBadger\Event\Event;
use miBadger\Event\EventListener;

/**
 * Construct a subject.
 */
$event = new Event();

/**
 * Returns true if the observer is attached succesfully.
 */
$event->attach(new EventListener());

/**
 * Notify all the attached observers.
 */
$event->notify();
```
