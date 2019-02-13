@extends('layouts.header')

<div ng-app="app" ng-controller="ctrl" ng-class="animation" class="content-welcome text-center animsitionFlip">
    <div class="links">
        <h1>Bienvenue dans l'Ordre de l'Atlas</h1>
        <h3 class="animated fadeIn slower">C'est maintenant que la légende commence</h3>
        <a class="animated fadeIn delay-2s animsition-link" href="{{ 'home' }}">Entrer</a>
    </div>
</div>
        
 @extends('layouts.scripts')

