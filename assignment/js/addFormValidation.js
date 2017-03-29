/*
	Jay Verma
	Q12027103
	
	Javascript form validation for adding a new place of interest

*/

function validateAddForm() {
    var blank = document.forms["addForm"]["addFormName"].value;
    if (blank == "") {
        alert("Name must be filled out");
        return false;
    }
} 