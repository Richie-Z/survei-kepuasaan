<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class SidebarMenu extends Component
{
    public $items;
    public function __construct()
    {
        $this->items = [
            'Dashboard' => [
                new Item('Dashboard', 'dashboard', 'fas fa-fire'),
                new Item('Respons', 'dashboard', 'fas fa-fire'),
            ],
            'Master' => [
                new Item('Pertanyaan', 'question.index', 'fas fa-fire'),
                new Item('Umur', 'dashboard', 'fas fa-fire'),
                new Item('Pendidikan', 'dashboard', 'fas fa-fire'),
                new Item('Pekerjaan', 'dashboard', 'fas fa-fire'),
                new Item('Jenis Pelayanan', 'dashboard', 'fas fa-fire'),
            ]
        ];
    }

    private function removeLastRoute(string $routes): string
    {
        $routesArr = explode(".", $routes);
        if (count($routesArr) > 1)
            return "{$routesArr[0]}.{$routesArr[1]}";
        return $routesArr[0];
    }

    public function isRouteActive(string $routeName): string
    {
        $isActive = Str::is($routeName, request()->route()->getName());
        if (count(explode(".", $routeName)) > 1) {
            $isActive = Str::is($this->removeLastRoute($routeName), $this->removeLastRoute(request()->route()->getName()));
        }
        return  $isActive ? 'active' : '';
    }

    public function render(): View|Closure|string
    {
        return <<<'blade'
           @foreach($items as $menuHeader => $items)
           <li class="menu-header">{{$menuHeader}}</li>
               @foreach($items as $item)
                <li class="{{$isRouteActive($item->routeName)}}">
                    <a class="nav-link" href="{{route($item->routeName)}}">
                        <i class="{{$item->icon}}"></i><span>{{$item->name}}</span>
                    </a>
               </li>
               @endforeach
            @endforeach
        blade;
    }
}

class Item
{
    public function __construct(
        public string $name,
        public string $routeName,
        public string $icon,
    ) {
    }
}