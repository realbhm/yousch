@extends('layouts.app')
@section('content-header')
     <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-md-6">
          <h1 class="text-black">Assiduité</h1>
          </div>
        </div>
      </div>
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
     <div class="card card-purple card-outline">
        <div class="container-fluid" style="background: #eee;">
        <form action="{{route('findStudentsA')}}" method="POST"> 
         @csrf
         @method('POST')
          <div class="row" style="margin: 1%;">
            <div class="form-group col-md-3">
                <label for="campus">Campus</label>
                <span class="red">*</span>
                <select name="campus_id" class="form-control @error('campus_id') is-invalid @enderror" style="overflow-y: scroll;" required>
                  <option hidden="">Choisir...</option>
                  @foreach ($campuses as $campus)
                     <option value="{{$campus->id}}">{{$campus->campus_name}}</option>
                  @endforeach            
                </select>
              </div>
            <div class="form-group col-md-3">
              <label for="course">Parcours</label>
              <span class="red">*</span>
              <select name="course_id" class="form-control @error('course_id') is-invalid @enderror" style="overflow-y: scroll;" required>
                <option hidden="">Choisir...</option>
                @foreach ($courses as $course)
                   <option value="{{$course->id}}">{{$course->course_code}}</option>
                @endforeach            
              </select>
            </div>
            <div class="form-group col-md-3">
                <label for="classe">Classe</label>
                <span class="red">*</span>
                <select name="class_id" class="form-control @error('class_id') is-invalid @enderror" style="overflow-y: scroll;" required>
                  <option hidden="">Choisir...</option>
                  @foreach ($classes as $class)
                     <option value="{{$class->id}}">{{$class->class_name}}</option>
                  @endforeach            
                </select>
            </div>
            <div class="form-group col-md-3">
             <button type="submit" class="btn btn-primary" style="margin-top: 9%;">
                 <span class="fa fa-search"></span>  
               Rechercher
             </button>
            </div>
          </div>
          </form>
        </div>
  </div>
  </div>
  </section>
  <br>
    <div class="my-2 p-3 bg-body rounded">
        <div class="container-fluid">
            <div class="card card-outline card-purple">
                <div class="card-header">
                    <h3>
                        Listes des étudiants               
                    </h3>
                    {{-- <a class="btn btn-success float-right mr-4" href="{{ route('notes.create') }}"><i class="fa fa-plus"></i> Nouvelle entrée</a> --}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped"  width="100%" cellspacing="0">
                            <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Nom(s) & Prénom(s)</th>
                                    <th>Campus</th>
                                    <th>Classe</th>
                                    <th>Assiduité Statut</th>
                                    </tr>
                            </thead>
                            <tbody>
                              @if (!empty($students))
                                @foreach ($students as $student) 
                                <tr>
                                    <input type="text" name="student_{{ $student->id}}" class="d-none">
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>{{ $student->student_surname}} {{ $student->student_name }}</td>
                                    <td>{{ $student->campus->campus_name}}</td>
                                    <td>{{ $student->class->class_name}}</td>
                                    <td>
                                       <a href="#" class="btn btn-warning btn-sm update" title="choisir le statut" data-studentid="" data-toggle="modal" data-target="#edit-note">
                                          <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                              @endif
                         </form>  
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
<!-- =========================MODAL EDIT============================== -->
<div class="modal fade" id="edit-note">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header purple">
        <h4 class="modal-title text-white">Le statut de l'étudiant</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color: #fff;">&times;</span>
        </button>
      </div>
      <form class="editform" method="post"> 
      <div class="modal-body">
          @csrf
          @method('PATCH')
            <div class="col-md-12">
                
                  <input type="numbers" id="studentId" name="student_id"  style="display: none;">
                     <div class="form-group ">
                            <label for="hour">Heure</label>
                            <span class="red">*</span>
                            <input type="time" name="hour" class="form-control @error('hour') is-invalid @enderror" required>
                         
                          </div>
                
                  <div class="form-group">
                    <label for="subject_id">Matière</label>
                          <span class="red">*</span>
                          <select name="subject_id" class="form-control @error('subject_id') is-invalid @enderror" required>
                            <option hidden="" value="">Choisir...</option>
                            @foreach ($subjects as $sub)
                               <option value="{{$sub->id}}">{{$sub->subject_code}}</option>
                            @endforeach            
                          </select>
                </div>
                <div class="form-group">
                    <label for="subject_id">Statut</label>
                          <span class="red">*</span>
                                      <select class="form-control" name="status">
                                        <option>Présent(e)</option>
                                        <option>Abscent(e)</option>
                                        <option>Abscence justifié</option>
                                        <option>Abscence non justifié</option>
                                      </select>
                            
                </div>
            </div>
      </div>
      <div class="modal-footer justify-content-right">
        <button type="submit" id="updateNote" class="btn btn-success"><i class="fa-solid fa-check"></i> Valider</button>
      </div>
    </form>
    </div>
    <!-- /.modal-content -->
  </div>
</div>
<!-- /.modal -->
<!-- ================================================================= -->
@endsection
@section('scripts')
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap4.js"></script>
<!-- Toastr -->
<script src="../../plugins/toastr/toastr.min.js"></script>
<!-- Select2 -->
<script src="../plugins/select2/js/select2.full.min.js"></script>
<!-- printPage -->
<script src="../../dist/js/jquery.printPage.js"></script>
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- page script -->
<script type="text/javascript">
  $(document).ready(function(){
  $('.btnprn').printPage();
  });
  </script>
<script>
  $(function () {
    $("#example1").DataTable();
    $("#toast-container").fadeOut(12000);
  });
</script>
<script>
  $(function () {
    //update note logic
    $(".update").on("click", function(){
        var studentId = $(this).data('studentid');

        $("#newMark").val(note);
        $("#noteIdnew").val(noteId);

      $(".editform").attr("action","{{route('notes.update', 8)}}");
      $("#edit-note").modal("show");
    });
  });
</script>
@endsection