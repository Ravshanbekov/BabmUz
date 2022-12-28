 @extends('layouts.admin')

 @section('content')
     <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
         @csrf
         @method('PUT')
         <div class="card col-lg-12">
             <div class="card-header">
                 <h4 style="margin-top: 30px;">Taxrirlash</h4>
             </div>
             <div class="pull-right">
                <a href="{{ route('admin.posts.index') }}"
                    class="btn btn-outline-primary btn-sm col-lg-2"><i class="fas fa-arrow-left"></i></a>
            </div>
             <div class="card-body">
                <h4 style="margin-top: 20px; margin_left:300px">Uz</h4>
                <br>
                 <div class="form-group">
                     <label>Sarlavxa</label>
                     <input type="text" value="{{ $post->title_uz }}" class="form-control form-control-sm" name="title_uz" required>
                 </div>
                 <div class="form-group">
                    <label>Tafsii</label>
                    <input type="text" value="{{ $post->description_uz }}" class="form-control form-control-sm" name="description_uz" required>
                 </div>
                 <div class="form-group">
                     <label>Tekst</label>
                     <textarea class="summernote" name="body_uz">{!! $post->body_uz !!}</textarea>
                 </div>
                <h4 style="margin-top: 20px; margin_left:300px">Ru</h4>
                <br>
                 <div class="form-group">
                     <label>Заголовок</label>
                     <input type="text" value="{{ $post->title_ru }}" class="form-control form-control-sm" name="title_ru" required>
                 </div>
                 <div class="form-group">
                    <label>Описание</label>
                    <input type="text" value="{{ $post->description_ru }}" class="form-control form-control-sm" name="description_ru" required>
                 </div>
                 <div class="form-group">
                     <label>Текст</label>
                     <textarea class="summernote" name="body_ru">{!! $post->body_ru !!}</textarea>
                 </div>
                 <h4 style="margin-top: 30px;">En</h4>
                 <br>
                 <div class="form-group">
                    <label>Title</label>
                    <input type="text" value="{{ $post->title_en }}" class="form-control form-control-sm" name="title_en" required>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" value="{{ $post->description_en }}" class="form-control form-control-sm" name="description_en" required>
                </div>
                 <div class="form-group">
                    <label>Body</label>
                    <textarea class="summernote" name="body_en">{!! $post->body_en !!}</textarea>
                </div>     
                <div class="form-group">
                    <label>Kategoriya</label>
                    <select name="category_id" id="" class="form-control" value="{{ $post->category_id }}">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $category->id == $post->category->id ? 'selected' : '' }}>{{ $category->name_uz }}</option>
                        @endforeach
                    </select>
                </div>
                 <div class="form-group">
                     <label>Faollik</label>
                     <select name="status" value="{{ $post->status }}" class="form-control">{{ $post->status }}
                         <option {{ $post->status == 1 ? 'selected' : '' }} value="1">Faol</option>
                         <option {{ $post->status == 0 ? 'selected' : '' }} value="0">Faol emas</option>
                     </select>
                 </div>
                 <div class="form__imgUploader">
                    <div class="form__wrapper">
                        <div class="form__image">
                               <img src="{{ $post->image }}" alt="" class="form__img">
                        </div>
                        <div class="formUploader__content">
                            <div class="formUploader__icon"><i class="fas fa-cloud-upload-alt"></i></div>
                            <div class="formUploader__text">Rasim kiriting !</div>
                        </div>
                        <div class="formUploader__cancel"><i class="fas fa-times"></i></div>
                        <div class="formUploader__fileName"><p>Fayl nomi</p></div>
                    </div>
                    <input type="file" class="imgUploader" accept=".jpg, .jpeg, .svg, .png" name="image" id="customFile" hidden>
                    <button type="button" class="customBtn">Rasm tanlang</button>
                </div>
            </div>
             <div class="card-footer">
                <button type="submit" class="btn btn-outline-primary col-lg-1"><i class="fas fa-edit"></i></button>
            </div>
     </form>
     </div>
 @endsection
