@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{$user->profile->profileImage()}}" class="rounded-circle w-100">
        </div>
        <div class="col-9 p-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="">
                    <h1>{{ $user->username}}</h1>
                </div>
                @can('update',$user->profile)
                    <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
                @endcan
            </div>
            <div class="pt-3 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url ?? 'N/A'}}</a></div>
        </div>

        {{-- Verificar como criar essas secoes automatizadamente
            com um for each para servicos que o user ja tem,
            disso ir em cada servico e buscar os elementos associados
            (como VMs) e fazer outro foreach a mostrar tais elementos,
            para assim, pela base de dados, tudo ser composto dinamica-
            mente.
             Verificar qual melhor esquema para isso.
        --}}
        <div class="row pl-5 list-group">
            <h3 class="">Access your resources from here:</h3>
            <ul class="list-group pl-3">
                <li><a href="/email/index">My Email(s)</a></li>
                <li><a href="/homepage/index">My Homepage(s)</a></li>
                <li><a href="/vm/index">My Virtual Machine(s)</a></li>
                <li><a href="/mailinglist/index">My Mailing List(s)</a></li>
                <li><a href="/subdomainaccess/index">My Accessible Subdomain(s)</a></li>
                <li><a href="/vpn/index">My Virtual Private Network(s)</a></li>
                <li><a href="/equipment/index">My Borrowed Equipment(s)</a></li>
            </ul>
        </div>

        <div class="row pl-5 list-group pl-3">
            <h3>Ask a new resource:</h3>
            <ul class="list-group pl-3">
                <li><a href="/email/create">My new Email</a></li>
                <li><a href="/homepage/create">My new Homepage</a></li>
                <li><a href="/vm/create">My new Virtual Machine</a></li>
                <li><a href="/mailinglist/create">My new Mailing List(s)</a></li>
                <li><a href="/subdomainaccess/create">My new Accessible Subdomain</a></li>
                <li><a href="/vpn/create">My new Virtual Private Network</a></li>
                <li><a href="/equipment/create">My new Borrowed Equipment</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection
