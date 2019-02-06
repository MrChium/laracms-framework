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
use Cmspackage\Laracms\Models\Form;

/**
 * 表单授权策略
 *
 * Class PagePolicy
 * @package Cmspackage\Laracms\Policies
 */
class FormPolicy extends Policy
{

    public function index(User $user, Form $form)
    {
        return $user->can("manage_form");
    }

    public function show(User $user, Form $form)
    {
        return $user->can("manage_form");
    }

    public function destroy(User $user, Form $form)
    {
        return $user->can("manage_form");
    }
}
