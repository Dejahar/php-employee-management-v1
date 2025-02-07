//!GENERAL VARIABLES
const urlPHP = "../src/library/employeeController.php";
const tableBody = document.getElementById("tableBody");
const createEmployeeBtn = document.getElementById("createEmployee");
createEmployeeBtn.addEventListener("click", createFormDashboard);
//!ONLOAD DO FUNCTION GET EMPLOYEES
window.onload = () => {
  fetchEmployees();
};
//!CHECKS LOGIN COOKIE
// setInterval(getCookie, 1000);
// function getCookie() {
//   console.log('This is Interval');
//   //post data to send
//   const data = new FormData();
//   data.set("function", "cookie");
//   fetch(urlPHP, {
//     method: "GET",
//     body: data,
//   })
//   .then((response) => response.text())
//   .then((data) => {
//     if (data == true) {
//       window.location.href = '../';
//     }
//   });
// }

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
  deleteBtn.textContent = "❌";
  deleteBtn.setAttribute("data-id", user.id);
  deleteBtn.addEventListener("click", deleteEmployee);
  deleteCol.append(deleteBtn);
  tr.appendChild(deleteCol);
  return tr;
}

//!DELETE EMPLOYEE
function deleteEmployee(e) {
  if (confirm("Are you sure you want to delete this employee? ⚠️")) {
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
        alert("Employee deleted succesfully ✔️");
      });
  }
}

//!UPDATE EMPLOYEE
function updateEmployee(e) {
  if (e.target.id !== "employeeDelete") {
    window.location.href = "../src/employee.php";
    //TR WITH ID
    const id = e.target.parentElement.dataset.id;
    const data = new FormData();
    data.set("function", "update");
    data.set("employeeID", id);
    fetch(urlPHP, {
      method: "POST",
      body: data,
    })
      .then((response) => response.text())
      .then((data) => {
        if (data == true) {
          window.location.href = "../src/employee.php";
        }
      });
  }
}

//!CREATE ROW FORM TO CREATE EMPLOYEE
function createFormDashboard(e) {
  //ROW
  const tr = document.createElement("tr");
  tr.id = "rowFormCreate";
  tr.className = "table-employee__body-row";
  //TD - INPUT NAME
  const tdName = document.createElement("td");
  tdName.className = "table-employee__body-col table-employee__create-col";
  const inputName = document.createElement("input");
  inputName.className = "table-employee__create-input";
  inputName.name = "inputName";
  inputName.type = "text";
  tdName.append(inputName);
  //TD - INPUT LASTNAME
  const tdLastname = document.createElement("td");
  tdLastname.className = "table-employee__body-col table-employee__create-col";
  const inputLastname = document.createElement("input");
  inputLastname.className = "table-employee__create-input";
  inputLastname.name = "inputLastname";
  inputLastname.type = "text";
  tdLastname.append(inputLastname);
  //TD - INPUT EMAIL
  const tdEmail = document.createElement("td");
  tdEmail.className = "table-employee__body-col table-employee__create-col";
  const inputEmail = document.createElement("input");
  inputEmail.className = "table-employee__create-input";
  inputEmail.name = "inputEmail";
  inputEmail.type = "email";
  tdEmail.append(inputEmail);

  //TD - INPUT AGE
  const tdAge = document.createElement("td");
  tdAge.className = "table-employee__body-col table-employee__create-col";
  const inputAge = document.createElement("input");
  inputAge.className = "table-employee__create-input";
  inputAge.name = "inputAge";
  inputAge.type = "number";
  tdAge.append(inputAge);

  //TD - INPUT STREET
  const tdStreet = document.createElement("td");
  tdStreet.className = "table-employee__body-col table-employee__create-col";
  const inputStreet = document.createElement("input");
  inputStreet.className = "table-employee__create-input";
  inputStreet.name = "inputStreet";
  inputStreet.type = "text";
  tdStreet.append(inputStreet);
  //TD - INPUT CITY
  const tdCity = document.createElement("td");
  tdCity.className = "table-employee__body-col table-employee__create-col";
  const inputCity = document.createElement("input");
  inputCity.className = "table-employee__create-input";
  inputCity.name = "inputCity";
  inputCity.type = "text";
  tdCity.append(inputCity);

  //TD - INPUT STATE
  const tdState = document.createElement("td");
  tdState.className = "table-employee__body-col table-employee__create-col";
  const inputState = document.createElement("input");
  inputState.className = "table-employee__create-input";
  inputState.name = "inputState";
  inputState.type = "text";
  tdState.append(inputState);

  //TD - INPUT POSTAL CODE
  const tdPostalCode = document.createElement("td");
  tdPostalCode.className =
    "table-employee__body-col table-employee__create-col";
  const inputPostalCode = document.createElement("input");
  inputPostalCode.className = "table-employee__create-input";
  inputPostalCode.name = "inputPostalCode";
  inputPostalCode.type = "number";
  tdPostalCode.append(inputPostalCode);

  //TD - INPUT PHONE NUMBER
  const tdPhone = document.createElement("td");
  tdPhone.className = "table-employee__body-col table-employee__create-col";
  const inputPhone = document.createElement("input");
  inputPhone.className = "table-employee__create-input";
  inputPhone.name = "inputPhone";
  inputPhone.type = "number";
  tdPhone.append(inputPhone);

  //TD BUTTON CREATE
  const tdCreateBtn = document.createElement("td");
  tdCreateBtn.className = "table-employee__body-col table-employee__create-col";
  const createBtn = document.createElement("button");
  createBtn.type = "submit";
  createBtn.textContent = "🆕";
  createBtn.className = "dashboard__create-btn";
  createBtn.addEventListener("click", formValidation);
  tdCreateBtn.append(createBtn);
  //Add td to tr
  tr.append(
    tdName,
    tdLastname,
    tdEmail,
    tdAge,
    tdStreet,
    tdCity,
    tdState,
    tdPostalCode,
    tdPhone,
    tdCreateBtn
  );
  //Asociate inputs with a form
  addInputsToForm(tr);
  //add to table body
  tableBody.prepend(tr);
}
//!ADD INPUTS TO THE TABLE
function addInputsToForm(tr) {
  const form = document.createElement("form");
  form.id = "createForm";
  document.body.append(form);
  const inputs = tr.querySelectorAll("input");
  inputs.forEach((input) => {
    input.setAttribute("form", "createForm");
  });
}
//!FETCH FUNCTION TO PHP TO CREATE EMPLOYEE
function createEmployee(e) {
  const form = document.getElementById("createForm");
  const data = new FormData(form);
  data.set("function", "create");
  data.set("dashboardCreate", true);
  fetch(urlPHP, {
    method: "POST",
    body: data,
  })
    .then((response) => response.text())
    .then((data) => {
      fetchEmployees();
      alert("Employee created succesfully ✔️");
    });
}
//!VALIDATE FORM FROM DASHBOARD
function formValidation(e) {
  e.preventDefault();
  let data = new FormData(createForm);
  let valid = true;
  for (const value of data.entries()) {
    if (value[1] === "") {
      valid = false;
    }
  }
  if (valid) {
    createEmployee();
  } else {
    invalidForm();
  }
}
//!APPLY STYLE IF ITS FORM FROM DASHBOARD ITS WRONG
function invalidForm() {
  const tr = document.querySelectorAll("#rowFormCreate input");
  for (const column of tr) {
    column.style.border = "red 2px solid";
  }
}
