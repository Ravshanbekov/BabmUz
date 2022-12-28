 @extends('layouts.admin')

 @section('content')
 <form action="{{ route('admin.teams.update', $team->id) }}" method="POST" enctype="multipart/form-data">
         @csrf
         @method('PUT')
         <div class="card col-lg-12">
             <div class="card-header">
                 <h4 style="margin-top: 30px;">Taxrirlash</h4>
             </div>
             <div class="pull-right">
                <a href="{{ route('admin.teams.index') }}"
                    class="btn btn-outline-primary btn-sm col-lg-2"><i class="fas fa-arrow-left"></i></a>
            </div>
             <div class="card-body">
                 <div class="form-group">
                     <label>Ism uz</label>
                     <input type="text" value="{{ $team->name_uz }}" class="form-control form-control-sm" name="name_uz" required>
                 </div>
                  <div class="form-group">
                     <label>Ism ru</label>
                     <input type="text" value="{{ $team->name_ru }}" class="form-control form-control-sm" name="name|_ru" required>
                 </div>
                 <div class="form-group">
                    <label>Familiya uz</label>
                    <input type="text" value="{{ $team->lastname_uz }}" class="form-control form-control-sm" name="lastname_uz" required>
                 </div>
                  <div class="form-group">
                    <label>Familiya</label>
                    <input type="text" value="{{ $team->lastname_ru }}" class="form-control form-control-sm" name="lastname" required>
                 </div>
                 <div class="form-group">
                     <label>Email</label>
                     <input type="email" value="{{ $team->email }}" class="form-control form-control-sm" name="email" required>
                 </div>
                 <div class="form-group">
                    <label>Tel</label>
                    <input type="number" placeholder="+998 ## ### ## ##" value="{{ $team->phone }}" class="form-control form-control-sm" name="phone" required>
                 </div>
                 <div class="form-group">
                    <label>Telegram</label>
                    <input type="text" placeholder="https://t.me/-----------" value="{{ $team->telegram }}" class="form-control form-control-sm" name="telegram" required>
                </div>
                <div class="form-group">
                    <label>Instagram</label>
                    <input type="text" placeholder="https://instagram.com/------------" value="{{ $team->instagram }}" class="form-control form-control-sm" name="instagram" required>
                </div>
                <div class="form-group">
                    <label>Facebook</label>
                    <input type="text" placeholder="https://facebook.com/-------------" value="{{ $team->facebook }}" class="form-control form-control-sm" name="facebook">
                </div>
               <div class="form-group">
                    <label>Lavozim uz</label>
                    <input type="text" value="{{ $team->position_uz }}" class="form-control form-control-sm" name="position_uz" required>
                 </div>
                  <div class="form-group">
                    <label>Lavozim ru</label>
                    <input type="text" value="{{ $team->position_ru }}" class="form-control form-control-sm" name="position_ru" required>
                 </div>
                  <div class="form-group">
                    <label>Lavozim en</label>
                    <input type="text" value="{{ $team->position_en }}" class="form-control form-control-sm" name="position_en" required>
                 </div>
                   <div class="form-group">
                     <label>Check</label>
                     <select name="check" value="{{ $team->check }}" class="form-control">{{ $team->check }}
                         <option {{ $team->check == 'direktor' ? 'direktor' : '' }} value="direktor">Direktor</option>
                         <option {{ $team->check == 'xodim' ? 'xodim' : '' }} value="xodim">Xodim</option>
                          <option {{ $team->check == 'bolimboshligi' ? 'bolimboshligi' : '' }} value="bolimboshligi">Bolimboshligi</option>
                     </select>
                 </div>
                 <div class="form-group">
                     <label>Faollik</label>
                     <select name="status" value="{{ $team->status }}" class="form-control">{{ $team->status }}
                         <option {{ $team->status == 1 ? 'selected' : '' }} value="1">Faol</option>
                         <option {{ $team->status == 0 ? 'selected' : '' }} value="0">Faol emas</option>
                     </select>
                 </div>
                 <div class="form__imgUploader">
                    <div class="form__wrapper">
                        <div class="form__image">
                               <img src="{{ $team->image }}" alt="" class="form__img">
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
