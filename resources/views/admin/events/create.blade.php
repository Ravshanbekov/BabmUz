  @extends('layouts.admin')

  @section('content')
      <form action="{{ route('admin.events.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="card col-lg-12">
              <div class="card-header">
                  <h4 style="margin-top: 30px;">Qo'shish</h4>
              </div>
              <div class="pull-right">
                <a href="{{ route('admin.events.index') }}"
                    class="btn btn-outline-primary btn-sm col-lg-2"><i class="fas fa-arrow-left"></i></a>
            </div>
              <div class="card-body">
                <h4 style="margin-top: 20px; margin_left:300px">Uz</h4>
                <br>
                  <div class="form-group">
                      <label>Sarlavxa</label>
                      <input type="text" class="form-control form-control-sm" name="title_uz" required>
                  </div>
                  <div class="form-group">
                    <label>Tafsifi</label>
                    <input type="text" class="form-control form-control-sm" name="description_uz" required>
                </div>
                  <div class="form-group">
                      <label>Tekst</label>
                      <textarea class="summernote" name="body_uz"></textarea>
                  </div>
                <h4 style="margin-top: 20px; margin_left:300px">Ru</h4>
                <br>
                  <div class="form-group">
                      <label>Заголовок</label>
                      <input type="text" class="form-control form-control-sm" name="title_ru" required>
                  </div>
                  <div class="form-group">
                    <label>Описание</label>
                    <input type="text" class="form-control form-control-sm" name="description_ru" required>
                </div>
                  <div class="form-group">
                      <label>Текст</label>
                      <textarea class="summernote" name="body_ru"></textarea>
                  </div>
                 <h4 style="margin-top: 30px;">En</h4>
                 <br>
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control form-control-sm" name="title_en" required>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="form-control form-control-sm" name="description_en" required>
                </div>
                  <div class="form-group">
                    <label>Body</label>
                    <textarea class="summernote" name="body_en"></textarea>
                </div>
                <div class="form-group">
                    <label>Link</label>
                    <input type="text" class="form-control form-control-sm" name="link">
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select name="category_id" id="" class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name_uz }}</option>
                        @endforeach
                    </select>
                </div>
                  <div class="form-group">
                      <label>Faollik</label>
                      <select class="form-control" name="status">
                          <option value="1">Faol</option>
                          <option value="0">Faol emas</option>
                      </select>
                  </div>
                  <div class="form__imgUploader">
                    <div class="form__wrapper">
                        <div class="form__image">
                            <img src="" alt="" class="form__img">
                        </div>
                        <div class="formUploader__content">
                            <div class="formUploader__icon"><i class="fas fa-cloud-upload-alt"></i></div>
                            <div class="formUploader__text">Rasm kiriting !</div>
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
