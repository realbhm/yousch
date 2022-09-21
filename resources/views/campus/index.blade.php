@extends('layouts.app')
@section('content-header')
     <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-md-6">
          <h1 class="text-black">Campus</h1>
          </div>
        </div>
      </div>
 
@endsection
@section('content')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="container-fluid">
            <div class="card card-purple card-outline">
                <div class="card-header">
                    <h3 class="card-title">Liste des campus</h3>
                    <a class="btn btn-success float-right mr-4" href="{{ route('campus.create') }}"><i class="fa fa-plus"></i> Nouvelle entrée</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nom du Campus</th>
                                    <th>Responsable</th>
                                    <th>Adresse</th>
                                    <th>Téléphone</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($campus as $cmps)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>{{ $cmps->campus_name }}</td>
                                    <td>{{ $cmps->staff->staff_name }}</td>
                                    <td>{{ $cmps->campus_location }}</td>
                                    <td>{{ $cmps->campus_phone }}</td>
                                    <td>{{ $cmps->campus_email }}</td>
                                    <td>
                                        <form action="{{ route('campus.destroy', $cmps->id) }}" method="POST">
                                            <a href="{{ route('campus.edit', $cmps->id) }}" class="btn btn-warning btn-sm text-white"><i class="fa fa-pen" ></i></a>

                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Voulez-vous vraiment supprimer')"><i class="fa fa-trash" style="color: #fff;"></i></button>
                                           
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
        

    </div>

@endsection