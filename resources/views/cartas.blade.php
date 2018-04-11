@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <h1>CARTAS</h1>
            <h5>Existen una gran variedad de cartas, pero todas tienen el mismo formato basicamente.</h5>
        </div>
        @include('cards.format')
        <div class="col-md-12">
            <h1>TIPOS DE CARTAS</h1>
            <h5>Las cartas se dividen en tipos unicamente y estos se subdividen.</h5>
            <div class="col-md-12">
                <h3>TIERRAS</h3>
                <p>estas a su vez se dividen en:</p>
            </div>
            @include('cards.card-type.lands')

            <div class="col-md-12">
                <h3>HECHIZOS</h3>
                <p>estas a su vez se dividen en:</p>
            </div>
            <div class="col-md-12">
                <div class="tab-content panels-faq">
                    <div class="tab-pane active" id="tab1">
                        <div class="panel-group" id="help-accordion-1">
                            <!--hechizo de artefactos-->
                                @include('cards.card-type.artifact')
                            <!--hechizo de conjuro-->
                                @include('cards.card-type.sorcery')
                            <!--hechizo de criaturas-->
                                @include('cards.card-type.creature')
                            <!--hechizo de encantamientos-->
                                @include('cards.card-type.enchantment')
                            <!--hechizo de instantaneos-->
                                @include('cards.card-type.instant')
                            <!--hechizo de planeswalker-->
                                @include('cards.card-type.planeswalker')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection