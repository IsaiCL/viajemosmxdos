@extends('layouts.app')

@section('template_title')
    Tour
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tour') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tours.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Categorías:</th>&nbsp;
										<th>Tour:</th>&nbsp;
										<th>Lugar:</th>&nbsp;
										<th>Recomendación:</th>&nbsp;
										<th>Numero de Asistentes:</th>&nbsp;
										<th>Fecha del Tour:</th>&nbsp;

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tours as $tour)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tour->categoria->nombre_tour }}</td>
											<td>{{ $tour->nombre_tour }}</td>
											<td>{{ $tour->lugar_tour }}</td>
											<td>{{ $tour->recomendacion }}</td>
											<td>{{ $tour->numero_de_personas }}</td>
											<td>{{ $tour->fecha_tour }}</td>

                                            <td>
                                                <form action="{{ route('tours.destroy',$tour->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tours.show',$tour->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tours.edit',$tour->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $tours->links() !!}
            </div>
        </div>
    </div>
@endsection
