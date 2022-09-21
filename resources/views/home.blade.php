@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-black-50">Dashboard</h1>
         <div class="row mt-5">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$student_count}}</h3>

                <p class="text-uppercase">Etudiants</p>
              </div>
              <div class="icon">
                <i class="fa-solid fa-users"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$staff_count}}<sup style="font-size: 20px"></sup></h3>

                <p>Staffs</p>
              </div>
              <div class="icon">
                <i class="fa-solid fa-user-tie"></i>
              </div>
             
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$campus_count}}</h3>

                <p>Campus</p>
              </div>
              <div class="icon">
                <i class="fa-solid fa-school"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$course_count}}</h3>

                <p>Parcours</p>
              </div>
              <div class="icon">
                <i class="fa-solid fa-signs-post"></i>
              </div>
             
            </div>
          </div>
          <!-- ./col -->
        </div>
        <div class="row mt-5">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$classe_count}}</h3>

                <p>Classes</p>
              </div>
              <div class="icon">
                <i class="fa-solid fa-people-roof"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$subject_count}}<sup style="font-size: 20px"></sup></h3>

                <p>Matières</p>
              </div>
              <div class="icon">
                <i class="nav-icon fa-solid fa-list"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$unit_count}}</h3>

                <p>Unités d'enseignement</p>
              </div>
              <div class="icon">
                <i class="nav-icon fa-solid fa-list"></i>
              </div>
             
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$users_count}}</h3>

                <p>Utilisateurs</p>
              </div>
              <div class="icon">
                 <i class="fa-solid fa-users-cog"></i>
              </div>
             
            </div>
          </div>
          <!-- ./col -->
        </div>
    </div>
@endsection
