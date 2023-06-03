<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
       "custom-login",
       "place_order",
       "edit_product",
       "add_product",
       "edit_category",
       "add_category",
       "delete_category",
       "delete_product",
    ];
}
