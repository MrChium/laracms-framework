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

namespace Cmspackage\Laracms\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use Cmspackage\Laracms\Http\Controllers\Api\Controller;
use Cmspackage\Laracms\Transformers\ArticleTransformer;
use Cmspackage\Laracms\Models\Article;
use Cmspackage\Laracms\Models\Category;

/**
 * 文章控制器
 *
 * Class ArticleController
 * @package Cmspackage\Laracms\Http\Controllers\Api\V1
 */
class ArticleController extends Controller
{
    /**
     * 列表
     *
     * @param int $category_id
     * @param Request $request
     * @return \Dingo\Api\Http\Response
     */
    public function index($category_id = 0, Request $request)
    {
        if( ! ($category = Category::find($category_id)) ){ abort(404); }

        $articles = $category->articles();
        $articles = $articles->ordered()->recent()->paginate(10);

        return $this->response->paginator($articles, new ArticleTransformer());
    }
}
