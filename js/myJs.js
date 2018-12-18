function clearFields() {
    var search = document.getElementById("keyword");
    search.placeholder = "";
}

function returnPlaceholder() {
    var search = document.getElementById("keyword");
    search.placeholder = "Search your vehicle ...";
}

function validateSearch(thisForm) {
    if (thisForm.keyword.value == "") {
        alert("Please enter search criteria");
        thisForm.keyword.focus();

        return false;

    }

}

function validateThisForm(thisForm) {
    if (thisForm.drop_1.value == "Select year") {
        alert("Please select year");
        thisForm.year.focus();
        return false;
    }
    if (thisForm.drop_2.value == "Select make") {
        alert("Please select make");
        thisForm.make.focus();
        return false;
    }
    if (thisForm.drop_3.value == "Select model") {
        alert("Please select model");
        thisForm.model.focus();
        return false;
    }
    if (thisForm.submodel.value == "Select submodel") {
        alert("Please select submodel");
        thisForm.submodel.focus();
        return false;
    }
    if (thisForm.engine.value == "Select engine") {
        alert("Please select engine");
        thisForm.engine.focus();
        return false;
    }
}



function validatePassword(thisForm){
  if(thisForm.password.value != thisForm.retype.value) {
    // confirm_password.setCustomValidity("Passwords Don't Match");
    alert("Password does not match!");
    thisForm.retype.focus();
    return false;
  }
}
