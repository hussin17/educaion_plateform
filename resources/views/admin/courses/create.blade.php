<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-lg-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800 d-inline-block">
                {{ __('Courses') }}
            </h2>
            <a href="{{ route('admin.courses.index') }}" class="btn btn-primary">
                {{ __('Go Back') }}
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('admin.courses.store') }}" method="POST" enctype="multipart/form-data"
                        class="form">
                        <div class="row">
                            <div class="col-6">
                                <input type="text" class="form-control" name="name" placeholder="course name"
                                    id="">
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control" name="price" placeholder="price"
                                    id="">
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control" name="price" placeholder="price"
                                    id="">
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control" name="price" placeholder="price"
                                    id="">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
