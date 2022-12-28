 @extends('layouts.admin')

 @section('content')
 <form action="{{ route('admin.courses.update', $course->id) }}" method="POST" enctype="multipart/form-data">
         @csrf
         @method('PUT')
         <div class="card col-lg-12">
             <div class="card-header">
                 <h4 style="margin-top: 30px;">Taxrirlash</h4>
             </div>
             <div class="pull-right">
                <a href="{{ route('admin.courses.index') }}"
                    class="btn btn-outline-primary btn-sm col-lg-2"><i class="fas fa-arrow-left"></i></a>
            </div>
             <div class="card-body">
                <h4 style="margin-top: 20px; margin_left:300px">Uz</h4>
                <br>
                 <div class="form-group">
                     <label>Sarlavxa</label>
                     <input type="text" value="{{ $course->title_uz }}" class="form-control form-control-sm" name="title_uz" required>
                 </div>
                 <div class="form-group">
                    <label>Tafsii</label>
                    <input type="text" value="{{ $course->description_uz }}" class="form-control form-control-sm" name="description_uz" required>
                 </div>
                <h4 style="margin-top: 20px; margin_left:300px">Ru</h4>
                <br>
                 <div class="form-group">
                     <label>Заголовок</label>
                     <input type="text" value="{{ $course->title_ru }}" class="form-control form-control-sm" name="title_ru" required>
                 </div>
                 <div class="form-group">
                    <label>Описание</label>
                    <input type="text" value="{{ $course->description_ru }}" class="form-control form-control-sm" name="description_ru" required>
                 </div>
                 <h4 style="margin-top: 30px;">En</h4>
                 <br>
                 <div class="form-group">
                    <label>Title</label>
                    <input type="text" value="{{ $course->title_en }}" class="form-control form-control-sm" name="title_en" required>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" value="{{ $course->description_en }}" class="form-control form-control-sm" name="description_en" required>
                </div>
                 <div class="form__imgUploader">
                    <div class="form__wrapper">
                        <div class="form__image">
                               <img src="{{ $course->image }}" alt="" class="form__img">
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
