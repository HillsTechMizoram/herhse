<div id="EditModal" class="editmodal modalclosena">

    <!-- Modal content -->
    <div class="editmodal-content">
      <span class="editclose"></span>

        
            <form method="POST" action="#" enctype="multipart/form-data" id="edit-form">
                @csrf
    
                @method('PUT')
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Edit ') }}
                    </h2>


                <br>
                <div>
                    <x-label for="from" value="{{ __('From') }}" />
                    <x-input id="editfrom" class="block mt-1 w-full" type="text" name="from" :value="old('from')" required autofocus autocomplete="username" />
                </div>

                <br>

                <div>
                    <x-label for="to" value="{{ __('To') }}" />
                    <x-input id="editto" class="block mt-1 w-full" type="text" name="to" :value="old('to')" required autofocus autocomplete="username" />
                </div>

                <br>

                <div>
                    <x-label for="amount" value="{{ __('Amount') }}" />
                    <x-input id="editamount" class="block mt-1 w-full" type="text" name="amount" :value="old('amount')" required autofocus autocomplete="username" />

                </div>
                
                <br>

                <div>
                    <x-label for="remarks" value="{{ __('Remarks') }}" />
                    <x-input id="editremarks" class="block mt-1 w-full" type="text" name="remarks" :value="old('remarks')" required autofocus autocomplete="username" />
                </div>
                
                <br>
    
                <div class="flex items-center justify-end mt-4">
                    
    
                    <x-button class="">
                        {{ __('Update') }}
                    </x-button>
                </div>
            </form>
        
    </div>
  
  </div>

  <script>
    $(document).ready(function() {
        $('.editbtn').click(function() {
            $tr = $(this).closest('tr');
            var data = $tr.children('td').map(function() {
                return $(this).text();
            }).get();
            document.getElementById("edit-form").action = '/rides/' + data[0];
            $('#editfrom').val(data[2])
            $('#editto').val(data[3])
            var amount = data[4].replace('₹','')
            $('#editamount').val(amount)
            $('#editremarks').val(data[6])
            
            
        });
    })
</script>