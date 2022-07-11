var newsletterButton = document.getElementsByClassName("frontpageNewsletter");

function NewsAlert() {
    newsletterButton.onclick = alert("Votre inscription a été prise en compte !");
}

const form = document.getElementsByClassName("registerForm");

form.addEventListener("submit",(event) =>{
    event.preventDefault();
    const formData = new formData(form);
});

const url = "registerForm.php";
