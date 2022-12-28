@extends('layouts.admin')

@section('css')
    <link rel="stylesheet" href="/assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet" href="/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Iqtidorlilar</h4>
                </div>
                @if (session('success1'))
                <center>
                    <div class="alert alert-success alert-dismissible show  fade col-lg-6">
                        <div class="alert-body">
                            {{ session('success1') }} <i class="icon fas fa-check"></i></h5>
                        </div>
                    </div>
                </center>
            @elseif (session('success2'))
                <center>
                    <div class="alert alert-info alert-dismissible show fade col-lg-6">
                        <div class="alert-body">
                            {{ session('success2') }} <i class="icon fas fa-check"></i></h5>
                        </div>
                    </div>
                </center>
            @elseif (session('success3'))
                <center>
                    <div class="alert alert-danger alert-dismissible show fade col-lg-6">
                        <div class="alert-body">
                            {{ session('success3') }} <i class="icon fas fa-check"></i></h5>
                        </div>
                    </div>
                </center>
            @endif

                @can('talent-create')
                <a href="{{ route('admin.talents.create') }}"
                    class="btn btn-outline-success btn-sm col-lg-2"><i class="fas fa-plus"></i></a>
                @endcan
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr style="text-align-last: center">
                                    <th scope="col">№</th>
                                    <th scope="col">Rasm</th>
                                    <th scope="col">Ism</th>
                                    <th scope="col">Familiya</th>
                                    <th scope="col">Maktab</th>
                                    <th scope="col">Fan</th>
                                    <th scope="col">Kategoriya</th>
                                    <th scope="col">#</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($talents as $talent)
                                    <tr style="text-align-last: center">
                                        <th>{{ $loop->iteration }}</th>
                                        <td><img src="{{ $talent->image }}" width="150"></td>
                                        <td>{{ $talent->name_uz }}</td>
                                        <td>{{ $talent->lastname_uz }}</td>
                                        <td>{{ $talent->school_uz }}</td>
                                        <td>{{ $talent->science_uz }}</td>
                                        <td>
                                            @if ($talent->category == 1)
                                                <span class="badge badge-success">Sovrindor</span>
                                            @else
                                                <span class="badge badge-primary">Iqtidor</span>
                                            @endif
                                        </td>
                                        <td>
                                            @can('talent-edit')
                                            <a style="margin-top: 15px" class="btn btn-info btn btn-block btn-info btn-sm"
                                                href="{{ route('admin.talents.edit', $talent->id) }}"><i
                                                    class="far fa-edit text-white"></i></a>
                                            @endcan
                                            @can('talent-list')
                                            <a class="btn btn-secondary btn btn-block btn-secondary btn-sm"
                                                href="{{ route('admin.talents.show', $talent->id) }}"><i
                                                    class="fas fa-eye text-white"></i></a>
                                            @endcan
                                            @can('talent-delete')
                                            <form action="{{ route('admin.talents.destroy', $talent->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button style="margin-top: 8px;" type="submit"
                                                    class="btn btn-block btn-danger btn-sm"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            @endcan
                                        </td>
                                        </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="/assets/bundles/datatables/datatables.min.js"></script>
    <script src="/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="/assets/bundles/jquery-ui/jquery-ui.min.js"></script>
    <script src="/assets/js/page/datatables.js"></script>
@endsection
