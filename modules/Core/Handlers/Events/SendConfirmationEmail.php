<?php

namespace Pingpong\Cms\Core\Handlers\Events;

use Pingpong\Cms\Core\Events\UserWasRegistered;
use Illuminate\Support\Facades\Mail;

class SendConfirmationEmail
{

    public function handle(UserWasRegistered $event)
    {
        $user = $event->user;

        $code = str_random(30);

        $user->update(['confirmation_code' => $code]);

        Mail::send('core::emails.confirmation', compact('user', 'code'), function ($m) use ($user) {
            $m->subject('Verify your email address')
              ->from('pingpong.labs@gmail.com', 'Pingpong CMS')
              ->to($user->email, $user->name);
        });
    }
}
