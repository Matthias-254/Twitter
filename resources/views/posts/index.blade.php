<x-app-layout>
    <style>
        #post-del{
            border-radius: 5px;
            background-color: red;
            padding: 2px 5px;
            float: right;
        }
        #post-edit{
            border-radius: 5px;
            background-color: rgb(0, 128, 255);
            padding: 2px 5px;
        }
        #post-del:hover{
            cursor: pointer;
        }
        img{
            width: 90%;
            height: auto;
            margin: 0 auto;
        }
        h3{
            margin-top: 20px;
            font-size: 1.8rem;
            font-weight: bold;
            text-align: left;
            margin-bottom: 10px;
            margin-left: 5%;
            margin-right: 5%;
        }
        #content{
            font-size: 1.3rem;
            text-align: left;
            margin-top: 2vh;
            margin-bottom: 5vh;
            margin-left: 5%;
            margin-right: 5%;
        }
        #date{
            font-size: 0.9rem;
            margin-bottom: 10px;
            color: gray;
        }
        #post{
            margin-top: 5vh;
        }
        #container{
            width: 45%;
            margin: 0 auto;
            padding-bottom: 10vh;
        }
        #links{
            margin-top: 10px;
        }
        #link{
            background-color: rgb(0, 128, 255);
            color: white;
            border-radius: 5px;
            padding: 5px;
        }
        .links{
            text-align: center;
        }
    </style>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <p class="links">Welcome on the posts page! </p>
            <p class="links" id="links">Create a post here! => <a id="link" href="{{route('posts.create')}}">Create post</a></p>
        </h2>
    </x-slot>

    <div id="container">
        @foreach ($posts as $post)
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" id="post">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <p><b>{{$post->poster->name}}</b> • <span id="date">{{$post->created_at->format('H\ui -\ d/m/y')}}</span></p>
                        <p id="content">{{$post->content}}</p>    
                        <img src="{{ URL($post->image_path) }}" alt="News logo">
                    </div>
                </div>
            </div>
        @endforeach
    </div>
                
</x-app-layout>