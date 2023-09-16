<x-app-layout>
    <x-slot name="header">
       
       
       <div class="add-btn">
            
            <x-button class="" id="myBtn">
                Add Rides
            </x-button>
       </div>
       
    </x-slot>

    

    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
        {{-- {{ Auth::user()->isAdmin }} --}}
                
                {{-- <x-welcome /> --}}
                <div>
                    <div style="overflow-x:auto; margin:10px;">
                        <br>
                        <table id="riderTabl" border="5" cellpadding="10">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Date</th>
                                    <th>Rider</th>
                                    <th>Client</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Delivery Charge</th>
                                    <th>Amount Used</th>
                                    <th>Customer Cash</th>
                                    <th>Remarks</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rides as $ride)
                                <tr>
                                        <td>{{ $ride->id }}</td>
                                        <td>{{ date('d-M-Y-D', strtotime($ride->created_at)) }}</td>
                                        <td>{{ $ride->user->name }}</td>
                                        <td>Daisy Saloon</td>
                                        <td>{{ $ride->from }}</td>
                                        <td>{{ $ride->to }}</td>
                                        <td>100</td>
                                        <td>50</td>
                                        <td>test 345</td>
                                        {{-- <td> <b>₹{{ $ride->amount }} </b> </td> --}}
                                        <td>{{ $ride->remarks }}</td>
                                        <td class="dropdown">
                                            <button class="dropbtn"> <b> ... </b> </button>
                                            <div class="dropdown-content">
                                                <a class="editbtn">Edit</a>
                                                <a class="deletebtn">Delete</a>
                                            </div>
                                        </td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br><br>
                    </div>
                </div>

            </div>
        </div>
    </div>


    {{-- Add Modal --}}
    
    @include('add-modal')

    @include('delete-modal')
    @include('edit-modal')
</x-app-layout>

