<x-app-layout>
    <style>
        input, textarea{
            color: black;
        }
    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit your post here!') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Edit the post:
                    <form method="POST" action="{{route ('posts.update', $posts->id)}}">
                        @csrf
                        @method('PUT')
                        <label for="content" class="block text-sm font-bold mb-2">content:</label>
                        <textarea type="text" name="content" class="shadow appearance-none border border rounded w-full py-2 px-3 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="content" placeholder="Enter content" required>{{$posts->content}}</textarea>
                        <label for="image_path" class="block text-sm font-bold mb-2">URL of th image:</label>
                        <input type="text" name="image_path" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="image_path" placeholder="Enter th URL of the image" value="{{$posts->image_path}}" required>
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                            Edit post
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>