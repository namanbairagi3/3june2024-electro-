<x-layout>
    
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 a_tbdr">
                    <h1 class="m-0">All Units</h1>
                </div><!-- /.col -->
                <div class="col-sm-6 a_tbdr text-right">
                    <a href="{{route('brands.create')}}" class="btn btn-primary">Add New Unit</a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Units</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                          <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Logo(s)</th>
                                <th>Options</th>
                            </tr>
                          </thead>
                          <tbody>
                             
                          </tbody>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</x-layout>