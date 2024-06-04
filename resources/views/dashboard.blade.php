<x-app-layout >
    

    <div class="py-12 w-[85%] ">
        <div class="    w-[100%] ">
            
          
          <div class="flex flex-col gap-3  ml-10 ">
                @foreach($blogs as $blog)       
             
                <div class="overflow-hidden shadow-sm sm:rounded dark:bg-gray-800   p-6 text-gray-900 dark:text-gray-100 flex justify-between gap-3 items-center ">
                    
    <h1 class="text-[22px]">{{$blog->title}}</h1>
    <p class="truncate ">{{$blog->content}}</p>
    <img src="{{ asset('storage/' . $blog->image_path) }}" class="w-[200px] " alt="image" />
<div class="flex flex-col">
<a href="{{route('blog.edit' , $blog->id)}}" class=" text-center bg-green-400 w-[100px] mb-2 py-1 rounded-xl">Update</a>
<form method="POST" action="{{route('blog.destroy' , $blog->id)}}">
    @csrf
    @method("DELETE")
<button type="submit" class="bg-red-400 w-[100px] py-1 rounded-xl text-center">Delete</button>
</form>
</div>
                </div>
@endforeach
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
