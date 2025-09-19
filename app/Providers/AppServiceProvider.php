<?php

namespace App\Providers;

use App\Models\Support;
use App\Models\User;
use App\Policies\UserPolicy;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Gate::policy(User::class, UserPolicy::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            if (!Auth::check()) {
                $messages = Support::where('session_id', session()->getId())
                    ->orderBy('created_at', 'asc')
                    ->get();
            } else {
                $messages = Support::where('user_id', Auth::user()->id)
                    ->orderBy('created_at', 'asc')
                    ->get();
            }
            $view->with('chats', $messages);
        });
    }
}
