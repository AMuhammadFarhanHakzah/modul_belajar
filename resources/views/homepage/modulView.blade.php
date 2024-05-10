<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Embed PDF file in html</title>
    <style>
        #myPDF{
            width: 100%;
            height: 665px;
        }
    </style>
</head>
<body>
    <iframe id="myPDF" src="/document/fullDocStorage/{{$modul->full_document}}"></iframe>
</html>