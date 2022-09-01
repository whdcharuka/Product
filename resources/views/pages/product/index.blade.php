@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="page-title">Add New Product</h1>
            </div>
            <div class="col-lg-12">

                <form action="{{ route('product.store') }}" method="post" enctype="multipart/form">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8">
                        </div>
                    </div>


            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-8">
                  <div class="form-outline mb-4">
                    <input class="form-control" name="name" type="text" placeholder="Name">
                </div>
            </div>

                  </div>
                  <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-8">
                  <div class="form-outline mb-4">
                    <input class="form-control" name="image" type="text" placeholder="Image">
                  </div>
                </div>-
            </div>

                  <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-8">
                  <div class="form-outline mb-4">
                    <input class="form-control" name="price" type="text" placeholder="Price">
                </div>
            </div>
        </div>


                <div class="col-lg-4">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="submit" class="btn btn-primary me-md-2"
                                    data-type="button"><i class="fa fa-plus"></i> Add New</button>
                        </div>
                    </div>

                </form>

            </div>

<!--table-->
<div class="col-l-12">
    <section class="pb-5 header text-center">
        <div class="container py-5 text-white">
            <header class="py-5">

            </header>

            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form">
                @csrf
                <div class="row">
                    <div class="col-lg-7 mx-auto">

                        <div class="card border-0 shadow">
                            <div class="card-body p-5">

                                <!-- Responsive table -->
                                <div class="table-responsive">
                                    <table class="table m-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Product ID</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Image</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($tasks as $key => $task)
                                            <tr>
                                                <th scope="row">{{ $key++ }}</th>
                                                <td>{{ $task->name }}</td>
                                                <td><img src="..." class="img-thumbnail" alt="..."></td>
                                                <td>{{ $task->price }}</td>
                                                <td>
                                                    @if($task->status == 0)
                                                        <span class="badge bg-danger">Inactive</span>
                                                    @else($task->status == 1)
                                                        <span class="badge bg-success">Active</span>
                                                    @endif
                                                </td>

                                                <td>
                                                        <a href="{{ route('product.view', $task->id) }}"
                                                            <button class="btn btn-warning btn-sm rounded-1" type="button" data-toggle="tooltip" data-placement="top" title="View">
                                                                <i class="fa fa-table"></i></a>
                                                            </button>

                                                        <a href="{{ route('product.view', $task->id) }}"
                                                            <button class="btn btn-success btn-sm rounded-1" type="button" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="fa fa-edit"></i></a>
                                                            </button>


                                                        <a href="{{ route('product.delete', $task->id) }}"
                                                            <button class="btn btn-danger btn-sm rounded-1" type="button" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class="fa fa-trash"></i></a>
                                                            </button>

                                                    </ul>
                                                </td>
                                            </td>
                                            </tr>
                                           @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>

</div>
</div>
        </div>
    </div>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                  </div>
                </div>
              </div>
            </div>

        @endsection

        @push('css')
            <style>
                .page-title {
                    padding-top: 5vh;
                    font-size: 3rem;
                    color: rgb(0, 0, 0)
                }

                body {
                    background: #9A616D;
                    min-height: 100vh;
                }
            </style>
        @endpush
