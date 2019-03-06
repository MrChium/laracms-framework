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

namespace Cmspackage\Laracms\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cmspackage\Laracms\Models\Traits\WithCommonHelper;
use Cmspackage\Laracms\Events\BehaviorLogEvent;
use Illuminate\Database\Eloquent\Builder;

/**
 * 文章模型
 *
 * Class Article
 * @package Cmspackage\Laracms\Models
 */
class ArticleData extends Model
{
    use SoftDeletes;

    /**
     * 数据表名
     */
    protected $table = "articles_data";

    /**
     * 主键
     */
    protected $primaryKey = "aid";

    /**
     * 可以被集体附值的表的字段
     */
    protected $fillable = [
        'aid',
        'content',
        'created_at',
        'updated_at'
    ];

    /**
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

}
