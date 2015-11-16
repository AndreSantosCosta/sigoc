@extends('layout')

@section('title')
    SIGOC
@stop

@section('content')
    <!-- Header -->
    <div class="geral_container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--<img class="img-responsive" src="" alt="">-->
                    <div class="intro-text">
                        <span class="name">BEM-VINDO</span>
                    </div>
                    <div class="sub-intro-text">
                        <!--<div class="sub-intro-text-left-color">
                        </div>-->
                        <img class="img-barra-left" src="{{ asset ('assets/img/barra_left_right.jpg') }}" alt="barra_left">
                        <span class="skills">Sistema Integrado de Gestão Operacional Cinotécnico</span>
                        <img class="img-barra-right" src="{{ asset ('assets/img/barra_left_right.jpg') }}" alt="barra_right">
                        <!--<div class="sub-intro-text-right-color">
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop 