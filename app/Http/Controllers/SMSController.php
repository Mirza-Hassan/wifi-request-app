<?php

namespace App\Http\Controllers;
namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Http\Request;

class SMSController extends Controller
{
    use Notifiable;
    //

    public function routeNotificationForNexmo($notification)
    {
        return $this->phone;
    }
}
