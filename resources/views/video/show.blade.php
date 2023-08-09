

<x-app-layout>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Video</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('videos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $video->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $video->categoria }}
                        </div>
                        <div class="form-group">
                            <strong>Vistas:</strong>
                            {{ $video->vistas }}
                        </div>
                        <div class="form-group">
                            <strong>Posicion:</strong>
                            {{ $video->posicion }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $video->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $video->imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Video:</strong>
                            {{ $video->video }}
                        </div>
                        <div class="form-group">
                            <strong>Ruta:</strong>
                            {{ $video->ruta }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
