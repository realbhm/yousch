@extends('layouts.app')
@section('content-header')
     <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-md-6">
          <h1 class="text-black">Parcours</h1>
          </div>
        </div>
      </div>
 
@endsection
@section('content')
    <div class=" p-3 bg-body rounded shadow-sm">
        <div class="container-fluid">
            <div class="card card-outline card-purple">
                <div class="card-header">
                    <h3 class="card-title">Liste des parcours</h3>
                    <a class="btn btn-success float-right mr-4" href="{{ route('courses.create') }}">
                        <i class="fa fa-plus"></i> Nouvelle entrée</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Code</th>
                                    <th scope="col">Nom du Parcours</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $course)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>{{ $course->course_code }}</td>
                                    <td>{{ $course->course_name }}</td>
                                    <td>
                                        <form action="{{ route('courses.destroy', $course->id) }}" method="POST">
                                            <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning text-white btn-sm"><i class="fa fa-pen" ></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Voulez-vous vraiment supprimer')">
                                                <i class="fa fa-trash" style="color: #fff;"></i></button>
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

@endsection
