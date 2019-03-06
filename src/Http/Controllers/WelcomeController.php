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

namespace Cmspackage\Laracms\Http\Controllers;

use Illuminate\Http\Request;
use Cmspackage\Laracms\Models\Category;
use Cmspackage\Laracms\Models\Article;

/**
 * 前台公共控制器
 *
 * Class WelcomeController
 * @package Cmspackage\Laracms\Http\Controllers
 */
class WelcomeController extends Controller
{
    /**
     * 前台首页
     *
     * @param int $navigation
     * @param Category $articleCategory
     * @param Article $article
     * @return mixed
     */
    public function index (Article $article)
    {
        return redirect('kuaixun');
        /*if( ! ($category = Category::where("cate_route", 'kuaixun')->first()) ){
            abort(404);
        }
        $articles = $category->articles()->active()->ordered()->recent()->paginate(10);
        return frontend_view('article.list', compact('category','articles'));*/
    }

    /**
     * 关于我们
     */
    public function company(){
        return frontend_view('company');
    }

    /**
     * 站点地图
     */
    public function map(){
        return frontend_view('map');
    }
}
