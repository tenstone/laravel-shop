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

use Tenstone\LaravelShop\Contracts\ShopOrderInterface;
use Tenstone\LaravelShop\Traits\ShopOrderTrait;
use Tenstone\LaravelShop\Traits\ShopCalculationsTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class ShopOrderModel extends Model implements ShopOrderInterface
{

    use ShopOrderTrait, ShopCalculationsTrait;

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
    protected $fillable = ['user_id', 'statusCode'];

    /**
     * Creates a new instance of the model.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = Config::get('shop.order_table');
    }

}