@extends('layouts.app')

@section('ayuba')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
@include('products.table')

@endsection