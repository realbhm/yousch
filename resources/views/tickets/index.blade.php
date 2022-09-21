@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css')}}">
@endsection
@section('content-header')
     <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-md-6">
          <h1 class="text-black">Tickets</h1>
          </div>
        </div>
      </div>
@endsection
@section('content')
    <div class=" p-3 bg-body rounded">
        <div class="container-fluid d-flex justify-content-center align-center">
            <div class="card card-outline card-purple col-md-12">
                <div class="card-header">
                    <h3 class="card-title">Liste des tickets</h3>
                    <a class="btn btn-success float-right mr-4" href="{{ route('tickets.create') }}"><i class="fa fa-plus"></i> Nouveau ticket</a>
                </div>
                <div class="pl-4">
                    <div class="table-responsive">
                           <div class="card-body">
                            @foreach ( $tickets as $ticket )
                            <blockquote class="d-flex border-start" style="border-left: 4px solid rgb(36, 90, 227); box-shadow: 0 0 1px rgb(0 0 0 / 13%), 0 1px 3px rgb(0 0 0 / 20%)">
                              <div class="col-md-8">
                                 <a href="{{ route('tickets.edit', $ticket->id) }}">
                                     <h3 class="text-purple text-uppercase">{{$ticket->conversation_subject}}</h3>
                                  </a>
                                <p class="fs-4">Crée le {{$ticket->created_at->format('d-m-Y')}}<cite title="Source Title"> à {{$ticket->created_at->format('H:i:s')}}</cite></p>
                              </div>
                              <div class="col-md-4 text-right">
                                <span class="badge badge-{{$ticket->is_closed ? 'success' : 'warning'}} mt-3 p-2" >
                                {{$ticket->is_closed ? 'Ticket fermé' : 'En cours de traitement'}}
                                </span>
                              </div>
                            </blockquote>
                            @endforeach
                          </div> 
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection