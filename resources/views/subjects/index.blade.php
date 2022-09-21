@extends('layouts.app')
@section('content-header')
     <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-md-6">
          <h1 class="text-black">Matières</h1>
          </div>
        </div>
      </div>
 
@endsection
@section('content')
    <div class="p-3 bg-body rounded">
        <div class="container-fluid">
            <div class="card card-outline card-purple">

                <div class="card-header">
                    <h3 class="card-title">Liste des matières</h3>
                    <a class="btn btn-success float-right mr-4" href="{{ route('subjects.create') }}">
                        <i class="fa fa-plus"></i> Nouvelle entrée</a>
                </div>
            
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Code de la matière</th>
                                    <th scope="col">Nom de la matière</th>
                                    <th scope="col">Crédits</th>
                                    <th scope="col">Semestre</th>
                                    <th scope="col">UE</th>
                                    <th scope="col">Code de la classe</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subjects as $subject)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>{{ $subject->subject_code }}</td>
                                    <td>{{ $subject->subject_name }}</td>
                                    <td>{{ $subject->credits }}</td>
                                    <td>{{ $subject->semester }}</td>
                                    <td>{{ $subject->unit->unit_code }}</td>
                                    <td>{{ $subject->class->class_code }}</td>
                                    <td>
                                        <form action="{{ route('subjects.destroy', $subject->id) }}" method="POST">
                                            <a href="{{ route('subjects.edit', $subject->id) }}" class="btn btn-warning text-white btn-sm">
                                                <i class="fa fa-pen" ></i></a>
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