<?php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class ExceptionSubscriber implements EventSubscriberInterface
{
    public function AccessDeniedHttpException($event): void
    {
        // ...
    }

    public static function getSubscribedEvents(): array
    {
        return [
            'AccessDeniedHttpException' => 'onAccessDeniedHttpException',
        ];
    }
}
