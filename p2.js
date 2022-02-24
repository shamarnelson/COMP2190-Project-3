
function validateField(field) {
    if (field.value == "") {
        field.classList.remove("valid");
        field.classList.add("invalid");
        return false;
    } else if (!Number.isInteger(parseInt(field.value))) {
        field.classList.remove("valid");
        field.classList.add("invalid");
        return false;
    }
    else {
        console.log('here')
        return true;
    }

}

window.onload = function () {
    var fields = document.querySelectorAll("input");
    for (var i = 0; i < fields.length; i++) {
        fields[i].onkeydown = function () {
            this.classList.remove("invalid");
            this.classList.add("valid");
        }
    }
}

function formValidation() {
    var clerk_id = document.getElementById("cID");
    var constituency_id = document.getElementById("constID");
    var polling_id = document.getElementById("pollDivID");
    var polll_stat = document.getElementById("pollStn");
    var votes_can1 = document.getElementById("votesforCand1");
    var votes_can2 = document.getElementById("votesforCand2");
    var rej_bal = document.getElementById("rejctedBal");
    var totalvote = document.getElementById("totalNumVote");


    if (!(validateField(clerk_id) ||
        validateField(constituency_id) ||
        validateField(polling_id) ||
        validateField(votes_can1) ||
        validateField(votes_can2) ||
        validateField(rej_bal) ||
        validateField(totalvote) )) {
        alert("the fields inputted are invalid");
        if(polll_stat.value==''){
            polll_stat.classList.add("invalid");
        }
        return false;
    }

    var test = /[A-Z,0-9]/i;
    if (!polll_stat.value.match(test)) {
        polll_stat.classList.add("invalid")
        alert("information does not match");
        return false;
    }

    var sum = (parseInt(votes_can1.value) + parseInt(votes_can2.value) + parseInt(rej_bal.value));
    if (totalvote.value == sum) {
        alert("valid number of votes");
        return true;
    } else {
        totalvote.classList.add("invalid");
        alert("invalid number of votes");
        return false;
    }

}