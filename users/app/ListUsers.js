const Tbody = document.querySelector("tbody");

GetUsersList();

function GetUsersList() {
  fetch("../controller/GetUsersController.php")
    .then((response) => response.json())
    .then((data) => {
      console.log(data);
      List(data);
      //   Swal.fire({
      //     position: "top-end",
      //     icon: "success",
      //     title: "Users List",
      //     showConfirmButton: false,
      //     timer: 1500,
      //   })
    })
    .catch((error) => console.error(error));
}

function List(users) {
  let html = "";

  users.forEach((user) => {
    const { id, firstName, lastName, email } = user;

    html += `
      <tr>
        <td>${id}</td>
        <td>${firstName}</td>
        <td>${lastName}</td>
        <td>${email}</td>
        <td>
          <a href="../controller/update.php?id=${id}" class="btn btn-sm btn-outline-primary">Edit</a>
          <form style="display: inline-block" method="post" action="../controller/delete.php">
          <input type="hidden" name="id" value="${id}">
          <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
          </form>
        </td>
      </tr>
    `;
  });

  Tbody.innerHTML = html;
}
