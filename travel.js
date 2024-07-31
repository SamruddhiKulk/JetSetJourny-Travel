let user = document.getElementById("user");
let loginBtn = document.getElementById("loginBtn");
let placeName = document.getElementById("placeName");
// let submit = document.getElementById("submit");
let placeSelect  = document.getElementById("placeSelect");
let placeInput  = document.getElementById("placeInput");


user.addEventListener("click", function() {
    document.querySelector(".loginPage").classList.toggle("active1");
})

loginBtn.addEventListener("click", function() {

    let email = document.getElementById("email");
    let password = document.getElementById("pass");

    if(email.value == "" && password.value == "") {
        alert("Please Fill the Details")
    } else {
        alert("You Loged In")
        document.querySelector(".loginPage").style.display="none"
    }

})

// submit.addEventListener("click", function() {
//     if(placeName.value == "" ) {
//         alert("Fill The Form First")
//     } else {
//         alert("Your Tour Booked,Your tickit will Send On Your Email ")
//     }
// })

// placeSelect.addEventListener("change", function() {
//     var selectedOption = this.value;
//     placeInput.value = selectedOption;
//   });

const bar = document.getElementById('bar');
const navList = document.getElementById('navList');

// barIcon.addEventListener('click', function() {
//     // Toggle the visibility of the navigation list
//     if (navList.classList.contains('show')) {
//         navList.classList.remove('show');
//     } else {
//         navList.classList.add('show');
//     }
// });

// document.getElementById('bookingForm').addEventListener('submit', function(event) {
//     event.preventDefault(); // Prevent the form from submitting

    // Get form values
    // var from = document.getElementById('from').value;
    // var to = document.getElementById('to').value;
    // var journeyStartDate = document.getElementById('journeyStartDate').value;
    // var journeyEndDate = document.getElementById('journeyEndDate').value;
    // var members = document.getElementById('members').value;
    // var travelClass = document.getElementById('class').value;

    // You can perform additional validation here before sending the data
    // For simplicity, let's just log the values for now
    // console.log("From:", from);
    // console.log("To:", to);
    // console.log("Journey Start Date:", journeyStartDate);
    // console.log("Journey End Date:", journeyEndDate);
    // console.log("Number of Members:", members);
    // console.log("Class:", travelClass);

    // Here you can send the form data to your server using AJAX or any other method
    // For demonstration purposes, let's just alert a success message
//     alert("Booking successful!");
// });

