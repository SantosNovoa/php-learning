const Tbody = document.querySelector("tbody");
const TrendingContainer = document.querySelector(".trending-container");
GetUsersList();

function GetUsersList() {
  fetch("../controller/GetUsersController.php")
    .then((response) => response.json())
    .then((data) => {
      console.log(data);
      List(data);
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
          <button class="btn btn-sm btn-outline-danger delete-btn" data-id="${id}">Delete</button>
        </td>
        </td>
      </tr>
    `;
  });

  Tbody.innerHTML = html;

  document.querySelectorAll(".delete-btn").forEach((button) => {
    button.addEventListener("click", (e) => {
      const userId = e.currentTarget.getAttribute("data-id");

      Swal.fire({
        title: "Are you sure?",
        text: "This user will be deleted permanently.",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#6c757d",
        confirmButtonText: "Yes, delete it!",
      }).then((result) => {
        if (result.isConfirmed) {
          // use fetch to submit the delete
          fetch("../controller/DeleteUsersController.php", {
            method: "POST",
            headers: {
              "Content-Type": "application/x-www-form-urlencoded",
            },
            body: `id=${userId}`,
          })
            .then((response) => {
              if (response.ok) {
                Swal.fire("Deleted!", "User has been deleted.", "success");
                GetUsersList(); // refresh the table after the row has been deleted
              } else {
                Swal.fire("Error!", "Something went wrong.", "error");
              }
            })
            .catch((error) => {
              console.error(error);
              Swal.fire("Error!", "Failed to delete user.", "error");
            });
        }
      });
    });
  });
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

GetTrendingUsersList();
function GetTrendingUsersList() {
  fetch("../../users/controller/GetUsersController.php")
    .then((response) => response.json())
    .then((data) => {
      console.log(data);
      Trending(data);
    })
    .catch((error) => console.error(error));
}
