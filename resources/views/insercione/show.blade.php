<x-app-layout>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Insercione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('inserciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Noticia:</strong>
                            {{ $insercione->noticia }}
                        </div>
                        <div class="form-group">
                            <strong>Informacion:</strong>
                            {{ $insercione->informacion }}
                        </div>
                        <div class="form-group">
                            <strong>Datos:</strong>
                            {{ $insercione->datos }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $insercione->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Extra:</strong>
                            {{ $insercione->extra }}
                        </div>
                        <div class="form-group">
                            <strong>Foto:</strong>
                            {{ $insercione->foto }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $insercione->direccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
