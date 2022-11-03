@extends('layout.template')

@section('content')
    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-md-12 col-lg-12 mb-3">
                <a href="{{ route('information.create') }}" class="btn btn-success ms-auto">Add Information</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Middle Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Position</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse ($information as $row)
                            <tr>
                              <th scope="row">{{ $row->id }}</th>
                              <td>{{ $row->first_name }}</td>
                              <td>{{ $row->middle_name }}</td>
                              <td>{{ $row->last_name }}</td>
                              <td>{{ $row->position }}</td>
                              <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                  <button type="button" class="btn btn-danger">Left</button>
                                  <button type="button" class="btn btn-warning ms-1">Middle</button>
                                  <button type="button" class="btn btn-success ms-1">Right</button>
                                </div>
                              </td>
                            </tr>
                          @empty
                              <tr>
                                <td colspan="6">No Data Available</td>
                              </tr>
                          @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection