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
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;
use Cmspackage\Laracms\Http\Controllers\Api\Controller;
use Cmspackage\Laracms\Http\Requests\Api\V1\CaptchaRequest;

/**
 * 验证码控制器
 *
 * Class CaptchasController
 * @package Cmspackage\Laracms\Http\Controllers\Api\V1
 */
class CaptchasController extends Controller
{
    /**
     * 创建
     *
     * @param CaptchaRequest $request
     * @return mixed
     */
    public function store(CaptchaRequest $request)
    {
        $key = 'captcha-'.str_random(15);
        $phone = $request->phone;

        $captchaBuilder = new CaptchaBuilder((new PhraseBuilder(5))->build());
        $captchaBuilder->setBackgroundColor(255,255,255);
        $captchaBuilder->setMaxFrontLines(2);
        $captcha = $captchaBuilder->build();
        $expiredAt = now()->addMinutes(3);
        \Cache::put($key, ['phone' => $phone, 'code' => $captcha->getPhrase()], $expiredAt);

        $result = [
            'captcha_key' => $key,
            'expired_at' => $expiredAt->toDateTimeString(),
            'captcha_image_content' => $captcha->inline()
        ];

        return $this->response->array($result)->setStatusCode(201);
    }
}
