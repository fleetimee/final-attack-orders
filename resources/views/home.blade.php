@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @if (auth()->user()->isAdmin())
                    Anda login sebagai <span class="badge badge-success">{{ Auth::user()->name }} </span> 
                    @else
                    Anda login sebagai <span class="badge badge-danger">{{ Auth::user()->name }} </span> 
                    @endif
                    <br><br>
                    
                    @if (auth()->user()->isAdmin())
                        <p>Fitur Admin : </p>

                        <table class="table table-bordered" class="text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <td>Kategori</td>
                                    <td>Merk</td>
                                    <td>Produk</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><i class="las la-check"></i></td>
                                    <td><i class="las la-check"></i></td>
                                    <td><i class="las la-check"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    @endif
                    
                    @if (auth()->user()->isOperator())
                    <p>Fitur Operator : </p>

                    <table class="table" class="text-center">
                        <thead>
                            <tr>
                                <td>Kategori</td>
                                <td>Merk</td>
                                <td>Produk</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><i class="las la-times"></i></td>
                                <td><i class="las la-times"></i></td>
                                <td><i class="las la-check"></i></td>
                            </tr>
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
