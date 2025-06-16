let deleteUser = (id) => {
  fetch('../routes/deleteUserRoute.php', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: 'action=delete&id=' + id
  })
  .then(response => response.text())
  .then(data => {
    location.reload();
    alert(data);
  });
}

let updateUser = (id, name, email, pass) => {
  document.getElementById("popup").classList.remove("hidden");
  document.getElementById("EditUserId").value = id;
  document.getElementById("EditName").value = name;
  document.getElementById("EditEmail").value = email;
  document.getElementById("EditPass").value = pass;
}

let closeUpdateWindow = () => {
  document.getElementById("popup").classList.add("hidden");
}