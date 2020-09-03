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
                    <a href="/p/create">Ask new email</a>
                @endcan
            </div>
            <div class="d-flex">
                <div><strong>{{auth()->user()->emails->count()}}</strong> alias e-mails you have registered.</div>
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

        {{--Verificar como colocar só se o email estiver pronto para ser usado
        E como colocar a admin para indicar que está pronto para ser usado
        --}}
        <div class="row pt-5">
            <h4 class="pl-5">Your current available email(s) is (are):</h4>
            @foreach(auth()->user()->emails as $email)
                <div class="col-4 pb-4">
                    <a href="/email/{{$email->id}}">
                        <div class="card">
                            <div class="card-header">
                                {{$email->address}}
                            </div>
                            <div class="card-body">
                                <p>{{$email->description}}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
