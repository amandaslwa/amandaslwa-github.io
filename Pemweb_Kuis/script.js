function create_account() {
    var n = document.getElementById("n1").value;
    var e = document.getElementById("e1").value;
    var p = document.getElementById("p1").value;
    var cp = document.getElementById("p2").value;

    var letters = /^[A-Za-z]+$/;  
    var email_val = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; 

    if(n==''||e==''){
        alert("Enter each details correctly");
    }
    else if(!letters.test(n)) {
        alert('Input is incorrect, must contain alphabets only');
    }
    else if(!email_val.test(e)) {
        alert('Invalid Email format please enter valid email');
    }
    else {
        alert("Registered successfully.....");
    }
}