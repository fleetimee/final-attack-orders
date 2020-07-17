@extends('layouts.app')

@section('content')
<div class="card card-default">
    <div class="card-header">
        {{ isset($category) ? 'Edit Kategori' : 'Tambah Kategori' }} 
    </div>
    <div class="card-body">
        @include('partials.error')
        <form action="{{ isset($category) ? route('categories.update', $category->id) : route('categories.store') }}" method="POST">
            @csrf
            @if(isset($category))
                @method('PUT')
            @endif
            <div class="form-group">
                <label for="name">Nama Kategori</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ isset($category) ? $category->name : '' }}">
            </div>
            <div class="form-group">
                <button class="btn btn-success">
                    {{ isset($category) ? 'Update' : 'Tambah' }} 
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
