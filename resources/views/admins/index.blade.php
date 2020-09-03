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
                    <a href="/p/create">Add New Post</a>
                @endcan
                @can('update',$user->profile)
                    <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
                @endcan
            </div>
            <div class="d-flex">
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
{{--        <div class="row pt-5">--}}
{{--            @foreach($user->posts as $post)--}}
{{--                <div class="col-4 pb-4">--}}
{{--                    <a href="/p/{{$post->id}}">--}}
{{--                        <h3>{{$post->caption}}</h3>--}}
{{--                        <img src="/storage/{{$post->image}}" alt="" class="w-100">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
    </div>
</div>
@endsection
