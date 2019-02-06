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

namespace Cmspackage\Laracms\Http\Controllers\Administrator;

use Cmspackage\Laracms\Http\Controllers\Controller as BaseController;

/**
 * Administrator 基础控制器
 *
 * Class Controller
 * @package Cmspackage\Laracms\Http\Controllers
 */
class Controller extends BaseController
{
    // 后台导航ID
    public static $activeNavId = 'dashboard';
}
