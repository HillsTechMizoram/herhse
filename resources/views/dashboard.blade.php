<x-app-layout>
    <x-slot name="header">
       
        @if (Auth::user()->isAdmin === 0)
       <div class="add-btn">
            <x-button class="" id="myBtn">
                Add Rides
            </x-button>
       </div>
       @endif
       
    </div>

    
    </x-slot>

    

    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
        {{-- {{ Auth::user()->isAdmin }} --}}
                
                {{-- <x-welcome /> --}}
            </div>
        </div>
    </div>


    {{-- Add Modal --}}
    
    @include('add-modal')


</x-app-layout>

