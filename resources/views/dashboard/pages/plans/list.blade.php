@extends('dashboard.layout.layout')

@section('page-title', 'list of emails')

@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>List Of Emails</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">emails</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('plans.create.view') }}" class="btn btn-dark"><i class="bi bi-plus-circle"></i>Add New Email</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="{{ route('plans.export') }}" class="btn btn-dark"><i class="bi bi-box-arrow-up-right"></i>Export all emails</a>
                            </div>
                            <style>.table-custom{
                                width:80%;
                                margin-left:0 ;
                            }</style>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered table-custom">
                                    <thead>
                                        <tr style="text-align: center">
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody style="text-align: center">
                                        @foreach ($plans as $plan )
                                         <tr>
                                           <td>{{  $loop->index + $plans->firstItem()  }}</td>
                                           <td>{{ $plan->name }}</td>
                                           <td>{{ $plan->email }}</td>
                                           <td >
                                            <div class="d-flex align-items-center"  >
                                                   <a href="{{ route('plans.edit.view', ['id' => $plan->id]) }}"
                                                       class="btn btn-outline-warning btn-xs me-2">
                                                       <i class="bi bi-pencil-square"></i>
                                                   </a>
                                                   &nbsp;&nbsp;&nbsp;&nbsp;
                                                   <form action="{{ route('plans.delete', ['id' => $plan->id]) }}" method="POST" class="delete-form">
                                                       @csrf
                                                       @method('DELETE')
                                                       <button type="button" class="btn btn-outline-danger btn-xs delete-button">
                                                           <i class="bi bi-trash3"></i>
                                                       </button>
                                                   </form>
                                               </div>
                                           </td>
                                         </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                <ul class="pagination pagination-sm m-0 float-right">
                                    {!! $plans->links('pagination::bootstrap-5') !!}
                                </ul>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    {{-- Include SweetAlert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const deleteButtons = document.querySelectorAll('.delete-button');
            deleteButtons.forEach(button => {
                button.addEventListener('click', function (e) {
                    e.preventDefault();
                    const form = this.closest('.delete-form');
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'error',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            
                            Swal.fire({
      title: "Deleted!",
      text: "Your file has been deleted.",
      icon: "success"
    });
    form.submit();
                        }
                    });
                });
            });
        });
    </script>
@endsection