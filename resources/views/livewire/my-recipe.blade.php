<div>
    <?php
        use App\Models\User;
        $user = Auth::user();
    ?>
    <div class="bg-gray-100 shadow-md">
        <div class="px-4 py-3 sm:px-8 md:px-16">
            <div class="flex items-center justify-center text-teal-700 text-xl font-semibold font-lora mb-2">Total Resep ({{$recipe->count()}})</div>
            <div class="flex justify-around items-center">
                <a href="{{ route('store-recipe') }}" class="bg-teal-500 px-4 py-2 rounded-md hover:bg-teal-400 shadow-md transform hover:scale-105 transition ease-out duration-300 font-nunito font-semibold text-white text-center">Tambah</a>
            </div>
        </div>
    </div>
    <div class="px-4 py-3 mb-3 sm:px-8 md:px-16">
        <div class="flex items-center text-teal-700 text-xl font-semibold font-lora mb-1 py-2">Resep Oleh {{$user->name}}</div>
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-3">
            @foreach($recipe as $r)
                <div class="relative bg-white rounded-md overflow-hidden shadow-md transform transition hover:scale-105 ease-in duration-200">
                    <a href="{{ route('show-recipe', ['id'=>$r->id]) }}">
                        <img src="{{asset('storage/'.$r->user_id.'-'.$r->title.'/'.$r->picture)}}" class="h-56 w-full object-cover">
                    </a>
                    <div>
                        <span class="px-3 pt-3 font-nunito text-xs">Kategori : {{$r->category}}</span>
                        <span class="block px-3 font-nunito font-bold text-l">{{$r->title}}</span>
                        <span class="block px-3 pb-3 font-nunito text-md text-gray-600">Oleh {{User::where('id', '=', $r->user_id)->value('name')}}</span>
                    </div>
                    <div class="px-2 py-1 bg-gray-200 font-nunito text-xs uppercase font-semibold rounded-full absolute top-0 m-2">
                        <svg class="inline-block w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>{{$r->duration}} MENIT</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>