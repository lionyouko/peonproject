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
                    <a href="/p/create">Add New Post</a>
                @endcan
            </div>
            <div class="d-flex">
                <div><strong>{{auth()->user()->vms->count()}}</strong> VMs you have registered.</div>
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
            <h3 class="pl-5">My current Virtual Machines: </h3>
            @foreach(auth()->user()->vms as $vm)
                <div class="col-4 pb-4">
                    <a href="/vm/{{$vm->id}}">
                        <div class="card">
                            <div class="card-header">
                                {{$vm->name}}
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li>The VM is ready to use: {{$vm->is_on}}</li>
                                    <li>{{$vm->hdd}} GB</li>
                                    <li>{{$vm->ram}} GB</li>
                                    <li>{{$vm->os}}</li>
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
