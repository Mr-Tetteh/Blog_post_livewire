<form wire:submit="submit">
    <div class=" grid grid-cols-2 gap-2">
        <div class="mb-0 pb-0 py-0">
            <input wire:model="title" class="rounded py-2 px-3 mb-2 w-full text-zinc-950" type="text" placeholder="Title" id="title">
            <input wire:model="body"  class="rounded py-2 px-3 w-full text-zinc-950 " placeholder="body" type="text" id="body">
        </div>

        <div>
            <button class="bg-blue-500 px-4 font-sans text-white rounded hover:bg-blue-950 h-full">
                <div>S</div>
                <div>A</div>
                <div>V</div>
                <div>E</div></button>
        </div>
    </div>
</form>

