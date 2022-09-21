@extends('layouts.app')
@section('content-header')
     <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-md-6">
          <h1 class="text-black">Nouveau Campus</h1>
          </div>
        </div>
      </div>
 
@endsection
@section('content')

    <div class="p-3 bg-body rounded">
        <!-- Content Row -->
        <div class="container-fluid">
            <!-- Area Chart -->
            <div class="card card-purple card-outline col-md-8">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-purple">Nouveau Campus</h6>
                </div>
                <div class="card-body">
                    <form class="p-4" method="post" action="{{ route('campus.store') }}">
                        @csrf
                        <div class="form-row col-md-12 mb-2">
                            <label for="inputState">Responsable du Campus</label>
                            <select class="form-control" name="staff_id" required>
                                <option value="" hidden selected>Choisir le responsable</option>
                                @foreach ($staffs as $staff) 
                                    <option value="{{ $staff->id }}">{{ $staff->staff_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="name">Nom du Campus</label>
                                <input type="text" class="form-control" name="campus_name" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="campus_email" required>
                            </div>
                            
                        </div>
                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="phone">Téléphone</label>
                                <input type="number" class="form-control" name="campus_phone" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="location">Adresse</label>
                                <textarea type="text" class="form-control" name="campus_location" required></textarea>
                            </div>
                        </div>
                        <div class="box-footer text-right">
                            <button type="submit" class="btn btn-success mt-4"><i class="fa-solid fa-file-arrow-down"></i> Soumettre</button>&nbsp;&nbsp;
                            <a href="{{ route('campus.index') }}" class="btn btn-primary mt-4"><i class="fa-solid fa-arrow-left"></i> Retour</a>
                        </div>
                    </form>
                  
                </div>    
            </div>    
        </div>
    </div>   

@endsection




