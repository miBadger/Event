# EventListenerInterface

The event listener interface.

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

/**
 * The subject updates al attached observers when he is notified.
 */
$eventListener->update(SubjectInterface $subject, $arguments = null);
```
