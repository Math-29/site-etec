@extends('layouts.app')

@section('title', 'Vestibulinho')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/vestibulinho.css') }}">
@endpush

@section('content')

@include('partials.banner', [
    'titulo' => 'Vestibulinho Etec',
    'texto' => 'Entre na escola com um dos melhores ensino médio e tecnico do Brasil e referência no mercado',
    'botao' => [
        'texto' => 'Inscreva-se Agora!',
        'link' => 'https://vestibulinho.etec.sp.gov.br/candidato/'
    ]
])
            
<section class="area-cards">

    <x-card titulo="Como funciona?">

        <b>Passo 1:</b> Você precisa fazer a inscrição no site do vestibulinho<br><br>
        
        <a href="https://vestibulinho.etec.sp.gov.br/candidato/">
            https://vestibulinho.etec.sp.gov.br/candidato/
        </a><br><br>
                    
        <b>Passo 2:</b> depois realizar a prova na data correta, 
        esta que é informada no site do vestibulinho também<br><br>
                    
        <b>Passo 3:</b>após isso se você for aprovado então basta realizar a matrícula
        na etec que você escolheu durante a inscrição

    </x-card>

    <x-card titulo="Requisitos">

        Para poder entrar na Etec, 
        é necessário que o candidato já tenha finalizado o Ensino Fundamental.<br><br> 
                    
        E caso vá se matricular apenas no ensino técnico, 
        precisa estar cursando ou concluido o segundo ano do Ensino Médio.<br><br>

        Após a conclusão e aprovação do vestibulinho é necessário levar os seguintes documentos 
        na unidade que você vai estudar para realizar a matrícula: Identidade, CPF, Foto 3x4, 
        Comprovação de Escolaridade Pública, EJA.

    </x-card>

    <x-card titulo="Cotas">

        Durante a inscrição o candidato pode recorrer a duas cotas, 
        sendo elas de escolaridade pública e de afrodescendencia.<br><br>
                    
        A cota para estudantes oriundos de escolas públicas possui um bônus de 10%<br><br>
                    
        E a cota para afrodescendentes possui um bônus de 3%<br><br>
                    
        Caso o candidato possar recorrer as duas cotas, ele terá ambos os bônus, sendo ao todo 13%
        
    </x-card>
</section>

@endsection