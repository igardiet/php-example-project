const userInput = document.querySelector("#user");
const emailInput = document.querySelector("#email");
const passInput = document.querySelector("#pass");
const submit = document.querySelector("#submit");

submit.addEventListener("click", register);

function register() {
  let name = userInput.value;
  let email = emailInput.value;
  let pass = passInput.value;

  let data = new FormData();
  data.append("name", name);
  data.append("email", email);
  data.append("pass", pass);

  fetch("createUser.php", {
    method: "POST",
    body: data,
  })
    .then((res) => res.json())
    .then((data) => console.log(data));
}

function deleteUser(event) {
  const userId = event.target.getAttribute("userId");

  fetch(`deleteUser.php?userId=${userId}`)
    .then((res) => res.json())
    .then((data) => console.log(data));
}

function editUser(event) {
  let input = document.createElement("input");
  input.type = "text";
  input.setAttribute("userId", event.target.getAttribute("userId"));
  input.addEventListener("focusout", submitEdit);
  event.target.insertAdjacentElement("afterend", input);
}

function submitEdit(event) {
  const userId = event.target.getAttribute("userId");
  const value = event.target.value

  fetch(`editUser.php?userId=${userId}&value=${value}`)
    .then((res) => res.json())
    .then((data) => console.log(data));
}
