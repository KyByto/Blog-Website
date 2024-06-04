<x-app-layout>     
<main class="flex flex-wrap w-[100%]  justify-center   gap-4 py-10 px-4">
  
    
    <div  class="bg-[#1c1f26] p-5 w-[90%] rounded-xl     flex flex-col items-center text-white" style="    box-shadow:#0000, 0 6px 6px -2px #00000066, var(--tw-shadow);"  >
       <img src="{{ asset('storage/' . $blog->user->profile_pic) }}" alt="{{ $blog->user->name }}" class="mt-2 rounded-full h-10 w-10 object-cover inline self-start" />
        <p class="inline self-start">{{$blog->user->name}}</p>
        <p class="inline self-start">{{
            \Carbon\Carbon::parse($blog->user->created_at)->isoFormat('Do MMM YYYY HH:mm') 
            
            }}</p>
        
       
    <h1 class="text-[23px] font-bold  self-center mb-5 ">{{$blog['title']}}</h1>
    <img src="{{ asset('storage/' . $blog->image_path) }}" class="m-10" alt="image" />

    <p class="">{{$blog['content']}} 

    </p>
        
    </div>
  



<div>
  
</div>

</main>

</x-app-layout>
