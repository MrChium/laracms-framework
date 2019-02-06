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
use Cmspackage\Laracms\Transformers\PageTransformer;
use Cmspackage\Laracms\Models\Page;

/**
 * 页面控制器
 *
 * Class PageController
 * @package Cmspackage\Laracms\Http\Controllers\Api\V1
 */
class PageController extends Controller
{
    /**
     * 详情
     *
     * @param int $page_id
     * @return \Dingo\Api\Http\Response
     */
    public function show($page_id = 0)
    {
        $page = Page::where('id', intval($page_id))->where('status', '1')->first();
        if(!$page->id){ abort(404); }
        return $this->response->item($page, new PageTransformer());
    }

    /**
     * 关于我们
     *
     * @return mixed
     */
    public function about(){
        return $this->response->array(['content' => config("system.common.company.content") ]);
    }
}
