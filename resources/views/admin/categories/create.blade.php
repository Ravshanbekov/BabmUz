@extends('layouts.admin')


@section('content')
    <form action="{{ route('admin.categories.store') }}" method="POST">
        @csrf
        <div class="card col-lg-12">
            <div class="card-header">
                <h4 style="margin-top: 30px;">Qo'shish</h4>
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
                    <input type="text" class="form-control form-control-sm" name="name_uz" required>
                </div>
                <h4 style="margin-top: 20px; margin_left:300px">Ru</h4>
                <br>
                <div class="form-group">
                    <label>Название категори</label>
                    <input type="text" class="form-control form-control-sm" name="name_ru" required>
                </div>
                <h4 style="margin-top: 20px; margin_left:300px">En</h4>
                <br>
                <div class="form-group">
                    <label>Name of category</label>
                    <input type="text" class="form-control form-control-sm" name="name_en" required>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-outline-primary col-lg-1"><i class="fas fa-edit"></i></button>
            </div>
    </form>
    </div>
@endsection
