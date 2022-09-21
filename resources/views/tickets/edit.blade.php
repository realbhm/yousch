@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
     
    <div class="col-md-9">
      <div class="card card-purple card-outline">
        <div class="card-header">
          <h3 class=""><b>{{ $ticket->conversation_subject }}</b></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">

          <!-- /.mailbox-controls -->
          <div class="mailbox-read-message">
            
            @foreach ( $ticket->message as $message)
            
            <div class="direct-chat-msg">
                <div class="direct-chat-infos clearfix">
                  <span class="direct-chat-name float-left">{{ $message->user->email}}</span>
                  <span class="direct-chat-timestamp float-right"><p>{{ $message->created_at->diffForHumans()}}</p></span>
                </div>
                <!-- /.direct-chat-infos -->
                <img class="direct-chat-img" src="{{asset('img/user.png')}}" alt="Message User Image">
                <!-- /.direct-chat-img -->
                <div class="direct-chat-text">
                    <p>{{ $message->message_body }}</p>
                </div>
                <!-- /.direct-chat-text -->
              </div>
            @endforeach

          </div>
          <!-- /.mailbox-read-message -->
        </div>
        <!-- /.card-body -->
     
        <!-- /.card-footer -->
        <div class="card-footer d-flex justify-content-center align-center">
            <form action="{{ route('reply') }}" method="post">
                @csrf
                <input type="number" name="conversation_id" class="d-none" value="{{ $ticket->id }}">
                <div class="row ">
                    <textarea name="message_body" cols="80" rows="3" required></textarea>
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-success col-md-6"> Repondre <i class="fa fa-paper-plane"></i></button>
                    <a href="{{ route('tickets.index') }}" class="btn btn-primary col-md-4 m-2"><i class="fa-solid fa-arrow-left"></i> Retour</a>
                </div>
            </form>
        </div>
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
    <div class="col-md-3">
        <div class="card card-purple card-outline">
          <div class="card-header">
            <h3 class="card-title">Détails du ticket</h3>
          </div>
             <form action="{{ route('tickets.update',$ticket->id)}}" method="post">
                @csrf
                 @method('PATCH')
                  <div class="row card-body p-3">
                    <div class="col-md-12">
                        <h4 class="">Etat:</h4> 
                        <select name="is_done" class="form-control @error('is_done') is-invalid @enderror">
                          <option value="0">En cours de traitement</option>
                          <option value="1">Ticket fermé</option>
                        </select>
                    </div>
                    <div class="col-md-8">
                        <label for="service">Service à contacter</label>
                        <select name="service" class="form-control @error('service') is-invalid @enderror">
                          <option hidden="" value="{{ $ticket->service }}">{{ $ticket->service }}</option>
                          <option value="ESTIAM - Admissions">ESTIAM - Admissions</option>
                          <option value="ESTIAM - Campus Paris">ESTIAM - Campus Paris</option>
                          <option value="ESTIAM - Problème outils MyEstiam">ESTIAM - Problème outils MyEstiam</option>
                          <option value="ESTIAM - Relations entreprises">ESTIAM - Relations entreprises</option>
                          <option value="Groupe-IT">Groupe-IT</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success col-md-6 m-2"><i class="fa-solid fa-check"></i> Mettre à jour</button>
                  </div>
               </form>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
  </div>
  <!-- /.row -->
  </div>

@endsection