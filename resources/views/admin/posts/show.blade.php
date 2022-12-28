 @extends('layouts.admin')

 @section('content')
    <div class="card col-lg-12">
        <div class="card-header">
            <h4 style="margin-top: 30px;">Ko'rish</h4>
        </div>
        <div class="pull-right">
            <a href="{{ route('admin.posts.index') }}"
                class="btn btn-outline-primary btn-sm col-lg-2"><i class="fas fa-arrow-left"></i></a>
        </div>
        <div class="card-body">
            <h4 style="margin-top: 20px; margin_left:300px">Uz</h4>
            <br>
        <div class="form-group">
            <label>
                 <h6>Sarlavxa:</h6>
            </label>
            {{ $post->title_uz }}
        </div>
        <div class="form-group">
            <label>
                 <h6>Tafsifi:</h6>
            </label>
            {{ $post->description_uz }}
        </div>
        <div class="form-group">
            <label>
                 <h6>Tekst:</h6>
            </label>
            {!! $post->body_uz !!}
        </div>
            <h4 style="margin-top: 20px; margin_left:300px">Ru</h4>
                <br>
            <div class="form-group">
                <label>
                     <h6>Заголовок:</h6>
                </label>
                {{ $post->title_ru }}
            </div>
            <div class="form-group">
                <label>
                     <h6>Описание:</h6>
                </label>
                {{ $post->description_ru }}
            </div>
            <div class="form-group">
                <label>
                     <h6>Текст:</h6>
                </label>
                {!! $post->body_ru !!}
            </div>
            <h4 style="margin-top: 30px;">En</h4>
            <br>
            <div class="form-group">
                <label>
                     <h6>Title:</h6>
                </label>
                {{ $post->title_en }}
            </div>
            <div class="form-group">
                <label>
                     <h6>Description:</h6>
                </label>
                {{ $post->description_en }}
            </div>
            <div class="form-group">
                <label>
                     <h6>Body:</h6>
                </label>
                {!! $post->body_en !!}
            </div>
            <div class="form-group">
                <label>
                    <h6>Kategoriya nomi:</h6>
                </label>
                <span class="badge badge-primary">{{ $post->category->name_uz }}</span>   
            </div>
            <div class="form-group">
                <label>
                    <h6>Faollik:</h6>
                </label>
                @if ($post->status == 1)
                <span class="badge badge-success">Faol </span>
                @else
                <span class="badge badge-danger">Faol emas </span>
                @endif
            </div>
            <img src="{{ $post->image }}" width="250" alt="">
        </div>
    </div>
 @endsection



