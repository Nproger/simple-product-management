@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Product') }}</div>
                
                <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create new products</a>
            </div>
        </div>
    </div>
</div>



@endsection
