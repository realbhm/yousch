@extends('layouts.app')

@section('content')

    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h3 class="border-bottom pb-2 mb-4">{{ $unit->unit_name }}</h3>

        <div class="container-fluid mt-5">
            <div class="card card-outline card-purple">

                <div class="card-header">
                    <h3 class="card-title">Details</h3>
                </div>
            
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nom des cours de l'unité</th>
                                    <th scope="col">Code des cours de l'unité</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $course)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>{{ $course->course_name }}</td>
                                    <td>{{ $course->course_code }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer text-right">
                        <a class="btn btn-primary float-right mr-4" href="{{ route('units.index') }}"><i class="fa-solid fa-arrow-left"></i> Retour</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection