@extends('layouts.app')
@section('content-header')
     <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-md-6">
          <h1 class="text-black">Nouveau Ticket</h1>
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
                    <h6 class="m-0 font-weight-bold text-purple">Envoyer un ticket</h6>
                </div>
                <div class="card-body">
                    <form class="p-4" method="post" action="{{ route('tickets.store') }}">
                        @csrf
                        <div class="form-row col-md-12 mb-2">
                            <label for="user">Demandeur</label>
                             <select type="text" class="form-control" name="user_one"  readonly>
                                <option value="{{ Auth::user()->id }}">{{ Auth::user()->email }}</option>
                              </select>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col-md-12">
                                <label for="object">Objet</label>
                                <input type="text" class="form-control @error('object') is-invalid @enderror" name="object">
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col-md-12">
                                <label for="service">Service à contacter</label>
                                <select name="service" class="form-control @error('service') is-invalid @enderror">
                                  <option hidden="" value="">...</option>
                                  <option value="ESTIAM - Admissions">ESTIAM - Admissions</option>
                                  <option value="ESTIAM - Campus Paris">ESTIAM - Campus Paris</option>
                                  <option value="ESTIAM - Problème outils MyEstiam">ESTIAM - Problème outils MyEstiam</option>
                                  <option value="ESTIAM - Relations entreprises">ESTIAM - Relations entreprises</option>
                                  <option value="Groupe-IT">Groupe-IT</option>
                                </select>
                            </div>
                            
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-md-12">
                                <label for="location">Description</label>
                                <textarea type="text" class="form-control @error('message_body') is-invalid @enderror" name="message_body" cols="14" rows="8"></textarea>
                            </div>
                        </div>
                        <div class="mb-2">
                          <input type="file" class="form-control">
                       </div>
                        <div class="box-footer text-right">
                            <button type="submit" class="btn btn-success mt-4"><i class="fa-solid fa-file-arrow-down"></i> Soumettre</button>&nbsp;&nbsp;
                            <a href="{{ route('tickets.index') }}" class="btn btn-primary mt-4"><i class="fa-solid fa-arrow-left"></i> Retour</a>
                        </div>
                    </form>
                  
                </div>    
            </div>    
        </div>
    </div>   

@endsection




