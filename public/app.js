//add modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close");

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it

//end add modal



//delete modal
var delmodal = document.getElementById("DeleteModal");

// Get the button that opens the modal
let delbtn = document.querySelectorAll(".deletebtn");

// Get the <span> element that closes the modal
var delspan = document.getElementsByClassName("delclose");

// When the user clicks the button, open the modal 
for(let i=0; i<delbtn.length; i++){
  delbtn[i].onclick = function() {
    delmodal.style.display = "block";
  }
}

// When the user clicks on <span> (x), close the modal
delspan.onclick = function() {
  delmodal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it

//end delete modal

//edit modal
var editmodal = document.getElementById("EditModal");

// Get the button that opens the modal
let editbtn = document.querySelectorAll(".editbtn");

// Get the <span> element that closes the modal
var editspan = document.getElementsByClassName("editclose");

// When the user clicks the button, open the modal 
for(let i=0; i<editbtn.length; i++){
  editbtn[i].onclick = function() {
    editmodal.style.display = "block";
  }
}

// When the user clicks on <span> (x), close the modal
editspan.onclick = function() {
  editmodal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
var modals = document.querySelectorAll(".modalclosena");

document.addEventListener("click", function(event) {
  for (var i = 0; i < modals.length; i++) {
    var modal = modals[i];
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
});

// Prevent clicks inside the modals from closing them
// for (var i = 0; i < modals.length; i++) {
//   modals[i].addEventListener("click", function(event) {
//     event.stopPropagation();
//   });
// }
// window.onclick = function(event) {
//   if (event.target == editmodal) {
//     editmodal.style.display = "none";
//   }
// }
//edit modal end

$(document).ready(function () {
  $('#riderTable').DataTable({
      // "bPaginate": true,
      // "bLengthChange": false,
       "bFilter": true
      // "bInfo": true,
      // "bAutoWidth": true
  });
});