<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\ApiManager\GetModels;

class ModelsComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('models', GetModels::get());
    }
}
