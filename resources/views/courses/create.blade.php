@extends('layouts.app')
@section('content-header')
     <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-md-6">
          <h1 class="text-black">Créer un nouveau parcours</h1>
          </div>
        </div>
      </div>
 
@endsection
@section('content')

    <div class="p-3 bg-body rounded">
        <!-- Content Row -->
        <div class="container-fluid">
            <!-- Area Chart -->
            <div class="card card-purple card-outline col-md-5">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-purple">Créer un nouveau parcours</h6>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('courses.store') }}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="code">Code du Parcours</label>
                                <input type="text" class="form-control" name="course_code" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Nom du Parcours</label>
                                <input type="text" class="form-control" name="course_name" required>
                            </div>
                        </div>
                        <div class="box-footer text-right">
                            <button type="submit" class="btn btn-success mt-4"><i class="fa-solid fa-file-arrow-down"></i> Soumettre</button>&nbsp;&nbsp;
                            <a href="{{ route('courses.index') }}" class="btn btn-primary mt-4"><i class="fa-solid fa-arrow-left"></i> Retour</a>
                        </div>
                    </form>
                 
                </div>    
            </div>    
        </div>
    </div>   

@endsection




