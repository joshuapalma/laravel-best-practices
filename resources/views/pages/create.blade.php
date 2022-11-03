@extends('layout.template')

@section('content')
    <div class="container p-5">
        <div class="row">
            <div class="col-md-6 ms-auto me-auto">
                <h6 class="fw-bold text-center">Add Information</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card w-50 m-auto">
                    <form action="{{ route('information.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                              <div class="col-md-12">
                                  <div class="mb-3">
                                      <label for="exampleFormControlInput1" class="form-label fw-bold">First Name</label>
                                      <input type="text" class="form-control" id="first-name" name="first_name" placeholder="First Name">
                                  </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                  <div class="mb-3">
                                      <label class="form-label fw-bold">Middle Name</label>
                                      <input type="text" class="form-control" id="middle-name" name="middle_name" placeholder="Middle Name">
                                  </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                  <div class="mb-3">
                                      <label class="form-label fw-bold">Last Name</label>
                                      <input type="text" class="form-control" id="last-name" name="last_name" placeholder="Last Name">
                                  </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                  <div class="mb-3">
                                      <label class="form-label fw-bold">Position</label>
                                      <input type="text" class="form-control" id="position" name="position" placeholder="Position">
                                  </div>
                              </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-success">Save</button>
                                    <a href="{{ route('information.view') }}" class="btn btn-warning">Back</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection