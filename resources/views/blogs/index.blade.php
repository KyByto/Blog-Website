<x-app-layout>      
<main class="flex flex-wrap w-[85%]   gap-4 py-10 px-4">
    @foreach ($blogs as $blog)
   
    <div  class="bg-[#1c1f26]  w-[30%] rounded-xl   h-[300px]  flex flex-col items-center text-white" style="    box-shadow:#0000, 0 6px 6px -2px #00000066, var(--tw-shadow);"  >
        <a href="{{route('blog.show',$blog->id)}}">
        <div class="p-5  ">
            <div class="flex">
            <img src="{{ $blog->user->profile_pic ? asset('storage/' . $blog->user->profile_pic) : asset('storage/OIP.jpg') }}" alt="{{ $blog->user->name }}" class="mt-2 rounded-full h-10 w-10 object-cover inline self-start" />

        <p class="inline self-start ml-4">{{$blog->user->name}}</p>
            </div>
      <p >{{
            \Carbon\Carbon::parse($blog->user->created_at)->isoFormat('Do MMM YYYY HH:mm') 
            
            }}</p>
        
       
    <h1 class="text-[23px] font-bold  self-center mb-5 ">{{$blog['title']}}</h1>
        </div>
    <img src="{{ asset('storage/' . $blog->image_path) }}" class="" alt="image" />
</a>
    </div>
    
    @endforeach


<div>
  
</div>

</main>

</x-app-layout>
