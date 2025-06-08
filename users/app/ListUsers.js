const Tbody = document.querySelector("tbody");
const TrendingContainer = document.querySelector(".trending-container");
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
          <a href="../controller/UpdateUsersController.php?id=${id}" class="btn btn-sm btn-outline-primary">Edit</a>
          <form style="display: inline-block" method="post" action="../controller/DeleteUsersController.php">
          <input type="hidden" name="id" value="${id}">
          <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
          </form>
        </td>
      </tr>
    `;
  });

  Tbody.innerHTML = html;
}

function Trending(users) {
  let html = "";
  users.forEach((user) => {
    const { firstName, lastName } = user;

    html += `
      <div class="social-container">
          <div class="pfp">
              <img src="../../assets/images/placeholder.jpg" class="pfp" alt="pfp">
          </div>
          <div class="username">
            <span>@${firstName.toLowerCase()}${lastName.toLowerCase()}</span>
            <span>${firstName} ${lastName}</span>
          </div>
      </div>
    `;

   TrendingContainer.innerHTML = html;
  });
}

GetTrendingUsersList()
function GetTrendingUsersList() {
  fetch("../../users/controller/GetUsersController.php")
    .then((response) => response.json())
    .then((data) => {
      console.log(data);
      Trending(data);
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
