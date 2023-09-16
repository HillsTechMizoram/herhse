<div id="DeleteModal" class="delmodal modalclosena">

    <!-- Modal content -->
    <div class="delmodal-content">
        <span class="delclose"></span>

        <form action="#" method="post" id="delete-form">
            @csrf
            @method('DELETE')
            <div class="modal-body" style="color:gray;">
                {{-- <input type=hidden id="delid" name=id> --}}
                <h5 id="exampleModalLabel">Delete This Transaction?
                    <b>
                        <div id="deldis"></div>
                    </b>
                </h5>
                <br>
                <x-button type=submit class="">Confirm</x-button>
            </div>
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.deletebtn').click(function() {
            $tr = $(this).closest('tr');
            var data = $tr.children('td').map(function() {
                return $(this).text();
            }).get();
            document.getElementById("delete-form").action = '/rides/' + data[0];
            $('#deldis').html(data[4])
        });
    })
</script>