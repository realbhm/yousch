@extends('layouts.app')

@section('content-header')
     <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-md-6">
            <h1>Profile de {{$user->student_name}} {{$user->student_surname}}</h1>
          </div>
        </div>
      </div>
@endsection
@section('content')
<div class="container-fluid">
        <div class="row m-1">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-purple card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{asset('uploads/students')}}/{{$user->avatar}}"
                       alt="Student profile picture">
                </div>
                <h3 class="profile-username text-center">{{$user->student_name}} {{$user->student_surname}}</h3>
                <p class="text-muted text-center">{{$user->student_code}}</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card card-outline card-purple">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Informations Personnelles</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Informations de Connexion</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                        <div>
                          <table class="table table-bordered table-striped" style="margin-top: 20px;">
                            <tbody>
                               <tr>
                                <td width="0%">
                                  <strong>Nom(s)</strong>
                                </td>
                                <td>{{$user->student_surname}}</td>
                              </tr>
                                <tr>
                                <td width="30%">
                                  <strong>Prénom(s)</strong>
                                </td>
                                <td>{{$user->student_name}}</td>
                              </tr>
                                <tr>
                                <td width="30%">
                                  <strong>Sexe</strong>
                                </td>
                                <td>{{$user->student_sexe}}</td>
                              </tr>
                              <tr>
                                <td width="30%">
                                  <strong>Date de naissance</strong>
                                </td>
                                <td>{{date("d/m/Y", strtotime($user->student_dob))}}</td>
                              </tr>
                                <tr>
                                <td width="30%">
                                  <strong>Lieu de naissance</strong>
                                </td>
                                <td>{{$user->student_pob}}</td>
                              </tr>
                                <tr>
                                <td width="30%">
                                  <strong>Email</strong>
                                </td>
                                <td>{{$user->student_email}}</td>
                              </tr>
                               <tr>
                                <td width="30%">
                                  <strong>Téléphone</strong>
                                </td>
                                <td>{{$user->student_phone}}</td>
                              </tr>
                                <tr>
                                <td width="30%">
                                  <strong>Adresse</strong>
                                </td>
                                <td>{{$user->student_adress}}</td>
                              </tr>
                                <tr>
                                <td width="30%">
                                  <strong>Campus</strong>
                                </td>
                                <td>{{$user->campus->campus_name}}</td>
                              </tr> 
                              <tr>
                                <td width="30%">
                                  <strong>Classe</strong>
                                </td>
                                <td>{{$user->class->class_name}}</td>
                              </tr> 
                               </tbody>
                          </table>
                        </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                            <div>
                      <form method="POST" action="{{ route('userUpdate',$user->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group mt-3">
                          <label for="inputSkills" class="col-sm-12 col-form-label">Mot de passe actuel</label>
                          <div class="col-sm-12">
                            <input type="password" class="form-control @error('password_actuel') is-invalid @enderror" name="password_actuel" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputSkills" class="col-sm-12 col-form-label">Nouveau Mot de passe</label>
                          <div class="col-sm-12">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="inputSkills" class="col-sm-12 col-form-label">Confirmer le Mot de passe</label>
                          <div class="col-sm-12">
                            <input id="password-confirm" type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" required>
                          </div>
                        </div>
                        <div class="form-group mt-5">
                          <div class=" col-sm-12">
                            <button type="submit" class="btn btn-success float-right"><span class="fa fa-check"></span> Valider</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
@endsection
