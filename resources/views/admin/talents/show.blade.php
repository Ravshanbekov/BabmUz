 @extends('layouts.admin')

 @section('content')
    <div class="card col-lg-12">
        <div class="card-header">
            <h4 style="margin-top: 30px;">Ko'rish</h4>
        </div>
        <div class="pull-right">
            <a href="{{ route('admin.talents.index') }}"
                class="btn btn-outline-primary btn-sm col-lg-2"><i class="fas fa-arrow-left"></i></a>
        </div>
        <div class="card-body">
        <div class="form-group">
            <label>
                 <h6>Ism uz:</h6>
            </label>
            {{ $talent->name_uz }}
        </div>
        <div class="form-group">
            <label>
                 <h6>Familiya uz:</h6>
            </label>
            {{ $talent->lastname_uz }}
        </div>
            <div class="form-group">
                <label>
                     <h6>Maktab uz:</h6>
                </label>
                {{ $talent->school_uz }}
            </div>
            <div class="form-group">
                <label>
                     <h6>Fan uz:</h6>
                </label>
                {{ $talent->science_uz }}
            </div>
                <div class="form-group">
            <label>
                 <h6>Ism ru:</h6>
            </label>
            {{ $talent->name_ru }}
        </div>
        <div class="form-group">
            <label>
                 <h6>Familiya ru:</h6>
            </label>
            {{ $talent->lastname_ru }}
        </div>
            <div class="form-group">
                <label>
                     <h6>Maktab ru:</h6>
                </label>
                {{ $talent->school_ru }}
            </div>
            <div class="form-group">
                <label>
                     <h6>Fan ru:</h6>
                </label>
                {{ $talent->science_ru }}
            </div>
    
            <div class="form-group">
                <label>
                    <h6>Kategoriya:</h6>
                </label>
                @if ($talent->category == 1)
                <span class="badge badge-success">Iqtidor </span>
                @else
                <span class="badge badge-primary">Sovrindor </span>
                @endif
            </div>
            <img src="{{ $talent->image }}" width="250" alt="">
        </div>
    </div>
 @endsection



