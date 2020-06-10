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
            background-color: white;
            /*color: #636b6f;*/
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>
<body>
<strong class="header">Edit the entry</strong>
@if($errors->has('text'))
    <b class ="error">
        {{ $errors->first('text') }}
    </b>
@endif
<form method="post" class="log" action="{{ route('to-dos.update', $todo) }}">
    @csrf
    @method('PUT')
{{--    <label for="text">Text: </label>--}}
    <input type="text" id="text" class="input" name="text" value="{{ old('text', $todo->text) }}"/>
    <button type="submit" class="submit">Submit</button>
</form>

<style>
    html, body {
        background-color: white;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .header {
        left: 0;
        line-height: 200px;
        margin-top: -100px;
        position: absolute;
        text-align: center;
        top: 48%;
        width: 100%;
        font-size: 20px;
    }

    .error {
        left: 0;
        line-height: 200px;
        margin-top: -100px;
        position: absolute;
        text-align: center;
        top: 62%;
        width: 100%;
        font-size: 15px;
    }

    .log {
        left: 0;
        line-height: 200px;
        margin-top: -100px;
        position: absolute;
        text-align: center;
        top: 55%;
        width: 100%;
        font-size: 20px;
    }

    .submit {
        background-color: #4CAF50; /* Green */
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

    .submit:hover {
        color: #ffffff !important;
        background: #80b806;
        border-color: #f6b93b !important;
        transition: all 0.4s ease 0s;
    }

    .input {
        width:210px;
        padding: 5px;
        border-radius: 5px;
        font-family: 'Nunito', sans-serif;
        font-size: 15px;
    }

    .input:hover {
        color: #0065c1;
        font-weight: bold;
    }
</style>
</body>
</html>
