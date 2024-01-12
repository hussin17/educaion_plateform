<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-lg-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800 d-inline-block">
                {{ __('Courses') }}
            </h2>
            <a href="{{ route('admin.courses.create') }}" class="btn btn-primary">
                {{ __('Add Course') }}
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table table-auto table-striped">
                        <thead>
                            <tr>
                                <th class="text-danger">#</th>
                                <th class="text-danger">{{ __('image') }}</th>
                                <th class="text-danger">{{ __('name') }}</th>
                                <th class="text-danger">{{ __('description') }}</th>
                                <th class="text-danger">{{ __('category') }}</th>
                                <th class="text-danger">{{ __('major') }}</th>
                                <th class="text-danger">{{ __('instractor') }}</th>
                                <th class="text-danger">{{ __('price') }}</th>
                                <th class="text-danger">{{ __('discount') }}</th>
                                <th class="text-danger" width="100">{{ __('start') }}</th>
                                <th class="text-danger" width="100">{{ __('end') }}</th>
                                <th class="text-danger">{{ __('hours') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <img src="{{ asset('/images/' . $item->image) }}" width="150"
                                            alt="">
                                    </td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ Str::limit($item->description, 150, '...') }}</td>
                                    <td>{{ $item->category->name }}</td>
                                    <td>{{ $item->major->name }}</td>
                                    <td>{{ $item->instractor->name }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->discount }}</td>
                                    <td>{{ date('d-m-y', strtotime($item->start)) }} </td>
                                    <td>{{ date('d-m-y', strtotime($item->end)) }} </td>
                                    <td>{{ $item->hours }}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
