<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Auth;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $cart = session()->get('cart');
        $countries = config('countries');

        if ($cart) {
            $cartItems = CartItem::where('cart_id', $cart->id)->get();
            return view('checkouts.index', compact('user', 'cart', 'cartItems', 'countries'));
        } else {
            return redirect()->route('carts');
        }
    }

    public function checkoutCart(Request $request)
    {
        $user = Auth::user();
        $cart = session()->get('cart');

        // Check if the cart exists for the user
        if ($cart) {
            // Update the cart details with the request data
            $cart->country_code = $request->input('country', $cart->country_code); // Use existing country if not provided
            $cart->phone = $request->input('phone', $cart->phone); // Use existing country if not provided
            $cart->city = $request->input('city', $cart->city); // Use existing city if not provided
            $cart->zip_code = $request->input('zip-code', $cart->zip_code); // Use existing zip code if not provided
            $cart->address = $request->input('address', $cart->address); // Use existing address if not provided

            // Save the updated cart
            $cart->save();

            // Build the WhatsApp message content
            $message = "Cart Code: {$cart->cart_code}%0A";
            $message .= "Address: {$cart->address}, {$cart->city}, {$cart->zip_code}, {$cart->country_code}%0A";
            $message .= "Items:%0A";

            // Add product names and prices
            foreach ($cart->cartItems as $item) {
                $product = $item->product();
                if ($product) {
                    $message .= "{$product->name} (x{$item->amount}) - " . number_format($product->price_after_discount(), 2) . " each%0A";
                }
            }

            // Add total price
            $totalPrice = number_format($cart->total_price(), 2);
            $message .= "%0ATotal Price: $totalPrice";
            $phoneNumber = "+6282237087715";
            // WhatsApp URL format
            $whatsappUrl = "https://wa.me/{$phoneNumber}?text=" . urlencode($message);

            // Update session data if necessary
            session()->put('cart', $cart);

            // Redirect to WhatsApp Web
            return redirect()->away($whatsappUrl);
        }

        return redirect()->back()->with('error', 'No cart found for the user.');
    }
}
