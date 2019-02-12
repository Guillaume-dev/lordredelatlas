<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <title>L'Ordre De l'Atlas</title>

        <!-- Fonts/Police -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Bootstrapp -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
        <!-- Bootstrapp toggle -->
        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
        <!-- Modification Css -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('scss/myscss.scss') }}" rel="stylesheet">
        <link href="{{ asset('css/mycss.css') }}" rel="stylesheet">
    </head>
    <body> 
   
     