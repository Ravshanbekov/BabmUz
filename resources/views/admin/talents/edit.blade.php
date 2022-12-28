 @extends('layouts.admin')

 @section('content')
 <form action="{{ route('admin.talents.update', $talent->id) }}" method="POST" enctype="multipart/form-data">
         @csrf
         @method('PUT')
         <div class="card col-lg-12">
             <div class="card-header">
                 <h4 style="margin-top: 30px;">Taxrirlash</h4>
             </div>
             <div class="pull-right">
                <a href="{{ route('admin.talents.index') }}"
                    class="btn btn-outline-primary btn-sm col-lg-2"><i class="fas fa-arrow-left"></i></a>
            </div>
             <div class="card-body">
                 <div class="form-group">
                     <label>Ism uz</label>
                     <input type="text" value="{{ $talent->name_uz }}" class="form-control form-control-sm" name="name_uz" required>
                 </div>
                 <div class="form-group">
                    <label>Familiya uz</label>
                    <input type="text" value="{{ $talent->lastname_uz }}" class="form-control form-control-sm" name="lastname_uz" required>
                 </div>
                 <div class="form-group">
                     <label>Maktab uz</label>
                     <input type="text" value="{{ $talent->school_uz }}" class="form-control form-control-sm" name="school_uz" required>
                 </div>
                 <div class="form-group">
                    <label>Fan uz</label>
                    <input type="text" value="{{ $talent->science_uz }}" class="form-control form-control-sm" name="science_uz" required>
                </div>
                <div class="form-group">
                     <label>Ism ru</label>
                     <input type="text" value="{{ $talent->name_ru }}" class="form-control form-control-sm" name="name_ru" required>
                 </div>
                 <div class="form-group">
                    <label>Familiya ru</label>
                    <input type="text" value="{{ $talent->lastname_ru }}" class="form-control form-control-sm" name="lastname_ru" required>
                 </div>
                 <div class="form-group">
                     <label>Maktab ru</label>
                     <input type="text" value="{{ $talent->school_ru }}" class="form-control form-control-sm" name="school_ru" required>
                 </div>
                 <div class="form-group">
                    <label>Fan ru</label>
                    <input type="text" value="{{ $talent->science_ru }}" class="form-control form-control-sm" name="science_ru" required>
                </div>
                <div class="form-group">
                    <label>Faollik</label>
                    <select name="category" value="{{ $talent->category }}" class="form-control">{{ $talent->category }}
                        <option {{ $talent->category == 1 ? 'selected' : '' }} value="1">Sovrindor</option>
                        <option {{ $talent->category == 0 ? 'selected' : '' }} value="0">Iqtidor</option>
                    </select>
                </div>
                 <div class="form__imgUploader">
                    <div class="form__wrapper">
                        <div class="form__image">
                               <img src="{{ $talent->image }}" alt="" class="form__img">
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
