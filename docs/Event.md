# Event

The event class.

## Example(s)(s)

```php
// Create a new event listener.
$eventListener = new EventListener()

// Create a new event.
$event = new Event();

// Attach an event listener.
$event->attach(eventListener);

// Notify the attached listeners.
$event->notify();
```
