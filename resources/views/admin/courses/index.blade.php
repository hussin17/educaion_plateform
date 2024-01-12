<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Courses') }}
        </h2>
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
                                <th class="text-danger">{{ __('start - end') }}</th>
                                <th class="text-danger">{{ __('hours') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <img src='{{ asset("/images/ $item->image") }}' width="100" alt="">
                                    </td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>{{ $item->category->name }}</td>
                                    <td>{{ $item->major->name }}</td>
                                    <td>{{ $item->instractor->name }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->discount }}</td>
                                    <td>{{ $item->start }} - {{ $item->end }}</td>
                                    <td>{{ $item->hours }}
                                </tr>
                            @endforeach

                            <tr>
                                <td>#</td>
                                <td>{{ __('image') }}</td>
                                <td>{{ __('name') }}</td>
                                <td>{{ __('description') }}</td>
                                <td>{{ __('category') }}</td>
                                <td>{{ __('major') }}</td>
                                <td>{{ __('instdactor') }}</td>
                                <td>{{ __('price') }}</td>
                                <td>{{ __('discount') }}</td>
                                <td>{{ __('start - end') }}</td>
                                <td>{{ __('hours') }}
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>{{ __('image') }}</td>
                                <td>{{ __('name') }}</td>
                                <td>{{ __('description') }}</td>
                                <td>{{ __('category') }}</td>
                                <td>{{ __('major') }}</td>
                                <td>{{ __('instdactor') }}</td>
                                <td>{{ __('price') }}</td>
                                <td>{{ __('discount') }}</td>
                                <td>{{ __('start - end') }}</td>
                                <td>{{ __('hours') }}
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>{{ __('image') }}</td>
                                <td>{{ __('name') }}</td>
                                <td>{{ __('description') }}</td>
                                <td>{{ __('category') }}</td>
                                <td>{{ __('major') }}</td>
                                <td>{{ __('instdactor') }}</td>
                                <td>{{ __('price') }}</td>
                                <td>{{ __('discount') }}</td>
                                <td>{{ __('start - end') }}</td>
                                <td>{{ __('hours') }}
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>{{ __('image') }}</td>
                                <td>{{ __('name') }}</td>
                                <td>{{ __('description') }}</td>
                                <td>{{ __('category') }}</td>
                                <td>{{ __('major') }}</td>
                                <td>{{ __('instdactor') }}</td>
                                <td>{{ __('price') }}</td>
                                <td>{{ __('discount') }}</td>
                                <td>{{ __('start - end') }}</td>
                                <td>{{ __('hours') }}
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>{{ __('image') }}</td>
                                <td>{{ __('name') }}</td>
                                <td>{{ __('description') }}</td>
                                <td>{{ __('category') }}</td>
                                <td>{{ __('major') }}</td>
                                <td>{{ __('instdactor') }}</td>
                                <td>{{ __('price') }}</td>
                                <td>{{ __('discount') }}</td>
                                <td>{{ __('start - end') }}</td>
                                <td>{{ __('hours') }}
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>{{ __('image') }}</td>
                                <td>{{ __('name') }}</td>
                                <td>{{ __('description') }}</td>
                                <td>{{ __('category') }}</td>
                                <td>{{ __('major') }}</td>
                                <td>{{ __('instdactor') }}</td>
                                <td>{{ __('price') }}</td>
                                <td>{{ __('discount') }}</td>
                                <td>{{ __('start - end') }}</td>
                                <td>{{ __('hours') }}
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>{{ __('image') }}</td>
                                <td>{{ __('name') }}</td>
                                <td>{{ __('description') }}</td>
                                <td>{{ __('category') }}</td>
                                <td>{{ __('major') }}</td>
                                <td>{{ __('instdactor') }}</td>
                                <td>{{ __('price') }}</td>
                                <td>{{ __('discount') }}</td>
                                <td>{{ __('start - end') }}</td>
                                <td>{{ __('hours') }}
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>{{ __('image') }}</td>
                                <td>{{ __('name') }}</td>
                                <td>{{ __('description') }}</td>
                                <td>{{ __('category') }}</td>
                                <td>{{ __('major') }}</td>
                                <td>{{ __('instdactor') }}</td>
                                <td>{{ __('price') }}</td>
                                <td>{{ __('discount') }}</td>
                                <td>{{ __('start - end') }}</td>
                                <td>{{ __('hours') }}
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>{{ __('image') }}</td>
                                <td>{{ __('name') }}</td>
                                <td>{{ __('description') }}</td>
                                <td>{{ __('category') }}</td>
                                <td>{{ __('major') }}</td>
                                <td>{{ __('instdactor') }}</td>
                                <td>{{ __('price') }}</td>
                                <td>{{ __('discount') }}</td>
                                <td>{{ __('start - end') }}</td>
                                <td>{{ __('hours') }}
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>{{ __('image') }}</td>
                                <td>{{ __('name') }}</td>
                                <td>{{ __('description') }}</td>
                                <td>{{ __('category') }}</td>
                                <td>{{ __('major') }}</td>
                                <td>{{ __('instdactor') }}</td>
                                <td>{{ __('price') }}</td>
                                <td>{{ __('discount') }}</td>
                                <td>{{ __('start - end') }}</td>
                                <td>{{ __('hours') }}
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>{{ __('image') }}</td>
                                <td>{{ __('name') }}</td>
                                <td>{{ __('description') }}</td>
                                <td>{{ __('category') }}</td>
                                <td>{{ __('major') }}</td>
                                <td>{{ __('instdactor') }}</td>
                                <td>{{ __('price') }}</td>
                                <td>{{ __('discount') }}</td>
                                <td>{{ __('start - end') }}</td>
                                <td>{{ __('hours') }}
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>{{ __('image') }}</td>
                                <td>{{ __('name') }}</td>
                                <td>{{ __('description') }}</td>
                                <td>{{ __('category') }}</td>
                                <td>{{ __('major') }}</td>
                                <td>{{ __('instdactor') }}</td>
                                <td>{{ __('price') }}</td>
                                <td>{{ __('discount') }}</td>
                                <td>{{ __('start - end') }}</td>
                                <td>{{ __('hours') }}
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>{{ __('image') }}</td>
                                <td>{{ __('name') }}</td>
                                <td>{{ __('description') }}</td>
                                <td>{{ __('category') }}</td>
                                <td>{{ __('major') }}</td>
                                <td>{{ __('instdactor') }}</td>
                                <td>{{ __('price') }}</td>
                                <td>{{ __('discount') }}</td>
                                <td>{{ __('start - end') }}</td>
                                <td>{{ __('hours') }}
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>{{ __('image') }}</td>
                                <td>{{ __('name') }}</td>
                                <td>{{ __('description') }}</td>
                                <td>{{ __('category') }}</td>
                                <td>{{ __('major') }}</td>
                                <td>{{ __('instdactor') }}</td>
                                <td>{{ __('price') }}</td>
                                <td>{{ __('discount') }}</td>
                                <td>{{ __('start - end') }}</td>
                                <td>{{ __('hours') }}
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>{{ __('image') }}</td>
                                <td>{{ __('name') }}</td>
                                <td>{{ __('description') }}</td>
                                <td>{{ __('category') }}</td>
                                <td>{{ __('major') }}</td>
                                <td>{{ __('instdactor') }}</td>
                                <td>{{ __('price') }}</td>
                                <td>{{ __('discount') }}</td>
                                <td>{{ __('start - end') }}</td>
                                <td>{{ __('hours') }}
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>{{ __('image') }}</td>
                                <td>{{ __('name') }}</td>
                                <td>{{ __('description') }}</td>
                                <td>{{ __('category') }}</td>
                                <td>{{ __('major') }}</td>
                                <td>{{ __('instdactor') }}</td>
                                <td>{{ __('price') }}</td>
                                <td>{{ __('discount') }}</td>
                                <td>{{ __('start - end') }}</td>
                                <td>{{ __('hours') }}
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>{{ __('image') }}</td>
                                <td>{{ __('name') }}</td>
                                <td>{{ __('description') }}</td>
                                <td>{{ __('category') }}</td>
                                <td>{{ __('major') }}</td>
                                <td>{{ __('instdactor') }}</td>
                                <td>{{ __('price') }}</td>
                                <td>{{ __('discount') }}</td>
                                <td>{{ __('start - end') }}</td>
                                <td>{{ __('hours') }}
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>{{ __('image') }}</td>
                                <td>{{ __('name') }}</td>
                                <td>{{ __('description') }}</td>
                                <td>{{ __('category') }}</td>
                                <td>{{ __('major') }}</td>
                                <td>{{ __('instdactor') }}</td>
                                <td>{{ __('price') }}</td>
                                <td>{{ __('discount') }}</td>
                                <td>{{ __('start - end') }}</td>
                                <td>{{ __('hours') }}
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>{{ __('image') }}</td>
                                <td>{{ __('name') }}</td>
                                <td>{{ __('description') }}</td>
                                <td>{{ __('category') }}</td>
                                <td>{{ __('major') }}</td>
                                <td>{{ __('instdactor') }}</td>
                                <td>{{ __('price') }}</td>
                                <td>{{ __('discount') }}</td>
                                <td>{{ __('start - end') }}</td>
                                <td>{{ __('hours') }}
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>{{ __('image') }}</td>
                                <td>{{ __('name') }}</td>
                                <td>{{ __('description') }}</td>
                                <td>{{ __('category') }}</td>
                                <td>{{ __('major') }}</td>
                                <td>{{ __('instdactor') }}</td>
                                <td>{{ __('price') }}</td>
                                <td>{{ __('discount') }}</td>
                                <td>{{ __('start - end') }}</td>
                                <td>{{ __('hours') }}
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>{{ __('image') }}</td>
                                <td>{{ __('name') }}</td>
                                <td>{{ __('description') }}</td>
                                <td>{{ __('category') }}</td>
                                <td>{{ __('major') }}</td>
                                <td>{{ __('instdactor') }}</td>
                                <td>{{ __('price') }}</td>
                                <td>{{ __('discount') }}</td>
                                <td>{{ __('start - end') }}</td>
                                <td>{{ __('hours') }}
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
