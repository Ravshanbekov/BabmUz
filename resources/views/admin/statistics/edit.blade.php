 @extends('layouts.admin')

 @section('content')
     <form action="{{ route('admin.statistics.update', $statistic->id) }}" method="POST" enctype="multipart/form-data">
         @csrf
         @method('PUT')
         <div class="card col-lg-12">
             <div class="card-header">
                 <h4 style="margin-top: 30px;">Taxrirlash</h4>
             </div>
             <div class="pull-right">
                <a href="{{ route('admin.statistics.index') }}"
                    class="btn btn-outline-primary btn-sm col-lg-2"><i class="fas fa-arrow-left"></i></a>
            </div>
             <div class="card-body">
                <h4 style="margin-top: 20px; margin_left:300px">Uz</h4>
                <br>
                <div class="form-group">
                   <label>Son</label>
                   <input type="number" value="{{ $statistic->number }}" class="form-control form-control-sm" name="number" required>
                </div>
                 <div class="form-group">
                     <label>Sarlavxa</label>
                     <input type="text" value="{{ $statistic->title_uz }}" class="form-control form-control-sm" name="title_uz" required>
                 </div>
                <h4 style="margin-top: 20px; margin_left:300px">Ru</h4>
                <br>
                 <div class="form-group">
                     <label>Заголовок</label>
                     <input type="text" value="{{ $statistic->title_ru }}" class="form-control form-control-sm" name="title_ru" required>
                 </div>
                 <h4 style="margin-top: 30px;">En</h4>
                 <br>
                 <div class="form-group">
                    <label>Title</label>
                    <input type="text" value="{{ $statistic->title_en }}" class="form-control form-control-sm" name="title_en" required>
                </div>
                 <div class="form-group">
                     <label>Faollik</label>
                     <select name="status" value="{{ $statistic->status }}" class="form-control">{{ $statistic->status }}
                         <option {{ $statistic->status == 1 ? 'selected' : '' }} value="1">Faol</option>
                         <option {{ $statistic->status == 0 ? 'selected' : '' }} value="0">Faol emas</option>
                     </select>
                 </div>
                 <div class="form__imgUploader">
                    <div class="form__wrapper">
                        <div class="form__image">
                               <img src="{{ $statistic->icon }}" alt="" class="form__img">
                        </div>
                        <div class="formUploader__content">
                            <div class="formUploader__icon"><i class="fas fa-cloud-upload-alt"></i></div>
                            <div class="formUploader__text">Rasim kiriting !</div>
                        </div>
                        <div class="formUploader__cancel"><i class="fas fa-times"></i></div>
                        <div class="formUploader__fileName"><p>Fayl nomi</p></div>
                    </div>
                    <input type="file" class="imgUploader" accept=".jpg, .jpeg, .svg, .png" name="icon" id="customFile" hidden>
                    <button type="button" class="customBtn">Rasm tanlang</button>
                </div>
            </div>
             <div class="card-footer">
                <button type="submit" class="btn btn-outline-primary col-lg-1"><i class="fas fa-edit"></i></button>
            </div>
     </form>
     </div>
 @endsection
