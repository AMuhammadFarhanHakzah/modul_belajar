<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    {{-- <meta http-equiv="X-UA-Compatible" content="IE=Edge"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Embed PDF file in html</title>
</head>
<body>
    <iframe src="{{$modul->full_document}}" frameborder="0"></iframe>
</html>