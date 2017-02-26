<?php

namespace Tenstone\LaravelShop\Gateways;

/**
 * This file is part of LaravelShop,
 * A shop solution for Laravel.
 *
 * @author Alejandro Mostajo
 * @copyright Amsgames, LLC
 * @license MIT
 * @package Tenstone\LaravelShop
 */

use Tenstone\LaravelShop\Exceptions\CheckoutException;
use Tenstone\LaravelShop\Exceptions\GatewayException;
use Tenstone\LaravelShop\Exceptions\ShopException;
use Tenstone\LaravelShop\Core\PaymentGateway;

class GatewayFail extends PaymentGateway
{
    /**
     * Called on cart checkout.
     *
     * @param Order $order Order.
     */
    public function onCheckout($cart)
    {
        throw new CheckoutException('Checkout failed.');
    }

    /**
     * Called by shop to charge order's amount.
     *
     * @param Order $order Order.
     *
     * @return bool
     */
    public function onCharge($order)
    {
        throw new GatewayException('Payment failed.');
    	return false;
    }
}