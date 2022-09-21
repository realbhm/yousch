@extends('layouts.app')
@section('styles')
 <!-- fullCalendar -->
  <link rel="stylesheet" href="../plugins/fullcalendar/main.css">
@include('layouts.datatablestyles')
		<!-- Jquery confirm css -->
		<link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css')}}">
@endsection
@section('content-header')
     <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-md-6">
          <h1 class="text-black">Plannings</h1>
          </div>
        </div>
      </div>
 
@endsection
@section('content')
    <div class="container-fluid">
        <div class="container-fluid mt-3">
        <div class="card card-outline card-purple">
              <div class="card-header">
                <h3 class="card-title"><b> Liste des étudiants</b></h3>
              </div>
              <div class="container-fluid m-3">
              <a class="btn btn-success float-right mr-4" href="{{ route('students.create') }}"><i class="fa fa-plus"></i> Nouvelle entrée</a>
   
              </div>      
              <div class="card-body">
                  <table class="table table-bordered table-striped" id="datatable">
                    <thead>
                    <tr>
                    <th>#</th>
                    <th>Code</th>
                    <th>Nom(s)</th>
                    <th>Prénom(s)</th>
                    <th>Email</th>
                    <th>Date de Naissance</th>
                    <th>Lieu de Naissance</th>
                    <th>Téléphone</th>
                    <th>Campus</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                  </table>
              </div>
        </div>
    </div>
    </div>
@endsection
@section('scripts')
@include('layouts.datatablescripts')
<script src="{{asset('dist/js/delete-confirm.js')}} "></script>
	<!-- Jquery confirm js -->
	<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js')}}"></script>

@endsection