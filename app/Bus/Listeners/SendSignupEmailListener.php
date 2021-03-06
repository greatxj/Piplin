<?php

/*
 * This file is part of Piplin.
 *
 * Copyright (C) 2016-2017 piplin.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Piplin\Bus\Listeners;

use Piplin\Bus\Events\UserWasCreatedEvent;
use Piplin\Bus\Notifications\User\UserCreatedNotification;

/**
 * Sends an email when the user has been created.
 */
class SendSignupEmailListener
{
    /**
     * Handle the event.
     *
     * @param  UserWasCreatedEvent $event
     * @return void
     */
    public function handle(UserWasCreatedEvent $event)
    {
        $event->user->notify(new UserCreatedNotification($event->password));
    }
}
