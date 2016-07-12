# Event

The event class.

## Example(s)

```php
<?php

use miBadger\Event\Event;

/**
 * Returns true if the observer is attached to the subject.
 */
$event->isAttached(ObserverInterface $observer);

/**
 * Returns true if the observer is attached successfully.
 */
$event->attach(ObserverInterface $observer);

/**
* Returns true if the observer is detached successfully.
 */
$event->detach(ObserverInterface $observer);

/**
 * Notify all the attached observers.
 */
$event->notify($arguments = null);
```
