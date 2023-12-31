<x-app-layout>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Insercione</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('inserciones.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('insercione.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
