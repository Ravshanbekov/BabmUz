@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" enctype='multipart/form-data'>
        @csrf
        @method('PUT')
        <div class="card col-lg-12">
            <div class="card-header">
                <h4 style="margin-top: 30px;">Tahrirlash</h4>
            </div>
            <div class="pull-right">
                <a href="{{ route('admin.categories.index') }}"
                    class="btn btn-outline-primary btn-sm col-lg-2"><i class="fas fa-arrow-left"></i></a>
            </div>
            <div class="card-body">
                <h4 style="margin-top: 20px; margin_left:300px">Uz</h4>
                <br>
                <div class="form-group">
                    <label>Kategoriya nomi</label>
                    <input type="text" value="{{ $category->name_uz}}" class="form-control form-control-sm" name="name_uz">
                </div>
                <h4 style="margin-top: 20px; margin_left:300px">Ru</h4>
                <br>
                <div class="form-group">
                    <label>Название категори</label>
                    <input type="text" value="{{ $category->name_ru}}" class="form-control form-control-sm" name="name_ru">
                </div>
                <h4 style="margin-top: 20px; margin_left:300px">En</h4>
                <br>
                <div class="form-group">
                    <label>Name of category</label>
                    <input type="text" value="{{ $category->name_en}}" class="form-control form-control-sm" name="name_en">
                </div>
            </div>
            <div class="card-footer">
                <button style="margin-left: 1px ;" type="submit" class="btn btn-outline-primary col-lg-1"><i class="fas fa-edit"></i></button>
            </div>
    </form>
@endsection
