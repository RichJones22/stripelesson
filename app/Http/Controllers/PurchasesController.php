<?php

namespace App\Http\Controllers;


use Stripe\{Stripe, Charge, Customer};

class PurchasesController extends Controller
{
    public function store()
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        $stripeCustomer = Customer::create([
            'email' => request('stripeEmail'),
            'source' => request('stripeToken')
        ]);

        Charge::create([
           'customer' => $stripeCustomer->id,
            'amount' => 2500,
            'currency' => 'usd'
        ]);

        return 'All done';
    }
}
