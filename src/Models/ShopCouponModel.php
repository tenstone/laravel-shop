<?php

namespace Tenstone\LaravelShop\Models;

/**
 * This file is part of LaravelShop,
 * A shop solution for Laravel.
 *
 * @author Alejandro Mostajo
 * @copyright Amsgames, LLC
 * @license MIT
 * @package Tenstone\LaravelShop
 */

use Tenstone\LaravelShop\Contracts\ShopCouponInterface;
use Tenstone\LaravelShop\Traits\ShopCouponTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class ShopCouponModel extends Model implements ShopCouponInterface
{

    use ShopCouponTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table;

    /**
     * Fillable attributes for mass assignment.
     *
     * @var array
     */
    protected $fillable = ['code', 'sku', 'value', 'discount', 'name', 'description', 'expires_at'];

    /**
     * Creates a new instance of the model.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = Config::get('shop.coupon_table');
    }

}