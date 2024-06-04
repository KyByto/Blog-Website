<nav class=" text-[#a8b3cf] gap-4 flex flex-col items-center  h-[100%] w-[15%] border-r border-gray-700" >


    <a href="{{url('/')}}">   <img class="w-[70px] " src="https://fennec.digital/wp-content/uploads/2022/08/logo-fennec-final-tail.png" alt="icon" />   </a>
   <h1 class="hover:bg-[#a8b3cf33] w-[100%] text-center py-2">  <a href="{{route('blog.create')}}"> Create Blog </a></h1> 
   <a href="{{url('/dashboard')}}" class="hover:bg-[#a8b3cf33] w-[100%] text-center py-2">Dashboard</a>
   <a href="{{url('/profile')}}" class="hover:bg-[#a8b3cf33] w-[100%] text-center py-2">Profile</a>

   <form class="w-[100%]" action="{{ route('logout') }}" method="POST">
    @csrf <!-- Ajoutez ceci pour protéger contre les attaques de type Cross-Site Request Forgery (CSRF) -->
    <button type="submit" class="hover:bg-[#a8b3cf33] w-[100%]  text-center py-2">Logout</button>
</form>

   </nav>        