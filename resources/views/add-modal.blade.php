
<div id="myModal" class="modal modalclosena">

    <!-- Modal content -->
    <div class="modal-content">
      <span class="close"></span>

        
            <form method="POST" action="/rides" enctype="multipart/form-data">
                @csrf
    
                
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Add New Transaction') }}
                    </h2>


                <br><br>
                <div>
                    <x-label for="from" value="{{ __('From') }}" />
                    <x-input id="from" class="block mt-1 w-full" type="text" name="from" :value="old('from')" required autofocus autocomplete="username" />
                </div>

                <br>

                <div>
                    <x-label for="to" value="{{ __('To') }}" />
                    <x-input id="to" class="block mt-1 w-full" type="text" name="to" :value="old('to')" required autofocus autocomplete="username" />
                </div>

                <br>

                <div>
                    <x-label for="amount" value="{{ __('Amount') }}" />
                    <x-input id="amount" class="block mt-1 w-full" type="number" name="amount" :value="old('amount')" required autofocus autocomplete="username" />
                </div>
                
                <br>

                <div>
                    <x-label for="remarks" value="{{ __('Remarks') }}" />
                    <x-input id="remarks" class="block mt-1 w-full" type="text" name="remarks" :value="old('remarks')" required autofocus autocomplete="username" />
                </div>
                
                <br>
    
                <div class="flex items-center justify-end mt-4">
                    
    
                    <x-button class="">
                        {{ __('Add') }}
                    </x-button>
                </div>
            </form>
        
    </div>
  
  </div>
