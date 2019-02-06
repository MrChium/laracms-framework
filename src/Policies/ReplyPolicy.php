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
use Cmspackage\Laracms\Models\Reply;

/**
 * 回复授权策略
 *
 * Class ReplyPolicy
 * @package Cmspackage\Laracms\Policies
 */
class ReplyPolicy extends Policy
{
    public function destroy(User $user, Reply $reply)
    {
        return $user->isAuthorOf($reply) || $user->isAuthorOf($reply->article);
    }
}