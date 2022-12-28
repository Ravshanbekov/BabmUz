 @extends('layouts.admin')

 @section('content')
    <div class="card col-lg-12">
        <div class="card-header">
            <h4 style="margin-top: 30px;">Ko'rish</h4>
        </div>
        <div class="pull-right">
            <a href="{{ route('admin.statistics.index') }}"
                class="btn btn-outline-primary btn-sm col-lg-2"><i class="fas fa-arrow-left"></i></a>
        </div>
        <div class="card-body">
            <h4 style="margin-top: 20px; margin_left:300px">Uz</h4>
            <br>
            <div class="form-group">
                <label>
                     <h6>Son:</h6>
                </label>
                {{ $statistic->number }}
            </div>
        <div class="form-group">
            <label>
                 <h6>Sarlavxa:</h6>
            </label>
            {{ $statistic->title_uz }}
        </div>
            <h4 style="margin-top: 20px; margin_left:300px">Ru</h4>
        <br>
            <div class="form-group">
                <label>
                     <h6>Заголовок:</h6>
                </label>
                {{ $statistic->title_ru }}
            </div>
            <h4 style="margin-top: 30px;">En</h4>
            <br>
            <div class="form-group">
                <label>
                     <h6>Title:</h6>
                </label>
                {{ $statistic->title_en }}
            </div>
            <div class="form-group">
                <label>
                    <h6>Faollik:</h6>
                </label>
                @if ($statistic->status == 1)
                <span class="badge badge-success">Faol </span>
                @else
                <span class="badge badge-danger">Faol emas </span>
                @endif
            </div>
            <img src="{{ $statistic->icon }}" width="250" alt="">
        </div>
    </div>
 @endsection



