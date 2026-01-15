<x-filament-panels::page>
    <form wire:submit.prevent="save">
        {{ $this->form }}

        <div style="margin-top: 2em;">
            <x-filament::button type="submit">
                Save Changes
            </x-filament::button>
        </div>
    </form>
</x-filament-panels::page>
