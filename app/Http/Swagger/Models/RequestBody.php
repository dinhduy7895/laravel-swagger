<?php

/**
 * @license Apache 2.0
 */

/**
 *
 * @OA\RequestBody(
 *     request="Article",
 *     description="Article object that needs to be added to the store",
 *     required=true,
 *     @OA\JsonContent(ref="#/components/schemas/Article"),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/Article")
 *     )
 * )
 */
