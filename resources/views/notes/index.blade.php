@extends('layouts.app')
@section('content-header')
     <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-md-6">
          <h1 class="text-black">Notes</h1>
          </div>
        </div>
      </div>
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
     <div class="card card-purple card-outline">
        <div class="container-fluid" style="background: #eee;">
        <form action="{{route('findStudents')}}" method="POST"> 
         @csrf
         @method('POST')
          <div class="row" style="margin: 1%;">
            <div class="form-group col-md-3">
                <label for="campus">Campus</label>
                <span class="red">*</span>
                <select name="campus_id" class="form-control @error('campus_id') is-invalid @enderror" style="overflow-y: scroll;" required>
                  <option hidden="">Choisir...</option>
                  @foreach ($campuses as $campus)
                     <option value="{{$campus->id}}">{{$campus->campus_name}}</option>
                  @endforeach            
                </select>
              </div>
            <div class="form-group col-md-3">
              <label for="course">Parcours</label>
              <span class="red">*</span>
              <select name="course_id" class="form-control @error('course_id') is-invalid @enderror" style="overflow-y: scroll;" required>
                <option hidden="">Choisir...</option>
                @foreach ($courses as $course)
                   <option value="{{$course->id}}">{{$course->course_code}}</option>
                @endforeach            
              </select>
            </div>
            <div class="form-group col-md-3">
                <label for="classe">Classe</label>
                <span class="red">*</span>
                <select name="class_id" class="form-control @error('class_id') is-invalid @enderror" style="overflow-y: scroll;" required>
                  <option hidden="">Choisir...</option>
                  @foreach ($classes as $class)
                     <option value="{{$class->id}}">{{$class->class_name}}</option>
                  @endforeach            
                </select>
            </div>
            <div class="form-group col-md-3">
             <button type="submit" class="btn btn-primary" style="margin-top: 9%;">
                 <span class="fa fa-search"></span>  
               Rechercher
             </button>
            </div>
          </div>
          </form>
        </div>
  </div>
  </div>
  </section>
  <br>
    <div class="my-3 p-3 bg-body rounded">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3>
                        Listes des étudiants               
                    </h3>
                    {{-- <a class="btn btn-success float-right mr-4" href="{{ route('notes.create') }}"><i class="fa fa-plus"></i> Nouvelle entrée</a> --}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                            <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Code</th>
                                    <th>Nom(s)</th>
                                    <th>Prénom(s)</th>
                                    <th>Campus</th>
                                    <th>Parcours</th>
                                    <th>Classe</th>
                                    <th>Action</th>
                                    </tr>
                            </thead>
                            <tbody>
                              @if (!empty($students))
                                @foreach ($students as $student) 
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>{{ $student->student_code}}</td>
                                    <td>{{ $student->student_surname}}</td>
                                    <td>{{ $student->student_name }}</td>
                                    <td>{{ $student->campus->campus_name}}</td>
                                    <td>{{ $student->course->course_code}}</td>
                                    <td>{{ $student->class->class_name}}</td>
                                    <td>
                                        <a href="{{ route('notes.show', $student->id) }}" class="btn btn-success btn-sm" title="Entrer les notes ou voir les notes">
                                          <i class="fa-solid fa-plus"></i>
                                        </a>
                                     
                                    </td>
                                </tr>
                                @endforeach
                              @endif
     
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection