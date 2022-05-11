<x-app-layout>
    <div class="py-3">
        <div class="mx-auto sm:px-3 lg:px-6">
            <div class="flex flex-row-reverse w-full">
                <button class="btn btn-blue rounded-md">Create</button>
            </div>
            <span class="font-bold text-cyan-700">Resident</span>
            <div class="card space-y-2">
                @foreach($residents as $resident)
                <div class="shadow-sm p-6 border border-gray-200 rounded-lg ">
                    <div class="flex flex-col sm:flex-row sm:gap-x-3 gap-y-3">
                            <div class="field grow-0">
                                <span class="font-bold">ID</span>
                                <span class="">asd</span>
                            </div>
                            <div class="field grow">
                                <div class="field">
                                    <span class="font-bold">NIK</span>
                                    <span class="">340212140845500001</span>
                                </div>

                                <div class="field">
                                    <span class="font-bold">No. KK</span>
                                    <span class="">340212140845500001221</span>
                                </div>
                            </div>
                            <div class="field grow">
                                <span class="font-bold">Nama</span>
                                <span class="">asd</span>
                            </div>
                            <div class="field grow">
                                <span class="font-bold">Alamat</span>
                                <span class="">asdasdsad</span>
                            </div>
                            <div class="field grow">
                                <span class="font-bold">Agama</span>
                                <span class="">asdasdsad</span>
                            </div>
                            <div class="field shrink">
                                <a href="#" class="btn btn-blue rounded-md">View</a>
                            </div>
                        </div>
                </div>
                @endforeach
                {{$residents->links('vendor.pagination.tailwind')}}
            </div>
        </div>
    </div>
</x-app-layout>
