@extends('layouts.admin')

 @section('content')
     <div class="card col-lg-12">
         <div class="card-header">
             <h4 style="margin-top: 30px;">Korish</h4>
         </div>
         <div class="pull-right">
             <a href="{{ route('admin.categories.index') }}"
                 class="btn btn-outline-primary btn-sm col-lg-2"><i class="fas fa-arrow-left"></i></a>
         </div>
         <div class="card-body">
             <br>
             <div class="form-group">
                 <label>
                     <h6>Kategoriya nomi:</h6>
                 </label>
                 {{ $category->name_uz }}
             </div>
             <div class="form-group">
                <label>
                    <h6>Название категории:</h6>
                </label>
                {{ $category->name_ru }}
            </div>
            <div class="form-group">
                <label>
                    <h6>Name of category:</h6>
                </label>
                {{ $category->name_en }}
            </div>
         </div>
     </div>
     @endsection
