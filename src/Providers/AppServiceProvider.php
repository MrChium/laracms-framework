<?php
/**
 * LaraCMS - CMS based on laravel
 *
 * @category  LaraCMS
 * @package   Laravel
 * @author    Cmspackage <qqiu@qq.com>
 * @date      2018/06/06 09:08:00
 * @copyright Copyright 2018 LaraCMS
 * @license   https://opensource.org/licenses/MIT
 * @github    https://github.com/myqqiu/laracms
 * @link      https://www.laracms.cn
 * @version   Release 1.0
 */

namespace Cmspackage\Laracms\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Cmspackage\Laracms\Models\Setting;
use Cmspackage\Laracms\Handlers\AdministratorMenuHandler;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
	{
	    // 注册模型观察者
		\Cmspackage\Laracms\Models\User::observe(                  \Cmspackage\Laracms\Observers\UserObserver::class);
		\Cmspackage\Laracms\Models\WechatMenu::observe(            \Cmspackage\Laracms\Observers\WechatMenuObserver::class);
		\Cmspackage\Laracms\Models\Wechat::observe(                \Cmspackage\Laracms\Observers\WechatObserver::class);
		\Cmspackage\Laracms\Models\Block::observe(                 \Cmspackage\Laracms\Observers\BlockObserver::class);
		\Cmspackage\Laracms\Models\Link::observe(                  \Cmspackage\Laracms\Observers\LinkObserver::class);
		\Cmspackage\Laracms\Models\Project::observe(               \Cmspackage\Laracms\Observers\ProjectObserver::class);
		\Cmspackage\Laracms\Models\Category::observe(              \Cmspackage\Laracms\Observers\CategoryObserver::class);
		\Cmspackage\Laracms\Models\Navigation::observe(            \Cmspackage\Laracms\Observers\NavigationObserver::class);
		\Cmspackage\Laracms\Models\Page::observe(                  \Cmspackage\Laracms\Observers\PageObserver::class);
		\Cmspackage\Laracms\Models\Article::observe(               \Cmspackage\Laracms\Observers\ArticleObserver::class);
		\Cmspackage\Laracms\Models\Slide::observe(                 \Cmspackage\Laracms\Observers\SlideObserver::class);
		\Cmspackage\Laracms\Models\File::observe(                  \Cmspackage\Laracms\Observers\FileObserver::class);
		\Cmspackage\Laracms\Models\WechatResponse::observe(        \Cmspackage\Laracms\Observers\WechatResponseObserver::class);
		\Cmspackage\Laracms\Models\Reply::observe(                 \Cmspackage\Laracms\Observers\ReplyObserver::class);
		\Cmspackage\Laracms\Models\Log::observe(                   \Cmspackage\Laracms\Observers\LogObserver::class);
		\Cmspackage\Laracms\Models\MultipleFile::observe(          \Cmspackage\Laracms\Observers\MultipleFileObserver::class);
		\Cmspackage\Laracms\Models\Form::observe(                  \Cmspackage\Laracms\Observers\FormObserver::class);

        // 设置时区
        \Carbon\Carbon::setLocale('zh');


        // 检测是否在命令行模式
        if ($this->app->runningInConsole()) {
           // 命令行模式
        }
        else{
            // 非命令行模式
            Setting::afflux();
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
