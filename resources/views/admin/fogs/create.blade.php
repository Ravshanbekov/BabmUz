  @extends('layouts.admin')

  @section('content')
      <form action="{{ route('admin.fogs.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="card col-lg-12">
              <div class="card-header">
                  <h4 style="margin-top: 30px;">Qo'shish</h4>
              </div>
              <div class="pull-right">
                <a href="{{ route('admin.fogs.index') }}"
                    class="btn btn-outline-primary btn-sm col-lg-2"><i class="fas fa-arrow-left"></i></a>
            </div>
              <div class="card-body">
                  <div class="form-group">
                      <label>Sarlavha uz</label>
                      <input type="text" class="form-control form-control-sm" name="title_uz" required>
                  </div>
                  <div class="form-group">
                    <label>Tafsifi uz</label>
                    <input type="text" class="form-control form-control-sm" name="description_uz" required>
                </div><div class="form-group">
                      <label>Sarlavha ru</label>
                      <input type="text" class="form-control form-control-sm" name="title_ru" required>
                  </div>
                  <div class="form-group">
                    <label>Tafsifi ru</label>
                    <input type="text" class="form-control form-control-sm" name="description_ru" required>
                </div>
                <div class="form-group">
                      <label>Sarlavha en</label>
                      <input type="text" class="form-control form-control-sm" name="title_en" required>
                  </div>
                  <div class="form-group">
                    <label>Tafsifi en</label>
                    <input type="text" class="form-control form-control-sm" name="description_en" required>
                </div>
                <div class="form-group">
                    <label>Link</label>
                    <input type="text" class="form-control form-control-sm" name="link" required>
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
