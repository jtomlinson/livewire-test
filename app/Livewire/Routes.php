<?php

namespace App\Livewire;

use App\Models\Route;
use Livewire\Component;

class Routes extends Component
{
    public int $selectedRouteId = 0;

    public function render()
    {
        sleep(1);

        $routes = Route::paginate(10);

        return view('livewire.routes')
            ->with('routes', $routes)
            ->extends('blank');
    }

    public function selectRoute(int $routeId): void
    {
        $this->selectedRouteId = $routeId;
    }
}
