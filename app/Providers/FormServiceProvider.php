<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('bsText', 'components.form.text', ['name', 'value', 'attributes']);
        Form::component('bsTextArea', 'components.form.textarea', ['name', 'value', 'attributes']);
        Form::component('bsSubmit', 'components.form.submit', ['value' => 'submit', 'attributes']);
        Form::component('bsDelete', 'components.form.delete', ['name','value' => 'submit', 'attributes']);
        Form::component('hidden', 'components.form.hidden', ['value' => 'submit', 'attributes']);
    }
}
