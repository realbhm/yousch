@extends('layouts.app')
@section('content-header')
     <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-md-6">
          <h1 class="text-black">Modifier l'unité d'enseignement</h1>
          </div>
        </div>
      </div>
 
@endsection
@section('content')

    <div class="my-3 p-3 bg-body rounded">
        <!-- Content Row -->
        <div class="container-fluid">
            <!-- Area Chart -->
            <div class="card card-purple card-outline col-6">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-purple">Détails</h6>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('units.update', $unit->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="name">Unité d'enseignement</label>
                                <input type="text" class="form-control" name="unit_name" value="{{ $unit->unit_name }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="code">code de l'unité</label>
                                <input type="text" class="form-control" name="unit_code" value="{{ $unit->unit_code }}">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputState">Cours de l'unité</label>
                                <select id="inputState" class="form-control" name="course_id" value="{{ $unit->course_id }}">
                                    <option selected>Choisir...</option>
                                    @foreach ($courses as $course) 
                                        <option value="{{ $course->id }}">{{ $course->course_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="box-footer text-right">
                            <button type="submit" class="btn btn-success mt-4"><i class="fa-solid fa-file-arrow-down"></i> Enregistrer</button>&nbsp;&nbsp;
                            <a href="{{ route('units.index') }}" class="btn btn-primary mt-4"><i class="fa-solid fa-arrow-left"></i> Retour</a>
                        </div>
                    </form>
                    <hr>
                </div>    
            </div>    
        </div>
    </div>   

@endsection




