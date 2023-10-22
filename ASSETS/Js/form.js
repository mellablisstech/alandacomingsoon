// var text = "hello world";
// console.log(text.length)

// isNaN()


// var form = document.getElementById("form")
// form.addEventListener("submit", function(){

// alert("form submitted")



// })

var fullname = document.getElementById("full name")
var phone = document.getElementById("phone")
var email = document.getElementById("email")
var age = document.getElementById("age")
var password = document.getElementById("password")

function validate(){
    // console.log(fullname.value)
    if(fullname.value == ""){

        alert("fullname cannot be empty!")
        return false;
    }
        else if(phone.value == ""){
            alert("phone cannot be empty!")
            return false;
           
        }
        else if (isNaN(phone.value)){
            alert("phone should be numbers")
            return false;

        }
        else if (phone.value.length > 11){
            alert("phone should not be greater that 11")
            return false;

        }
        else if (email.value.includes("@") == false){
            alert("email must include '@'!")
            return false;

        }
}
