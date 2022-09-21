@extends('layouts.app')

@section('content')

    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h3 class="border-bottom pb-2 mb-4">Modification</h3>

        <!-- Content Row -->
        <div class="container-fluid">
            <!-- Area Chart -->
            <div class="card card-purple card-outline">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-purple">Détails</h6>
                </div>

                <div class="card-body">
                    <form method="post" action="{{ route('assiduites.update', $assiduite->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Date</label>
                                <input type="date" class="form-control" name="date" value="{{ $assiduite->date }}">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="location">Heure</label>
                                <input type="time" class="form-control" name="time" value="{{ $assiduite->time }}">
                            </div>
                        </div>

                        <div class="form-row mt-4">
                            <div class="form-group col-md-6">
                                <label for="inputState">Justicatif</label>
                                <select id="inputState" class="form-control" name="justificatif" value="{{ $assiduite->justificatif }}">
                                    <option selected>Choisir...</option>
                                        <option value="1">Justifié</option>
                                        <option value="0">Non-justifié</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputState">Retard</label>
                                <select id="inputState" class="form-control" name="retard" value="{{ $assiduite->retard }}">
                                    <option selected>Choisir...</option>
                                        <option value="1">Oui</option>
                                        <option value="0">Non</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="box-footer text-right">
                            <button type="submit" class="btn btn-success mt-4"><i class="fa-solid fa-file-arrow-down"></i> Enregistrer</button>&nbsp;&nbsp;
                            <a href="{{ route('home') }}" class="btn btn-primary mt-4"><i class="fa-solid fa-arrow-left"></i> Retour</a>
                         </div>
   
                    </form>
                    <hr>
                </div>    
            </div>    
        </div>
    </div>   

@endsection




