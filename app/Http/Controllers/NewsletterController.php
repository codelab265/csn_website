<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('newsletter_error', 'Please enter a valid email address.');
        }

        $email = $request->input('email');

        // Check if email already exists
        $existingSubscription = Newsletter::where('email', $email)->first();

        if ($existingSubscription) {
            if ($existingSubscription->is_active) {
                return redirect()->back()
                    ->with('newsletter_info', 'You are already subscribed to our newsletter!');
            } else {
                // Reactivate subscription
                $existingSubscription->resubscribe();
                return redirect()->back()
                    ->with('newsletter_success', 'Welcome back! Your subscription has been reactivated.');
            }
        }

        // Create new subscription
        try {
            Newsletter::create([
                'email' => $email,
            ]);

            return redirect()->back()
                ->with('newsletter_success', 'Thank you for subscribing! You will receive our latest cybersecurity insights and updates.');
        } catch (\Exception) {
            return redirect()->back()
                ->with('newsletter_error', 'Something went wrong. Please try again later.');
        }
    }

    public function unsubscribe($token)
    {
        $subscription = Newsletter::where('subscription_token', $token)->first();

        if (!$subscription) {
            return redirect()->route('home')
                ->with('error', 'Invalid unsubscribe link.');
        }

        $subscription->unsubscribe();

        return redirect()->route('home')
            ->with('success', 'You have been successfully unsubscribed from our newsletter.');
    }
}
