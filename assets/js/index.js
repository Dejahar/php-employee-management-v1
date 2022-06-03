const urlPHP = "../src/library/employeeController.php";
const tableBody = document.getElementById("tableBody");

//!ONLOAD DO FUNCTION GET EMPLOYEES
window.onload = () => {
  fetchEmployees();
};

//!FETCH EMPLOYEES / GET
async function fetchEmployees() {
  tableBody.textContent = "";
  //post data to send
  const data = new FormData();
  data.set("function", "read");
  fetch(urlPHP, {
      method: "POST",
      body: data,
    })
    .then((reponse) => reponse.text())
    .then((data) => {
      const users = JSON.parse(data);
      users.forEach((user) => {
        tableBody.appendChild(createTableEmployees(user));
      });
    });
}

//!CREATE TABLE ELEMENTS WITH EMPLOYEES
function createTableEmployees(user) {
  const tr = document.createElement("tr");
  tr.className = "table-employee__body-row";
  tr.setAttribute("data-id", user.id);
  tr.addEventListener("click", updateEmployee);
  for (const [key, value] of Object.entries(user)) {
    if (key !== "id" && key !== "gender") {
      const td = document.createElement("td");
      td.className = "table-employee__body-col";
      td.textContent = value;
      tr.appendChild(td);
    }
  }
  const deleteCol = document.createElement("td");
  deleteCol.className = "table-employee__body-col";
  const deleteBtn = document.createElement("button");
  deleteBtn.id = "employeeDelete";
  deleteBtn.className = "employee_delete";
  deleteBtn.textContent = "DELETE";
  deleteBtn.setAttribute("data-id", user.id);
  deleteBtn.addEventListener("click", deleteEmployee);
  deleteCol.append(deleteBtn);
  tr.appendChild(deleteCol);
  return tr;
}
//!DELETE EMPLOYEE
function deleteEmployee(e) {
  const id = e.target.dataset.id;
  //post data to send
  const data = new FormData();
  data.set("function", "delete");
  data.set("employeeID", id);
  fetch(urlPHP, {
      method: "POST",
      body: data,
    })
    .then((response) => response.text())
    .then((data) => {
      fetchEmployees();
    });
}

//!UPDATE EMPLOYEE
function updateEmployee(e) {
  if (e.target.id !== "employeeDelete") {
    //TR WITH ID
    const id = e.target.parentElement.dataset.id;
    const data = new FormData();
    data.set("function", "update");
    data.set("employeeID", id);
    fetch(urlPHP, {
        method: "POST",
        body: data,
      })
      .then((response) => response.json())
      .then((data) => {
        console.log(data);
        // updateEmployeeForm(data);
        window.location.href = '../src/employee.php';
      });
  }
}

//!UPDATE FORM
// updateEmployeeForm(data){

// }