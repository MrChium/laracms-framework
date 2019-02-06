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

namespace Cmspackage\Laracms\Observers;

use Cmspackage\Laracms\Models\Link;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

/**
 * 友情链接观察者
 *
 * Class LinkObserver
 * @package Cmspackage\Laracms\Observers
 */
class LinkObserver
{
    public function creating(Link $link)
    {
        //
    }

    public function updating(Link $link)
    {
        //
    }
}