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

/**
 * 导航控制器
 *
 * Class NavigationController
 * @package Cmspackage\Laracms\Http\Controllers\Api\V1
 */
class NavigationController extends Controller
{
    /**
     * 列表
     *
     * @param string $navigation_type
     * @return mixed
     */
    public function index($navigation_type = 'desktop')
    {
        return $this->response->array(frontend_navigation($navigation_type));
    }
}
