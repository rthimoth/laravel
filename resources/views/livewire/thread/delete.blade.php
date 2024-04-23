<div class="inline-flex items-center  rounded-2xl
                        p-4 bg-customgray text-xs font-bold leading-5 text-white focus:outline-none focus:border-gray-200 transition hover:text-orange-500 ">
    <a wire:click="confirmThreadDeletion"
       wire:loading.attr="disabled"
       class="cursor-pointer">
        Delete
    </a>

    <x-jet-dialog-modal wire:model="confirmingThreadDeletion">
        <x-slot name="title">
            {{ __("Delete Thread") }}
        </x-slot>

        <x-slot name="content">
            {{ __('Are you sure you want to delete thread?!') }}
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('confirmingThreadDeletion')" wire:loading.attr="disabled">
                {{ __("Cancel") }}
            </x-jet-secondary-button>

            <x-jet-danger-button wire:click="deleteThread" wire:loading.attr="disabled">
                {{ __('Delete Thread') }}
            </x-jet-danger-button>

        </x-slot>
    </x-jet-dialog-modal>

</div>