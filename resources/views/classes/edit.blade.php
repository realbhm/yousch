@extends('layouts.app')

@section('content')

    <div class="my-3 p-3 bg-body rounded">
        <h3 class="border-bottom pb-2 mb-4">Modifier la classe</h3>

        <!-- Content Row -->
        <div class="container-fluid">
            <!-- Area Chart -->
            <div class="card card-purple card-outline col-md-5">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-purple">Détails</h6>
                </div>

                <div class="card-body">
                    <form method="post" action="{{ route('classes.update', $classe->id) }}">
                        @csrf
                        @method('PATCH')
                   
                            <div class="form-group col-md-10">
                                <label for="name">Nom de la classe</label>
                                <input type="text" class="form-control" name="class_name" value="{{ $classe->class_name }}" required>
                            </div>

                            <div class="form-group col-md-10">
                                <label for="code">Code de la classe</label>
                                <input type="text" class="form-control" name="class_code" value="{{ $classe->class_code }}" required>
                            </div>
                            <div class="form-group col-md-10">
                                <label for="inputState">Campus</label>
                                <select id="inputState" class="form-control @error('campus_id') is-invalid @enderror" name="campus_id">
                                    <option value="" hidden="hidden" selected>Choisir...</option>
                                    @foreach ($campus as $cmps) 
                                        <option value="{{ $cmps->id }}">{{ $cmps->campus_name}}</option>
                                    @endforeach
                                </select>
                              </div>

                        <div class="box-footer text-right">
                            <button type="submit" class="btn btn-success mt-4"><i class="fa-solid fa-file-arrow-down"></i> Enregistrer</button>&nbsp;&nbsp;
                            <a href="{{ route('classes.index') }}" class="btn btn-primary mt-4"><i class="fa-solid fa-arrow-left"></i> Retour</a>
                        </div>
                    </form>
                    <hr>
                </div>    
            </div>    
        </div>
    </div>   

@endsection

