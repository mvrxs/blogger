@extends('adminlte::page')

@section('title', '{ DEV / }')

@section('content_header')
    @can('admin.categories.create')
        <a href="{{ route('admin.categories.create') }}" class="btn btn-secondary btn-sn float-right">Add category</a>
    @endcan
    <h1>Category list</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td width="10px">
                                @can('admin.categories.edit')
                                    <a href="{{ route('admin.categories.edit', $category) }}"
                                        class="btn btn-primary btn-sm">Edit</a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('admin.categories.destroy')
                                    <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                @endcan

                            </td>
                        </tr>
                    @endforeach
                </tbody>
        </div>
    </div>
@stop




{{-- https://github.com/jeroennoten/Laravel-AdminLTE/wiki/ --}}
