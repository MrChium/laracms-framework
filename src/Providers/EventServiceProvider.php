<?php

namespace Cmspackage\Laracms\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        \SocialiteProviders\Manager\SocialiteWasCalled::class => [
            // add your listeners (aka providers) here
            'SocialiteProviders\Weixin\WeixinExtendSocialite@handle',
            'SocialiteProviders\WeixinWeb\WeixinWebExtendSocialite@handle',
            'SocialiteProviders\QQ\QqExtendSocialite@handle',
            'SocialiteProviders\Weibo\WeiboExtendSocialite@handle',
        ],

        'Cmspackage\LaracmsEvents\BehaviorLogEvent' => [
            'Cmspackage\Laracms\Listeners\BehaviorLogListener',
        ],

        'Cmspackage\Laracms\Events\Event' => [
            'Cmspackage\Laracms\Listeners\EventListener',
        ],



//        'Illuminate\Auth\Events\Login' => [
//            'Cmspackage\Laracms\Listeners\UserEventSubscriber@onUserLogin'
//        ],
    ];

    /**
     * 需要注册的订阅者类。
     *
     * @var array
     */
    protected $subscribe = [
        'Cmspackage\Laracms\Listeners\UserEventSubscriber',
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
