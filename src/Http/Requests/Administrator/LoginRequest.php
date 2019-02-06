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

namespace Cmspackage\Laracms\Http\Requests\Administrator;

class LoginRequest extends Request
{
    public function rules()
    {
        return [
            'email' => ['required','string','email','max:255'],
            'password' => ['required','string','min:6'],
            'captcha' => ['required','captcha'],
        ];
    }
    
}
