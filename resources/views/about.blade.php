@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col pl-5 pr-5 text-justify">
                <p>
                    Essa aplicação tem como objetivo oferecer a automatização de recursos mais comuns oferecidos
                    aos Professores, assim como a gestão e visualização dos mesmos.
                </p>
            </div>
            <div class="col pl-5 pr-5">
                {{--Lion: Here we will provide a foreach to search and list services from db--}}
                Alguns exemplos de serviços:
                <ul class="list-group-flush">
                    <li class="list-group-item">Criação de Máquinas virtuais</li>
                    <li class="list-group-item">Criação de Listas de Email</li>
                    <li class="list-group-item">Criação de E-mail</li>
                    <li class="list-group-item">Pedidos de Equipamento</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
