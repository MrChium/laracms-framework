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

use Cmspackage\Laracms\Models\File;
use Illuminate\Support\Facades\Auth;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

/**
 * 文件观察者
 *
 * Class FileObserver
 * @package Cmspackage\Laracms\Observers
 */
class FileObserver
{
    public function creating(File $file)
    {
        $file->status = '0';
        $file->created_op || $file->created_op = Auth::id();
    }

    public function updating(File $file)
    {
    }

    public function saving(File $file){

    }
}