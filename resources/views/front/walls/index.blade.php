<x-guest-layout>
    <div class="pt-4 bg-gray-100">
        <div class="min-h-screen flex flex-col items-center pt-3 sm:pt-0">
            <div>
                <img src="{{ url('storage/images/' . $wall->logo) }}" alt="{{$wall->name}} logo" width="100px" height="100px" class="rounded-md">
            </div>

            <livewire:front.create-testimonial-modal :wallId="$wall->_id" :username="$wall->username"/>

            <div class="masonry sm:masonry-sm md:masonry-md p-8 mt-8">
                @foreach ($testimonials as $testimonial)
                    <div class="w-full mx-auto rounded-lg bg-white shadow p-5 text-gray-800 break-inside mb-6" style="max-width: 400px">
                        <div class="w-full flex mb-4">
                            <div class="overflow-hidden rounded-full w-12 h-12">
                                <img src="{{$testimonial->user['avatar'] == "" ? 'https://ui-avatars.com/api/?name='. $testimonial->user['name'] .'&color=7F9CF5&background=EBF4FF' : $testimonial->user['avatar'] }}" alt="">
                            </div>
                            <div class="flex-grow pl-3">
                                <h6 class="font-bold text-md">{{$testimonial->user['name']}}</h6>
                                <p class="text-xs text-gray-600">{{$testimonial->user['title']}}</p>
                            </div>
                            <div class="w-12 text-right">
                                <i class="mdi mdi-twitter text-blue-400 text-3xl"></i>
                            </div>
                        </div>
                        <div class="w-full mb-4">
                            <p class="text-sm">
                                {{$testimonial->text}}
                            </p>
                        </div>
                        {{-- <div class="w-full">
                            <p class="text-xs text-gray-500 text-right">Oct 15th 8:33pm</p>
                        </div> --}}
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</x-guest-layout>
