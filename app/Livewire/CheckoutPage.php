<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Mail\OrderPlaced;
use App\Models\Address;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Checkout | TechHaven')]

class CheckoutPage extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $county;
    public $town;
    public $estate;
    public $house_no;
    public $payment_method;

    public function mount(){
        $cart_items = CartManagement::getCartItemsFromCookie();
        if(count($cart_items) == 0){
            return redirect()->route('products');
        }
    }

    public function placeOrder(){
        $this->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:255',
            'county' => 'required|max:255',
            'town' => 'required|max:255',
            'estate' => 'required|max:255',
            'house_no' => 'required|max:255',
            'payment_method' => 'required',
        ]);

        $cart_items = CartManagement::getCartItemsFromCookie();
        $line_items = [];

        foreach($cart_items as $item){
            $line_items[] = [
                'price_data' => [
                    'currency' => 'Ksh',
                    'unit_amount' => $item['unit_amount'] * 100,
                    'product_data' => [
                        'name' => $item['name'],
                    ]
                    ],
                'quantity' => $item['quantity'],
            ];
        }

        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->grand_total =  CartManagement::calculateGrandTotal($cart_items);
        $order->payment_method = $this->payment_method;
        $order->payment_status = 'pending';
        $order->status = 'new';
        $order->currency = 'KSH';
        $order->shipping_amount = 0;
        $order->shipping_method = 'none';
        $order->notes = 'Order placed by ' . Auth::user()->name;

        $address = new Address();
        $address->first_name = $this->first_name;
        $address->last_name = $this->last_name;
        $address->email = $this->email;
        $address->phone = $this->phone;
        $address->county = $this->county;
        $address->town = $this->town;
        $address->estate = $this->estate;
        $address->house_no = $this->house_no;

        $redirect_url = '';

        if($this->payment_method === 'stripe'){

        } else {
            // Cash on delivery
            $redirect_url = route('success');
        }

        $order->save();
        $address->order_id = $order->id;
        $address->user_id = Auth::user()->id;
        $address->save();
        $order->items()->createMany($cart_items);
        CartManagement::clearCartItems();

        Mail::to(request()->user())->send(new OrderPlaced($order));

        return redirect($redirect_url);
    }

    public function render()
    {
        $cart_items = CartManagement::getCartItemsFromCookie();
        $grand_total = CartManagement::calculateGrandTotal($cart_items);
        return view('livewire.checkout-page',[
            'cart_items' => $cart_items,
            'grand_total' => $grand_total,
        ]);
    }
}
