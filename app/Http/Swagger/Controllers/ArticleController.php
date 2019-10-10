<?php

/**
 * @license Apache 2.0
 */

namespace App\Http\Swagger\Controllers;

/**
 * Class Article
 *
 * @package Articlestore30\controllers
 *
 * @author  Donii Sergii <doniysa@gmail.com>
 */
class Article
{
    /**
     * @OA\Post(
     *     path="/api/articles",
     *     tags={"article"},
     *     summary="Add a new article to the store",
     *     operationId="addArticle",
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={{"bearerAuth":{}}},
     *     requestBody={"$ref": "#/components/requestBodies/Article"}
     * )
     */
    public function addArticle()
    {
    }

    /**
     * @OA\Put(
     *     path="/api/articles/{id}",
     *     tags={"article"},
     *     summary="Update an existing article",
     *     operationId="updateArticle",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="id of article that to be updated",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     security={{"bearerAuth":{}}},
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID article"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Article not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     requestBody={"$ref": "#/components/requestBodies/Article"}
     * )
     */
    public function updateArticle()
    {
    }


    /**
     * @OA\Get(
     *     path="/api/articles/{id}",
     *     tags={"article"},
     *     summary="Find article by ID",
     *     description="Returns a single article",
     *     operationId="getArticleById",
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of article to return",
     *         required=true,
     *         @OA\Schema(
     *             type="string",
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Article"),
     *         @OA\XmlContent(ref="#/components/schemas/Article"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Article not found"
     *     ),
     * )
     *
     * @param int $id
     */
    public function getArticleById($id)
    {
    }


    /**
     * @OA\Delete(
     *     path="/api/articles/{id}",
     *     tags={"article"},
     *     summary="Deletes a article",
     *     operationId="deleteArticle",
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Article id to delete",
     *         required=true,
     *         @OA\Schema(
     *             type="string",
     *         ),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplied",
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Article not found",
     *     ),
     * )
     */
    public function deleteArticle()
    {
    }


}
