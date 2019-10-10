<?php

/**
 * @license Apache 2.0
 */

namespace App\Http\Swagger\Models;

/**
 * Class Article
 *
 **
 * @OA\Schema(
 *     description="Article model",
 *     title="Article model",
 *     required={"title", "body"},
 * )
 */
class Article
{

    /**
     * @OA\Property(
     *     description="Article name",
     *     title="Article name",
     * )
     *
     * @var string
     */
    private $title;

    /**
     * @OA\Property(
     *     description="Article body",
     *     title="Article body",
     * )
     *
     * @var string
     */
    private $body;
    /**
     * @OA\Property(
     *     description="Photo urls",
     *     title="Photo urls",
     * )
     *
     * @var string
     */
    private $photoUrls;

}
