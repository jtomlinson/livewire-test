<div x-data="routes">
    <flux:icon.home wire:loading.remove/>
    <flux:icon.loading wire:loading/>
    <div class="grid grid-cols-2 w-1/2">
        <div class="grid grid-cols-1 gap-y-1">
            @foreach ($routes as $route)
                <div class="flex w-full" wire:key="route-list-route-{{ $route->id }}">
                    <div data-id="{{ $route->id }}"
                         wire:click="selectRoute({{ $route->id }})"
                         wire:key="route-{{ $route->id }}"
                         class="w-full bg-blue-700 text-white text-xs items-center justify-between border border-gray-400 p-2 rounded cursor-pointer hover:bg-blue-600">
                        {{ $route->id }}
                    </div>
                </div>
            @endforeach
        </div>

        <div class="grid grid-cols-1 gap-y-2">
            @if ($this->selectedRouteId !== 0)
                <livewire:route-test :key="$this->selectedRouteId"/>
            @endif
        </div>
    </div>

    <div x-cloak :class="{'visible': moveToRouteModal.isVisible, 'invisible': !moveToRouteModal.isVisible }" wire:key="modal">
        <div x-show="moveToRouteModal.isVisible" wire:key="moveToRouteModal"></div>
    </div>
</div>

@script
<script type="text/javascript">
    Alpine.data('routes', () => ({
        moveToRouteModal: {
            isVisible: false,
            hide() {
                this.isVisible = false;
            },
            show() {
                this.isVisible = true;
            },
        }
    }))
</script>
@endscript
