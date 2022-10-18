@extends('layout.master')
@include('layout.navbar')
<main class="container">
<h1 class="mt-4 mb-3">{{__('messages.Get All Offer')}} </h1>
    @if (session('status'))
        <div class="alert alert-success mt-4 mb-4" role="alert">
            {{ session('status') }}
        </div>
    @endif

<table class="table table-bordered" style="text-align: center">
    <thead class="thead-light">
    <tr>
        <th scope="col">#</th>
        <th scope="col">{{__('messages.name')}}</th>
        <th scope="col">{{__('messages.details')}}</th>
        <th scope="col">{{__('messages.Operation')}}</th>
    </tr>
    </thead>
    <tbody>
    @foreach($offer as $item)
    <tr>
       <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->details}}</td>
        <td>
            <a href="{{route('offer.edit',$item->id)}}" class="btn btn-success">{{__('messages.edit')}}</a>
            <a href="{{route('offer.delete',$item->id)}}" class="btn btn-danger">{{__('messages.delete')}}</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
</main>
