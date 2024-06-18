<x-layout title="Create Category"><!-- I will pass data to the layout compoent using prop/ properties -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 ">
                    <h1 class="m-0">Add New Category</h1>
                </div>
                <!-- <div class="col-sm-6 a_tbdr text-right">
                    <a href="{{route('category.create')}}" class="btn btn-primary">Add New Category</a>
                </div> -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    @if (Session::has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                               <strong> {{ session::get('success') }} </strong>  
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                    @endif
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add New Category</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('category.store')}}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="cat_name">Category Name</label>
                                    <input name="category_name" type="text" class="form-control" id="cat_name" placeholder="Enter Category">
                                </div>
                                <div class="form-group">
                                    <label for="cat_desc">Description</label>
                                    <textarea rows="10" cols="" name="description" class="form-control" id="cat_desc" placeholder="Password"> </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</x-layout>