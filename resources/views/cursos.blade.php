@extends('layouts.app')

@section('title', 'Cursos')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/curso.css') }}">
@endpush

@section('content')

@include('partials.banner', [
    'titulo' => 'Etec da Zona Leste',
    'texto' => 'Ensino técnico gratuito e de qualidade'
])

 <section class="cards">

    <x-card-curso
        :img="asset('assets/cursos-cards/adm.png')"
        alt="Imagem de Administradores(as)"
        curso="Administração"
        texto="Foca na gestão de processos organizacionais, planejamento estratégico, logística e marketing."
        tempo="3 Semestres"
        periodo="Manhã e Noite"
        link="https://eteczonaleste.cps.sp.gov.br/cursos-etec/administracao/"
    />

    <x-card-curso
        :img="asset('assets/cursos-cards/conta.png')"
        alt="Imagem de um Contador(a)"
        curso="Contabilidade"
        texto="Ensina a gerenciar contas, impostos, balanços e auditorias de empresas."
        tempo="2 Semestres"
        periodo="Noite"
        link="https://eteczonaleste.cps.sp.gov.br/cursos-etec/contabilidade/"
    />

    <x-card-curso
        :img="asset('assets/cursos-cards/ds.png')"
        alt="Imagem de um Desenvolvedor(a)"
        curso="Desenvolvimento de Sistemas"
        texto="Capacita para criar softwares, aplicativos e sistemas web, dominando linguagens de programação."
        tempo="3 Semestres"
        periodo="Noite"
        link="https://eteczonaleste.cps.sp.gov.br/cursos-etec/analise-e-desenvolvimento-de-sistema/"
    />

    <x-card-curso
        :img="asset('assets/cursos-cards/adm.png')"
        alt="Imagem de Administradores(as)"
        curso="M-Tec de Administração"
        texto="Une a base do ensino médio com competências de gestão e empreendedorismo."
        tempo="3 Anos"
        periodo="Manhã"
        link="https://eteczonaleste.cps.sp.gov.br/cursos-etec/novotec-logistica/"
    />

    <x-card-curso
        :img="asset('assets/cursos-cards/ds.png')"
        alt="Imagem de um Desenvolvedor(a)"
        curso="M-Tec de Desenvolvimentode Sistemas"
        texto="O aluno termina o colégio sabendo programar e projetar sistemas complexos."
        tempo=" 3 Anos"
        periodo="Manhã"
        link="https://eteczonaleste.cps.sp.gov.br/cursos-etec/novotec-desenvolvimento-de-sistemas/"
    />

    <x-card-curso
        :img="asset('assets/cursos-cards/ds.png')"
        alt="Imagem de um Desenvolvedor(a)"
        curso="M-Tec de Desenvolvimentode Sistemas (AMS)"
        texto="Formação contínua que leva o aluno do nível médio até o diploma de graduação em tecnologia."
        tempo="5 Anos (Médio e Faculdade)"
        periodo="Tarde"
        link="https://eteczonaleste.cps.sp.gov.br/cursos-etec/desenvolvimento-de-sistemas/"
    />

    <x-card-curso
        :img="asset('assets/cursos-cards/log.png')"
        alt="Imagem de um(a) Profissional de Logística"
        curso="M-Tec de Logística"
        texto="Ensina a gerenciar o fluxo de mercadorias, transporte e armazenamento de produtos."
        tempo="3 Anos"
        periodo="Tarde"
        link="https://eteczonaleste.cps.sp.gov.br/cursos-etec/novotec-logistica-2/"
    />

    <x-card-curso
        :img="asset('assets/cursos-cards/rh.png')"
        alt="Imagem de um(a) Gestor(a) de Recursos Humanos"
        curso="M-Tec de Recursos Humanos"
        texto="Integra o colégio com o aprendizado sobre gestão de pessoas e comportamento organizacional."
        tempo="3 Anos"
        periodo="Manhã"
        link="https://eteczonaleste.cps.sp.gov.br/cursos-etec/recursos-humanos/"
    />

    <x-card-curso
        :img="asset('assets/cursos-cards/sj.png')"
        alt="Imagem de um(a) Tecnólogo(a) de Serviços Jurídicos e Notarias"
        curso="M-Tec de Serviços Jurídicos"
        texto="Base do ensino médio aliada à introdução ao Direito e procedimentos judiciais."
        tempo="3 Anos"
        periodo="Tarde"
        link="https://eteczonaleste.cps.sp.gov.br/cursos-etec/medio-tecnico-servicos-juridicos/"
    />

    <x-card-curso
        :img="asset('assets/cursos-cards/rh.png')"
        alt="Imagem de um(a) Gestor(a) de Recursos Humanos"
        curso="Recursos Humanos"
        texto="Prepara para recrutamento, seleção, treinamento, folha de pagamento e leis trabalhistas."
        tempo="3 Semestres"
        periodo="Noite"
        link="https://eteczonaleste.cps.sp.gov.br/cursos-etec/recursos-humanos-2/"
    />

    <x-card-curso
        :img="asset('assets/cursos-cards/sj.png')"
        alt="Imagem de um(a) Tecnólogo(a) de Serviços Jurídicos e Notarias"
        curso="Serviços Jurídicos"
        texto="Apoio administrativo em escritórios de advocacia e cartórios, lidando com documentação legal."
        tempo="3 Semestres"
        periodo="Noite"
        link="https://eteczonaleste.cps.sp.gov.br/cursos-etec/servicos-juridicos/"

</section>

@endsection