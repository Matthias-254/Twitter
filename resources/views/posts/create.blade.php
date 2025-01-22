<x-app-layout>
    <style>
        input, textarea{
            color: black;
        }

        #button{
            background-color: grey;
            border-radius: 5px;
            padding: 5px 10px;
        }

        .label{
            font-size: 1.5rem;
            font-weight: bold;
        }

        #content, #image_path{
            color: black;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        #content{
            height: 15vh;
        }

        h1{
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
        }
        .blauw{
            color: rgb(0, 128, 255);
        }
        #knop{
            border-radius: 5px;
            background-color: rgb(0, 128, 255);
            padding: 5px 10px;
        }
    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Hello User! Create a <span class="blauw">new post</span> here!
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 dark:text-gray-100">
                    <h1>Add a <span class="blauw">new post:</span></h1>
                    <br>
                    <form method="POST" action="{{route('posts.store')}}">
                        @csrf
                        <label for="content" class="block text-sm font-bold mb-2"><span class="label">Content:</span></label>
                        <textarea type="text" name="content" class="shadow appearance-none border border rounded w-full py-2 px-3 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="content" placeholder="Enter content" required>{{old('content')}}</textarea>
                        <label for="image_path" class="block text-sm font-bold mb-2"><span class="label">URL of the image:</span></label>
                        <input type="text" name="image_path" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="image_path" placeholder="Enter the URL of the image" value="{{old('image_path')}}" required>
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" id="knop">
                            Create post
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>