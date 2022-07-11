var newsletterButton = document.getElementsByClassName("frontpageNewsletter");

function NewsAlert() {
    newsletterButton.onclick = alert("Votre inscription a été prise en compte !");
}

const url = "https://localhost:8001/api/register";
const form = document.getElementsByClassName("registerForm");

form.addEventListener("submit", (event) => {

  event.preventDefault();

  const formData = new FormData(form);

  fetch(url, {
    method: "POST",
    body: formData,
  }).then((response) =>
    response.json().then((data) => console.log(data))
  );
});