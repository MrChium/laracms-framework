<?php

namespace Cmspackage\Laracms\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
		 \Cmspackage\Laracms\Models\WechatResponse::class                  => \Cmspackage\Laracms\Policies\WechatResponsePolicy::class,
		 \Cmspackage\Laracms\Models\WechatMenu::class                      => \Cmspackage\Laracms\Policies\WechatMenuPolicy::class,
		 \Cmspackage\Laracms\Models\Wechat::class                          => \Cmspackage\Laracms\Policies\WechatPolicy::class,
		 \Cmspackage\Laracms\Models\Article::class                         => \Cmspackage\Laracms\Policies\ArticlePolicy::class,
		 \Cmspackage\Laracms\Models\Block::class                           => \Cmspackage\Laracms\Policies\BlockPolicy::class,
		 \Cmspackage\Laracms\Models\Link::class                            => \Cmspackage\Laracms\Policies\LinkPolicy::class,
		 \Cmspackage\Laracms\Models\Project::class                         => \Cmspackage\Laracms\Policies\ProjectPolicy::class,
		 \Cmspackage\Laracms\Models\Slide::class                           => \Cmspackage\Laracms\Policies\SlidePolicy::class,
		 \Cmspackage\Laracms\Models\Category::class                        => \Cmspackage\Laracms\Policies\CategoryPolicy::class,
		 \Cmspackage\Laracms\Models\Navigation::class                      => \Cmspackage\Laracms\Policies\NavigationPolicy::class,
		 \Cmspackage\Laracms\Models\File::class                            => \Cmspackage\Laracms\Policies\FilePolicy::class,
		 \Cmspackage\Laracms\Models\Setting::class                         => \Cmspackage\Laracms\Policies\SettingPolicy::class,
         \Cmspackage\Laracms\Models\User::class                            => \Cmspackage\Laracms\Policies\UserPolicy::class,
         \Cmspackage\Laracms\Models\Page::class                            => \Cmspackage\Laracms\Policies\PagePolicy::class,
         \Cmspackage\Laracms\Models\Reply::class                           => \Cmspackage\Laracms\Policies\ReplyPolicy::class,
         \Cmspackage\Laracms\Models\Form::class                            => \Cmspackage\Laracms\Policies\FormPolicy::class,

         \Spatie\Permission\Models\Role::class                             => \Cmspackage\Laracms\Policies\RolePolicy::class,
         \Spatie\Permission\Models\Permission::class                       => \Cmspackage\Laracms\Policies\PermissionPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
