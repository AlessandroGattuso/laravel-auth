@extends('layouts.admin')
@section('content')
   <div class="container">
    <div class="row">
      <div class="col-12 my-5">
        <div class="d-flex justify-content-between">
          <h4>Elenco progetti</h4>
          <a href="{{route('admin.projects.create')}}" class="btn btn-sm btn-primary">Aggiungi</a>
        </div>
      </div>
      @if(session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
      @endif
      <div class="col-12">
          <table class="table table-striped">
            <thead>
              <th>Titolo</th>
              <th>Slug</th>
            </thead>
            <tbody>
              @foreach($projects as $project)
                <tr>
                  <td>{{$project->title}}</td>
                  <td>{{$project->slug}}</td>
                  <td></td>
                </tr>
              @endforeach
            </tbody>
          </table>
      </div>
    </div>
   </div>
@endsection