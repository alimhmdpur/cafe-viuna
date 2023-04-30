// function confirmPswd() {
//     const password = document.getElementById("password").value;
//     const confirmPassword = document.getElementById("confirmPassword").value;
//    if(password.lenghs < 8 ) {
//         document.querySelector("#errorConfirm").innerHTML = "رمز شما کمتر از ۸ کاراکتر است.";
//         password.style.outlineColor = "red"
//         // confirmPassword = "";

//     } else if(password.lenghs > 16) {
//         document.querySelector("#errorConfirm").innerHTML = "رمز شما بیشتر از ۱۶ کاراکتر است.";
//         password.style.outlineColor = "red"

//     } else if(password = "") {
//         document.querySelector("#errorConfirm").innerHTML = "";
//         password.style.outlineColor = "red"
//     }
// }

// // function matchPassword() {  
// //     var pw1 = document.getElementById("password").value;  
// //     var pw2 = document.getElementById("confirmPassword").value;  
// //     if(pw1 != pw2)  
// //     {   
// //         alert("Passwords did not match");  
// //     } else {  
// //         alert("Password created successfully");  
// //     }  
// // }  
// const btnForm = document.querySelector("#submit")

// btnForm.addEventListener("click", () => {
//     confirmPswd();
// })

let pizzaMenu = document.querySelector("#pizzaMenu");
let pastaMenu = document.querySelector("#pastaMenu");
let lazaniaMenu = document.querySelector("#lazaniaMenu");
let pishGhazaMenu = document.querySelector("#pishGhazaMenu");
let saladMenu = document.querySelector("#saladMenu");
let drinkerMenu = document.querySelector("#drinkerMenu");

pizzaMenu.addEventListener("click", () => {
    document.querySelector(".pizza").style.display = "flex";
    document.querySelector(".pasta").style.display = "none";
    document.querySelector(".lazania").style.display = "none";
    document.querySelector(".pishGhaza").style.display = "none";
    document.querySelector(".salad").style.display = "none";
    document.querySelector(".drinker").style.display = "none";
})
pastaMenu.addEventListener("click", () => {
    document.querySelector(".pizza").style.display = "none";
    document.querySelector(".pasta").style.display = "flex";
    document.querySelector(".lazania").style.display = "none";
    document.querySelector(".pishGhaza").style.display = "none";
    document.querySelector(".salad").style.display = "none";
    document.querySelector(".drinker").style.display = "none";
})
lazaniaMenu.addEventListener("click", () => {
    document.querySelector(".pizza").style.display = "none";
    document.querySelector(".pasta").style.display = "none";
    document.querySelector(".lazania").style.display = "flex";
    document.querySelector(".pishGhaza").style.display = "none";
    document.querySelector(".salad").style.display = "none";
    document.querySelector(".drinker").style.display = "none";
})
pishGhazaMenu.addEventListener("click", () => {
    document.querySelector(".pizza").style.display = "none";
    document.querySelector(".pasta").style.display = "none";
    document.querySelector(".lazania").style.display = "none";
    document.querySelector(".pishGhaza").style.display = "flex";
    document.querySelector(".salad").style.display = "none";
    document.querySelector(".drinker").style.display = "none";
})
saladMenu.addEventListener("click", () => {
    document.querySelector(".pizza").style.display = "none";
    document.querySelector(".pasta").style.display = "none";
    document.querySelector(".lazania").style.display = "none";
    document.querySelector(".pishGhaza").style.display = "none";
    document.querySelector(".salad").style.display = "flex";
    document.querySelector(".drinker").style.display = "none";
})
drinkerMenu.addEventListener("click", () => {
    document.querySelector(".pizza").style.display = "none";
    document.querySelector(".pasta").style.display = "none";
    document.querySelector(".lazania").style.display = "none";
    document.querySelector(".pishGhaza").style.display = "none";
    document.querySelector(".salad").style.display = "none";
    document.querySelector(".drinker").style.display = "flex";
})




let hotDrinkMenu = document.querySelector("#hotDrinkMenu");
let coolDrinkMenu = document.querySelector("#coolDrinkMenu");
let cakeMenu = document.querySelector("#cakeMenu");
let iceCreamMenu = document.querySelector("#iceCreamMenu");
let joiceMenu = document.querySelector("#joiceMenu");

hotDrinkMenu.addEventListener("click", () => {
    document.querySelector(".hotDrink").style.display = "flex";
    document.querySelector(".coolDrink").style.display = "none";
    document.querySelector(".cake").style.display = "none";
    document.querySelector(".iceCream").style.display = "none";
    document.querySelector(".joice").style.display = "none";
})
coolDrinkMenu.addEventListener("click", () => {
    document.querySelector(".hotDrink").style.display = "none";
    document.querySelector(".coolDrink").style.display = "flex";
    document.querySelector(".cake").style.display = "none";
    document.querySelector(".iceCream").style.display = "none";
    document.querySelector(".joice").style.display = "none";
})
cakeMenu.addEventListener("click", () => {
    document.querySelector(".hotDrink").style.display = "none";
    document.querySelector(".coolDrink").style.display = "none";
    document.querySelector(".cakeMenu").style.display = "flex";
    document.querySelector(".iceCreamMenu").style.display = "none";
    document.querySelector(".joiceMenu").style.display = "none";
})
iceCreamMenu.addEventListener("click", () => {
    document.querySelector(".hotDrink").style.display = "none";
    document.querySelector(".coolDrink").style.display = "none";
    document.querySelector(".cake").style.display = "none";
    document.querySelector(".iceCream").style.display = "flex";
    document.querySelector(".joice").style.display = "none";
})
joiceMenu.addEventListener("click", () => {
    document.querySelector(".hotDrink").style.display = "none";
    document.querySelector(".coolDrink").style.display = "none";
    document.querySelector(".cake").style.display = "none";
    document.querySelector(".iceCream").style.display = "none";
    document.querySelector(".joice").style.display = "flex";
})