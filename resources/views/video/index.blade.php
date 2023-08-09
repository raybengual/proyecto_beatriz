<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                        <div class="flex w-11/12">
                            <div class="ml-4">
                            <h1 class="mb-2 mt-0 text-5xl font-medium leading-tight text-white">
                                Videos
                              </h1>
                            </div>
                              <div style="margin-left: 75%;" class="mt-5">
                                <a href="{{ route('videos.create') }}" class=" h-1/2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded"  >
                                  {{ __('Nuevo video') }}
                                </a>
                            </div>

                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                      <tr>
                                        <th>No</th>

										<th>Nombre</th>
										<th>Categoria</th>
										<th>Vistas</th>
										<th>Posicion</th>
										<th>Descripcion</th>
										<th>Imagen</th>
										<th>Video</th>
										<th>Ruta</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($videos as $video)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td>{{ ++$i }}</td>

											<td>{{ $video->nombre }}</td>
											<td>{{ $video->categoria }}</td>
											<td>{{ $video->vistas }}</td>
											<td>{{ $video->posicion }}</td>
											<td>{{ $video->descripcion }}</td>
											<td>{{ $video->imagen }}</td>
											<td>{{ $video->video }}</td>
											<td>{{ $video->ruta }}</td>

                                            <td>
                                                <form action="{{ route('videos.destroy',$video->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('videos.show',$video->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('videos.edit',$video->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                {!! $videos->links() !!}
            </div>
        </div>
    </div>
</x-app-layout>
