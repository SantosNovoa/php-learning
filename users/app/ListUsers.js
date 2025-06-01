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

      </tr>
    `;
  });

  Tbody.innerHTML = html;
}
