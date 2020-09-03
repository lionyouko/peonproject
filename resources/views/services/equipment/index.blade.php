@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{auth()->user()->profile->profileImage()}}" class="rounded-circle w-100">
        </div>
        <div class="col-9 p-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="">
                    <h1>{{ auth()->user()->username}}</h1>
                </div>
                @can('update',auth()->user()->profile)
                    <a href="/p/create">Ask new Equipment</a>
                @endcan
            </div>
            <div class="d-flex">
                <div><strong>{{auth()->user()->equipments->count()}}</strong> Different equipments you have borrowed.</div>
            </div>
            <div class="pt-3 font-weight-bold">{{auth()->user()->profile->title}}</div>
            <div>{{auth()->user()->profile->description}}</div>
            <div><a href="#">{{auth()->user()->profile->url ?? 'N/A'}}</a></div>
        </div>

        {{-- Verificar como criar essas secoes automatizadamente
            com um for each para servicos que o user ja tem,
            disso ir em cada servico e buscar os elementos associados
            (como VMs) e fazer outro foreach a mostrar tais elementos,
            para assim, pela base de dados, tudo ser composto dinamica-
            mente.
             Verificar qual melhor esquema para isso.
        --}}
        <div class="row pt-5">
            <h3 class="pl-5">My current borrowed equipment(s): </h3>
            @foreach(auth()->user()->equipments as $equipment)
                <div class="col-4 pb-4">
                    <a href="/equipment/{{$equipment->id}}">
                        <div class="card">
                            <div class="card-header">
                                {{$equipment->name}}
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li>{{$equipment->description}}</li>
                                    <li>Register number: {{$equipment->register}}</li>
                                    {{-- No true quantity yet. To be the true, need to have a external
                                    DB in which the wuantity is subtracted--}}
                                    <li>Quantity of this equipment asked: {{$equipment->quantity}}</li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
