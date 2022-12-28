  @extends('layouts.admin')

  @section('content')
      <form action="{{ route('admin.talents.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="card col-lg-12">
              <div class="card-header">
                  <h4 style="margin-top: 30px;">Qo'shish</h4>
              </div>
              <div class="pull-right">
                <a href="{{ route('admin.talents.index') }}"
                    class="btn btn-outline-primary btn-sm col-lg-2"><i class="fas fa-arrow-left"></i></a>
            </div>
              <div class="card-body">
                  <div class="form-group">
                      <label>Ism uz</label>
                      <input type="text" class="form-control form-control-sm" name="name_uz" required>
                  </div>
                  <div class="form-group">
                    <label>Familiya uz</label>
                    <input type="text" class="form-control form-control-sm" name="lastname_uz" required>
                </div>
                <div class="form-group">
                    <label>Maktab uz</label>
                    <input type="text" class="form-control form-control-sm" name="school_uz" required>
                </div>
                <div class="form-group">
                    <label>Fan uz</label>
                    <input type="text" class="form-control form-control-sm" name="science_uz" required>
                </div>
                 <div class="form-group">
                      <label>Ism ru</label>
                      <input type="text" class="form-control form-control-sm" name="name_ru" required>
                  </div>
                  <div class="form-group">
                    <label>Familiya ru</label>
                    <input type="text" class="form-control form-control-sm" name="lastname_ru" required>
                </div>
                <div class="form-group">
                    <label>Maktab ru</label>
                    <input type="text" class="form-control form-control-sm" name="school_ru" required>
                </div>
                <div class="form-group">
                    <label>Fan ru</label>
                    <input type="text" class="form-control form-control-sm" name="science_ru" required>
                </div>
                <div class="form-group">
                    <label>Faollik</label>
                    <select class="form-control" name="category">
                        <option value="1">Sovrindor</option>
                        <option value="0">Iqtidor</option>
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
