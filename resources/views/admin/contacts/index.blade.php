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
                    <h4>Murojatlar</h4>
                </div>
                @if (session('success3'))
                <center>
                    <div class="alert alert-danger alert-dismissible show  fade col-lg-6">
                        <div class="alert-body">
                            {{ session('success3') }} <i class="icon fas fa-check"></i></h5>
                        </div>
                    </div>
                </center>
            @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr style="text-align-last: center">
                                    <th scope="col">№</th>
                                    <th scope="col">Ism</th>
                                    <th scope="col">Familiya</th>
                                    <th scope="col">Telefon</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Murojat</th>
                                    <th scope="col">#</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($contacts as $contact)
                                    <tr style="text-align-last: center">
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->lastname }}</td>
                                        <td>{{ $contact->phone }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->text }}</td>
                                        <td>
                                            @can('contact-delete')
                                            <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST">
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
