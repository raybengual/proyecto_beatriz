<x-app-layout>
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Video</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('videos.update', $video->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('video.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>