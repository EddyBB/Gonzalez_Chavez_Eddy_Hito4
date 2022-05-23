@extends('layouts.app')

@section('template_title')
    Tripulacion
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tripulacion') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tripulacions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Id Tripulante</th>
										<th>Id Usuario</th>
										<th>Id Crucero</th>
										<th>Funcion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tripulacions as $tripulacion)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tripulacion->id_tripulante }}</td>
											<td>{{ $tripulacion->id_usuario }}</td>
											<td>{{ $tripulacion->id_crucero }}</td>
											<td>{{ $tripulacion->funcion }}</td>

                                            <td>
                                                <form action="{{ route('tripulacions.destroy',$tripulacion->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tripulacions.show',$tripulacion->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tripulacions.edit',$tripulacion->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tripulacions->links() !!}
            </div>
        </div>
    </div>
@endsection
