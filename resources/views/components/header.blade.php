<header class="bg-blue-900 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-3xl font-semibold">
            <a href="{{url('/')}}">Workopia</a>
        </h1>
        <nav class="hidden md:flex items-center space-x-4">
            {{-- <a href="{{url('/jobs')}}" class="text-white hover:underline py-2 {{request()->is('jobs') ? 'text-yellow-500 font-bold':""}}"
                >All Jobs</a
            > --}}
            <x-nav-link url="/jobs" :active="request()->is('jobs')">
             All Jobs
            </x-nav-link>

            <x-nav-link url="/jobs/saved" :active="request()->is('jobs/saved')">
             Saved jobs
            </x-nav-link>

            <x-nav-link url="/login" :active="request()->is('saved')" >
             Login
            </x-nav-link>

            <x-nav-link url="/register" :active="request()->is('register')">
             Register
            </x-nav-link>

            <x-nav-link url="/dashboard" :active="request()->is('dashboard')" icon="gauge">
             Dashboard
            </x-nav-link>
          
          
          <x-button-link url="{{url('/jobs/create')}}" bgClass="bg-yellow-500" hoverClass="hover:bg-yellow-600" textClass="text-black" icon="edit">
            Create job
          </x-button-link>
         
            
        </nav>
        
        <button
            id="hamburger"
            class="text-white md:hidden flex items-center"
        >
            <i class="fa fa-bars text-2xl"></i>
        </button>
    </div>
    <!-- Mobile Menu -->
    <nav
        id="mobile-menu"
        class="hidden md:hidden bg-blue-900 text-white mt-5 pb-4 space-y-2"
    >
    
       <x-nav-link url="/jobs" :active="request()->is('jobs')" :mobile="true">
        All jobs
       </x-nav-link>
    

       <x-nav-link url="/jobs/saved" :active="request()->is('jobs/saved')" :mobile="true">
        Saved jobs
       </x-nav-link>
     
       
       
       <x-nav-link url="/login" :active="request()->is('login')" :mobile="true">
        Login
       </x-nav-link>
     
       <x-nav-link url="/register" :active="request()->is('register')" :mobile="true">
        Register
       </x-nav-link>

       <x-nav-link url="/dashboard" :active="request()->is('dashboard')" :mobile="true" icon="gauge">
        Dashboard
       </x-nav-link>

       
        <x-button-link
            url="/jobs/create"
            :block="true"
            bgClass="bg-yellow-500" hoverClass="hover:bg-yellow-600" textClass="text-black" icon="edit"
        >
       Create job
        </x-button-link>
    </nav>
</header>
