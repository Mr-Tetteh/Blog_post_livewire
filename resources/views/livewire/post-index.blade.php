<div class="grid grid-cols-3  gap-2">
    <div class="container-1 ">
        <div class="w-full max-w-xs">
            <form wire:submit="create" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">

                <div>
                    @if (session()->has('message'))
                        <div class=" bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md mb-5" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                        Title
                    </label>
                    <input
{{--                        form.title was used when we used PostForm--}}
                        wire:model="form.title"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="title" type="text" placeholder="title">
                    @error('form.title')
                    <div class="text-red-500">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="description"> Description</label>
                    <textarea wire:model="form.body" class="rounded block text-gray-700 text-sm font-bold mb-2"
                              id="description" rows="5" cols="30"> </textarea>

                    @error('form.body')
                    <div class="text-red-500">{{$message}}</div>
                    @enderror
                </div>

                <div class="flex justify-end">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Create
                    </button>

                </div>
            </form>
        </div>
    </div>

    <div class="container-2  col-span-2">
        <table class="min-w-full divide-y divide-gray-300">


            <thead>
            <tr class="hover:bg-gray-900">
                <th scope="col" class="px-6 py-3 text-start text-sm ">ID</th>
                <th scope="col" class="px-6 py-3 text-start text-sm ">User</th>
                <th scope="col" class="px-6 py-3 text-start text-sm ">Title</th>
                <th scope="col" class="px-6 py-3 text-start text-sm ">Body</th>
                <th scope="col" class="px-6 py-3 text-start text-sm ">Date</th>
                <th scope="col" class="px-6 py-3 text-start text-sm ">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <livewire:post-item :post="$post" wire:key="{{$post->id}}" @deleting="$refresh"/>
            @endforeach
            </tbody>
        </table>
        {{$posts->links(data: ['scrollTo' =>false ])}}
    </div>
</div>
