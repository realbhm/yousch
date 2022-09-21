@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card rounded col-md-8">
        <div class="card-body register-card-body">
              <h3 class="text-center">Modifier l'utilisateur</h3>

            <form method="post" action="{{ route('users.store') }}">
                @csrf

                <div class="input-group mb-3">
                    <input type="text"
                           name="name"
                           class="form-control @error('name') is-invalid @enderror"
                           value="{{ $user->name }}"
                           readonly>
           
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <input type="email"
                           name="email"
                           value="{{ $user->email }}"
                           class="form-control @error('email') is-invalid @enderror"
                           readonly>
                  
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="input-group mb-3">
                     <select class="form-control" name="role[]" id="role" multiple="multiple">
                        {{-- Display all role names of the user --}}
                                @foreach ($user->roles as $role)
                                <option value="{{ $role->id }}" selected>{{ $role->name }}</option> {{ $role->name }}
                                @endforeach
                                @foreach($rolesAll as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                     </select>
                </div>



                <div class="row">
                    <!-- /.col -->
                    <div class="col-8">
                        <button type="submit" class="btn btn-warning btn-block">Réinitialiser le mot de passe</button>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-success btn-block"> <i class="fa-solid fa-check"></i> Validé</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->

    <!-- /.form-box -->
</div>
<!-- /.register-box -->

@endsection