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

namespace Cmspackage\Laracms\Policies;

use Cmspackage\Laracms\Models\User;
use Cmspackage\Laracms\Models\Wechat;

/**
 * 微信公众号授权策略
 *
 * Class WechatPolicy
 * @package Cmspackage\Laracms\Policies
 */
class WechatPolicy extends Policy
{
    public function update(User $user, Wechat $wechat)
    {
        return $user->can("manage_wechat");
    }

    public function destroy(User $user, Wechat $wechat)
    {
        return $user->can("manage_wechat");
    }

    public function show(User $user, Wechat $wechat){
        return $user->can("manage_wechat");
    }
}
