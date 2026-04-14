@extends('layouts.app')

@section('title', 'Home Page')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')

@include('partials.banner', [
    'titulo' => 'Etec da Zona Leste',
    'texto' => 'Ensino técnico gratuito e de qualidade'
])
            
<section class="conteudo">
    <h2 class="titulo">Por que escolher a Etec da Zona Leste?</h2>
    <div class="conteudo-caixa">

        <p class="titulo-texto">A Etec da Zona Leste é referência no área da educação, com estudo de base comum de qualidade além da capacitação profisional.</p>
        <img src="{{ asset('assets/home/foto-etec.png') }}" alt="Foto da Etec da Zona Leste" class=foto>

        <div class="diferenciais">

            <x-difer-item
                titulo="Ensino gratuito"
                descricao="Ensino gratuito e de qualidade"
                :link="asset('assets/home/diferenciais/ensino-gratuito.png')"
                alt="Ensino gratuito de qualidade"
            />

            <x-difer-item
                titulo="Profisionais qualificados"
                descricao="Profisionais qualificados e experientes"
                :link="asset('assets/home/diferenciais/profisionais-qualificados.png')"
                alt="Profissionais qualificados e experientes"
            />

            <x-difer-item
                titulo="Preparação profisional"
                descricao="Ensino técnico e preparação para o mercado de trabalho"
                :link="asset('assets/home/diferenciais/preparacao-profisional.png')"
                alt="Ensino técnico com preparação profissional"
            />
                        
        </div>
    </div>
</section>

@endsection