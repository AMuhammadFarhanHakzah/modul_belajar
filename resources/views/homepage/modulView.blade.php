<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Embed PDF file in html</title>
</head>
<body>
    <iframe src="/document/fullDocStorage/{{$modul->full_document}}" width="600" height="400" allowfullscreen></iframe>
</html>