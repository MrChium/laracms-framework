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
use Spatie\Permission\Models\Permission;

/**
 * 权限授权策略
 *
 * Class PermissionPolicy
 * @package Cmspackage\Laracms\Policies
 */
class PermissionPolicy extends Policy
{

    public function index(User $user, Permission $permission)
    {
        return $user->can("manage_permissions");
    }

    public function manage(User $user, Permission $permission)
    {
        return $user->can("manage_permissions");
    }

    public function create(User $user, Permission $permission)
    {
        return $user->can("manage_permissions");
    }

    public function update(User $user, Permission $permission)
    {
        return $user->can("manage_permissions");
    }

    public function destroy(User $user, Permission $permission)
    {
        return $user->can("manage_permissions");
    }
}
