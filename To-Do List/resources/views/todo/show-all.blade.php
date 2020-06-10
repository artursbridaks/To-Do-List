<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>To-Do App</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: lightskyblue;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="menu">
    <a class="menu-text" href="{{route('to-dos.create')}}">New Entry</a>
</div>
<br/>
<strong class="header">To-Do List: </strong>
<strong class="Arturs">Created by Arturs</strong>
<div class="list">
    <ul class="tasks">
        @foreach($todos as $todo)
            <li>
                <a href="{{ route('to-dos.edit', $todo) }}" class="entry">
                    {{$todo->text}}
                </a>
                <form method="post" action="{{route('to-dos.mark-as-completed', $todo)}}" class="mark-as-completed">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="mark-as-completed">
                        @if($todo->completed_at)
{{--                            {{$todo->completed_at}}--}}
                            Done
                        @else
                            In Progress
                        @endif
                    </button>
                </form>
                <form method="post" action="{{route('to-dos.delete', $todo)}}" class="delete">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>

<style>
    html, body {
        background-color: white;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 10px;
    }

    .menu {
        padding: 5px;
        margin: 10px;
        text-align: center;
        display: inline-block;
        position: relative;
        top: 20px;
        left: 530px;
        text-decoration: none;
        font-family: 'Nunito', sans-serif;
        font-size: 25px;
        color: white;
        border: solid gray 2px;
        border-radius: 5px;
        background-color: rgba(199, 226, 255, 0.8);
    }

    .menu-text {
        padding: 10px;
    }

    .menu-text:link {
        text-decoration: none;
        color: black;
    }

    .menu-text:visited {
        text-decoration: none;
        color: black;
    }

    .menu-text:hover {
        text-decoration: underline;
        color: black;
    }

    .menu-text:active {
        color: black;
        text-decoration: none;
    }

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .header {
        font-size: 20px;
        position: relative;
        top: 20px;
        left: 565px;
    }

    .Arturs {
        background-color: yellow;
        padding: 1px;
        display: none;
        color: black;
=    }

    .header:hover + .Arturs {
        display: inline-block;
        position: relative;
        left: 570px;
        top: 19px;
    }

    .list {
        border: solid gray 2px;
        border-radius: 20px;
        top: 30px;
        position: relative;
    }

    .entry {
        background-color: white;
        /*border: solid gray 1px;*/
        color: black;
        padding: 15px 32px;
        margin: 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        width: 15em
    }

    .entry:hover {
        border-radius: 25px;
        width: 300px;
        border: solid #0065c1 1px;
    }

    .entry:hover span {
        display: none;
    }

    .entry:hover:before {
        content: "Edit: ";
        color: #0065c1;
    }

    .mark-as-completed {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 5px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        position: relative;
        font-size: 15px;
        border-radius: 5px;
    }

    .mark-as-completed:hover {
        color: #ffffff !important;
        background: #80b806;
        border-color: #f6b93b !important;
        transition: all 0.4s ease 0s;
    }

    .delete {
        background-color: #d75021; /* red */
        border: none;
        color: white;
        padding: 5px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 15px;
        border-radius: 5px;
    }

    .delete:hover {
        color: #ffffff !important;
        background: #ff2121;
        border-color: #f6b93b !important;
        transition: all 0.4s ease 0s;
    }
</style>
</body>
</html>
