<?php
/**
 *------------------------------------------------------
 * ArticleService.php
 *------------------------------------------------------
 *
 * @author    qqiu@qq.com
 * @version   V1.0
 *
 */

namespace Cmspackage\Laracms\Services;

use Cmspackage\Laracms\Models\Article;
use Cmspackage\Laracms\Models\ArticleData;

class ArticleService
{
    /**
     * 创建文章
     *
     * @param $data
     * @return mixed
     */
    public function create($data)
    {
        return \DB::transaction(function () use ($data) {
            $resData = Article::create($data);
            if ( ! empty($resData['id']) ) {
                ArticleData::create([
                    'aid' => $resData['id'],
                    'content' => $data['content'],
                ]);
            }
            return $resData;
        });
    }

    /**
     * 更新文章
     *
     * @param Article $article
     * @param $data
     * @return mixed
     */
    public function update(Article $article, $data)
    {
        return \DB::transaction(function () use ($article, $data) {
            $article->update($data);
            if ( ! empty($article['id']) ) {
                ArticleData::where("aid", $article['id'])->update(['content' => $data['content']]);
            }
            return $article;
        });
    }

}
