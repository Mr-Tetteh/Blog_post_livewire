<tr class="hover:bg-gray-900">
    <td class="px-6 py-3">{{$post->id}}</td>
    <td class="px-6 py-3">{{$post->user->name}}</td>
    <td class="px-6 py-3">{{$post->title}}

        @if($edit)
            <div class="update-form ">
                <livewire:post-update :post="$post"/>
            </div>
        @endif
        <div>
            <button wire:click="$toggle('edit')" class="text-blue-500 rounded bg-blue-950">Edit</button>
        </div>
    </td>
    <td class="px-6 py-3">{{$post->body}}</td>
    <td class="px-6 py-3">{{$post->created_at->diffForHumans()}}</td>
    <td class="px-6 py-3 hover:bg-white">
        <button wire:click="destroy({{$post->id}})"
                class="bg-red-500 rounded-2xl px-4 py-2 font-sans text-white hover:bg-red-900">Delete
        </button>
    </td>
</tr>
