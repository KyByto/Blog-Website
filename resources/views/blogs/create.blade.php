<x-app-layout> 
<main class="flex flex-wrap w-[85%]   gap-4 py-10 px-4 justify-center ">
  
    <form method="POST" class="w-[90%]"  action=" {{route('blog.store')}} " enctype="multipart/form-data" >
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-white text-sm font-bold mb-2">Title</label>
            <input type="text" name="title" id="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-6">
            <label for="content" class="block text-white text-sm font-bold mb-2">Content</label>
            <textarea name="content" id="content" class="h-[300px] shadow appearance-none border rounded w-full py-2  px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline "></textarea>
        </div>
        <div class="mb-6">

        <label for="image" class="block text-white text-sm font-bold mb-2">Image</label>
        <input type="file" name="image" id="image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
    </div>
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
    Create
            </button>
        </div>
    </form>
    
    



<div>
  
</div>

</main>

</x-app-layout>
