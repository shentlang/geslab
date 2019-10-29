@extends("theme.$theme.layout")
@section('content')


        <section class="content">
                <section class="content">
                        <div class="row">
                          <div class="col-12">
                            <div class="card">
                             
                             
                              <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                            
                  
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title">listado de usuarios</h3>
                                <p class="float-right"><a href="#"  class="btn btn-outline-primary">nada</a></p>
                              </div>
                              <!-- /.card-header -->
                              <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                  <thead class="thead-dark">
                                  <tr>
                                    <th>identificador</th>
                                    <th>usuario</th>
                                    <th>email</th>
                                    <th>role</th>
                                    <th>acciones</th>
                                   

                                   
                                  </tr>
                                  </thead>
                                  <tbody>
                  @foreach ($users as $user)
                  <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->role->nombrerol}}</td>
                  <td></td>
                  </tr>
                  @endforeach                


                                </table>
                              </div>
                              <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.row -->
                      </section>
                      <!-- /.content -->
                    
        </section>
        
    
    @endsection

  
