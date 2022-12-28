 @extends('layouts.admin')

 @section('content')
    <div class="card col-lg-12">
        <div class="card-header">
            <h4 style="margin-top: 30px;">Ko'rish</h4>
        </div>
        <div class="pull-right">
            <a href="{{ route('admin.teams.index') }}"
                class="btn btn-outline-primary btn-sm col-lg-2"><i class="fas fa-arrow-left"></i></a>
        </div>
        <div class="card-body">
        <div class="form-group">
            <label>
                 <h6>Ism uz:</h6>
            </label>
            {{ $team->name_uz }}
        </div>
         <div class="form-group">
            <label>
                 <h6>Ism ru:</h6>
            </label>
            {{ $team->name_ru }}
        </div>
        <div class="form-group">
            <label>
                 <h6>Familiya uz:</h6>
            </label>
            {{ $team->lastname_uz }}
        </div>
          <div class="form-group">
            <label>
                 <h6>Familiya ru:</h6>
            </label>
            {{ $team->lastname_ru }}
        </div>
            <div class="form-group">
                <label>
                     <h6>Email:</h6>
                </label>
                {{ $team->email }}
            </div>
            <div class="form-group">
                <label>
                     <h6>Tel:</h6>
                </label>
                {{ $team->phone }}
            </div>
            <div class="form-group">
                <label>
                     <h6>Telegram:</h6>
                </label>
                {{ $team->telegram }}
            </div>
            <div class="form-group">
                <label>
                     <h6>Instagram:</h6>
                </label>
                {{ $team->instagram }}
            </div>
            <div class="form-group">
                <label>
                    <h6>Facebook:</h6>
                </label>
                {{ $team->facebook }}
            </div>
            <div class="form-group">
                <label>
                    <h6>Lavozim uz:</h6>
                </label>
                <span class="badge badge-primary">{{ $team->position_uz }}</span>
            </div>
              <div class="form-group">
                <label>
                    <h6>Lavozim ru:</h6>
                </label>
                <span class="badge badge-primary">{{ $team->position_ru }}</span>
            </div>
              <div class="form-group">
                <label>
                    <h6>Lavozim en:</h6>
                </label>
                <span class="badge badge-primary">{{ $team->position_en }}</span>
            </div>
             <div class="form-group">
                <label>
                    <h6>Check:</h6>
                </label>
                @if ($team->check == 'direktor')
                <span class="badge badge-success">Direktor </span>
                @else
                <span class="badge badge-success">Xodim </span>
                @endif
            </div>
            <div class="form-group">
                <label>
                    <h6>Faollik:</h6>
                </label>
                @if ($team->status == 1)
                <span class="badge badge-success">Faol </span>
                @else
                <span class="badge badge-danger">Faol emas </span>
                @endif
            </div>
            <img src="{{ $team->image }}" width="250" alt="">
        </div>
    </div>
 @endsection



