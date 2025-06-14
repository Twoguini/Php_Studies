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