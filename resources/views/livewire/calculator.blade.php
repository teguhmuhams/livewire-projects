<div>
    <div class="flex flex-col items-center">
        <div class="flex p-6 mx-auto justify-center items-center gap-4">
            <input type="number" wire:model="num1" placeholder="Number 1">
            <select class="w-24" wire:model="action">
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
                <option>mod</option>
            </select>
            <input type="number" wire:model="num2" placeholder="Number 2">
            <button wire:click="calculate" class="p-3 bg-indigo-500 hover:bg-indigo-600 disabled:cursor-not-allowed disabled:bg-opacity-90 rounded text-white" {{ $disabled ? 'disabled' : '' }}>CALCULATE</button>
        </div>
        <p class="text-3xl">{{ $result }}</p>
    </div>
</div>
