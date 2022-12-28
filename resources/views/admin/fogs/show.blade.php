 @extends('layouts.admin')

 @section('content')
    <div class="card col-lg-12">
        <div class="card-header">
            <h4 style="margin-top: 30px;">Ko'rish</h4>
        </div>
        <div class="pull-right">
            <a href="{{ route('admin.fogs.index') }}"
                class="btn btn-outline-primary btn-sm col-lg-2"><i class="fas fa-arrow-left"></i></a>
        </div>
        <div class="card-body">
        <div class="form-group">
            <label>
                 <h6>Sarlavha uz:</h6>
            </label>
            {{ $fog->title_uz }}
        </div>
        <div class="form-group">
            <label>
                 <h6>Tafsifi uz:</h6>
            </label>
            {{ $fog->description_uz }}
        </div>
        <div class="form-group">
            <label>
                 <h6>Sarlavha ru:</h6>
            </label>
            {{ $fog->title_ru }}
        </div>
        <div class="form-group">
            <label>
                 <h6>Tafsifi ru:</h6>
            </label>
            {{ $fog->description_ru }}
        </div>
        <div class="form-group">
            <label>
                 <h6>Sarlavha en:</h6>
            </label>
            {{ $fog->title_en }}
        </div>
        <div class="form-group">
            <label>
                 <h6>Tafsifi en:</h6>
            </label>
            {{ $fog->description_en }}
        </div>
            <div class="form-group">
                <label>
                     <h6>Link:</h6>
                </label>
                {{ $fog->link }}
            </div>
            <img src="{{ $fog->image }}" width="250" alt="">
        </div>
    </div>
 @endsection



