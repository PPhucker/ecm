<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->defineAutodiscoverPolicies();
        $this->createVerifiedDirective();
    }

    private function defineAutodiscoverPolicies()
    {
        Gate::guessPolicyNamesUsing(static function ($class) {
            return str_replace("App\\Models", "App\\Policies", $class) . 'Policy';
        });
    }

    private function createVerifiedDirective()
    {
        Blade::directive('verified', static function () {
            return "<?php if(auth()->check() && auth()->user()->hasVerifiedEmail()) : ?>";
        });

        Blade::directive('endverified', static function () {
            return '<?php endif; ?>';
        });
    }
}
