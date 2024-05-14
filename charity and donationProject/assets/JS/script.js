let errorArray = [];

function printPhpError() {
  let outputString = "";

  for (let i = 0; i < errorArray.length; i++) {
    outputString += `<p>${errorArray[i]}</p>`;
  }

  outputString += `<br />`;

  let errorMsg = document.getElementById("errorMsg");

  errorMsg.innerHTML = outputString;
}

function printError() {
  alert(errorArray.join("\n"));
}

function addResource() {
  let resource_title = document.getElementById("resource_title").value;
  let thumbnail = document.getElementById("thumbnail");
  let description = document.getElementById("description").value;
  let category = document.forms["Resource"]["category"].value;

  if (resource_title === "") {
    errorArray.push("Error: Empty Name!");
  }
  if (resource_title.length < 7) {
    errorArray.push("Error: Name can't be less than two characters!");
  }
  if (thumbnail === "" || thumbnail == undefined) {
    errorArray.push("Error: Please upload a profile picture!");
  }
  if (description === "") {
    errorArray.push("Error: Please write a description!");
  }
  if (description.length < 10) {
    errorArray.push("Error: Description can't be less than two characters!");
  }
  if (!category) {
    errorArray.push("Error: No category selected!");
  }

  // alert(thumbnail);

  printError();

  // let xhttp = new XMLHttpRequest();
  // let std = {
  //   resource_title: resource_title,
  //   thumbnail: thumbnail,
  //   description: description,
  //   category: category,
  // };
  // let data = JSON.stringify(std);
  // xhttp.open("POST", "../controller/add_resource.php", true);
  // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  // xhttp.send("resourcedata=" + data);
  // xhttp.onreadystatechange = function () {
  //   if (this.readyState == 4 && this.status == 200) {
  //     if (this.responseText == true) {
  //       alert("add resource Successful!");
  //     } else {
  //       alert(this.responseText);
  //     }
  //   }
  // };
}

function contact() {
  errorArray = [];
  let email = document.getElementById("email").value;
  let description = document.getElementById("description").value;

  if (email === "") {
    errorArray.push("Error: Empty email!");
  } else if (email.indexOf("@") === -1) {
    errorArray.push("Error: Invalid email!");
  }

  if (description === "") {
    errorArray.push("Error: Please write a description!");
  }
  if (description.length < 10) {
    errorArray.push("Error: Description can't be less than two characters!");
  }

  if (errorArray.length > 0) {
    printError();
  } else {
    let xhttp = new XMLHttpRequest();
    xhttp.open(
      "GET",
      "../controller/contact.php?email=" +
        email +
        "&" +
        "description=" +
        description,
      true
    );
    xhttp.send("email=" + email + "&" + "description=" + description);
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        if (this.responseText == true) {
          alert("response received !");
        } else {
          alert(this.responseText);
        }
      }
    };
  }
}

function signUp() {
  errorArray = [];
  let username = document.getElementById("username").value;
  let email = document.getElementById("email").value;
  let password = document.getElementById("password").value;
  let password2 = document.getElementById("password1").value;
  let user_type = document.forms["registration"]["user-type"].value;

  if (username.length < 3 || username.length > 10) {
    errorArray.push("Error: Name must be between 3 to 10 characters long.");
  }
  if (email === "") {
    errorArray.push("Error: Empty email!");
  }
  if (email.indexOf("@") === -1) {
    errorArray.push("Error: Invalid email!");
  }
  if (password == username) {
    errorArray.push("Error: Password can't  be same as username..");
  }
  if (password.length < 5) {
    errorArray.push("Error: Password must be at least 5 characters long..");
  }
  if (password != password2) {
    errorArray.push("Error: Password and confirm password must be same.");
  }
  if (!user_type) {
    errorArray.push("Error: Please select user type");
  }
  printError();

  let xhttp = new XMLHttpRequest();
  let std = {
    username: username,
    email: email,
    password: password,
    password1: password2,
    user_type: user_type,
  };
  let data = JSON.stringify(std);
  // xhttp.open(
  //   "GET", "../controller/signupCheck.php?username=" +
  //     username + "&" + "email=" + email + "&" + "password=" + password + "&" + "password2=" + password2
  //     + "&" + "user_type=" + user_type, true);
  xhttp.open("POST", "../controller/signupCheck.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  // xhttp.send(
  //   "username=" + username + "&" + "email=" + email + "&" + "password=" + password + "&" + "password2=" +
  //     password2 + "&" + "user_type=" + user_type);
  xhttp.send("userdata=" + data);
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      // alert(this.responseText);
      // console.log(this.responseText);
      // let std = JSON.parse(this.responseText);

      if (this.responseText == true) {
        alert("Registration Successful!");
      } else {
        alert(this.responseText);
      }
    }
  };
}

function logIn() {
  errorArray = [];
  let username = document.getElementById("username").value;
  let password = document.getElementById("password").value;

  if (username == "" || password == "") {
    errorArray.push("Error:Empty field.!");
  }
  if (username.length < 4 || username.length > 7) {
    errorArray.push("Error:username must be 4 to 7 characters long.!");
  }
  if (password == username) {
    errorArray.push("Error:username and password cannot be same.!");
  }
  if (password.length < 4) {
    errorArray.push("Error:password must be at least 4 characters long..!");
  }

  if (errorArray.length > 0) {
    printError();
  } else {
    let xhttp = new XMLHttpRequest();
    xhttp.open(
      "GET",
      "../controller/logInCheck.php?username=" +
        username +
        "&" +
        "password=" +
        password,
      true
    );
    xhttp.send("username=" + username + "&" + "password=" + password);
    // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        if (this.responseText == "true") {
          alert("login Successful!");
          window.location.href = "../view/home.php";
        } else {
          alert(this.responseText);
        }
      }
    };
  }
}

function editDonor() {
  errorArray = [];
  let serial = document.getElementById("serial").value;
  let donor_name = document.getElementById("donor_name").value;
  let recent_donation = document.getElementById("recent_donation").value;
  let total_donation = document.getElementById("total_donation").value;
  let donation_date = document.getElementById("donation_date").value;
  let contact_info = document.getElementById("contact_information").value;

  if (
    serial == "" ||
    donor_name == "" ||
    recent_donation == "" ||
    total_donation == "" ||
    donation_date == "" ||
    contact_info == ""
  ) {
    errorArray.push("Error:please fill up all the required field.!");
  }
  if (isNaN(serial)) {
    errorArray.push("Error:serial has to be number..!");
  }
  if (donor_name.length < 4 || donor_name.length < 7) {
    errorArray.push("Error:name must be 4 to 7 characters long..!");
  }
  for (let i = 0; i < donor_name.length; i++) {
    const char = donor_name[i];
    if (
      !(
        (char >= "A" && char <= "Z") ||
        (char >= "a" && char <= "z") ||
        char === " " ||
        char === "-"
      )
    ) {
      errorArray.push(
        "Error:name must contaion only alphabates,space or hyphens..!"
      );
    }
  }
  const words = donor_name.split("");
  if (words.length < 2) {
    errorArray.push("Error:name must contains two words..!");
  }
  if (isNaN(recent_donation) || recent_donation % 1 !== 0) {
    errorArray.push("Error:recent donation must be an integer..!");
  }
  if (isNaN(total_donation) || total_donation % 1 !== 0) {
    errorArray.push("Error:total_donation must be an integer number..!");
  }
  let atIndex = contact_info.indexOf("@");
  let dotIndex = contact_info.lastIndexOf(".");
  if (
    atIndex < 1 ||
    dotIndex < atIndex + 2 ||
    dotIndex + 2 >= contact_info.length
  ) {
    errorArray.push("Error: Please enter a valid contact email..!");
  }

  if (errorArray.length > 0) {
    printError();
  } else {
    let xhttp = new XMLHttpRequest();
    let std = {
      serial: serial,
      donor_name: donor_name,
      recent_donation: recent_donation,
      total_donation: total_donation,
      donation_date: donation_date,
      contact_info: contact_info,
    };
    let data = JSON.stringify(std);
    xhttp.open("POST", "../controller/editDonorController.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("donordata=" + data);
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        if (this.responseText == true) {
          alert("donor edited!");
        } else {
          alert(this.responseText);
        }
      }
    };
  }
}

function currencyConverter() {
  errorArray = [];
  let from = document.getElementById("from").value;
  let to = document.getElementById("to").value;
  let amount = document.getElementById("amount").value;

  if (from == "" || to == "" || amount == "") {
    errorArray.push("Error:empty field..!");
  }
  if (isNaN(amount) || amount % 1 !== 0) {
    errorArray.push("Error:amunt must be numerical..!");
  }

  if (errorArray.length > 0) {
    printError();
  } else {
    let xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../controller/currencyConverter.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(
      "fromCur=" + from + "&" + "toCur=" + to + "&" + "amount=" + amount
    );
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        alert(this.responseText);
      }
    };
  }
}

/////---------Rabiul-------/////
function createProject() {
  errorArray = [];
  let project_name = document.getElementById("name").value;
  let start_date = document.getElementById("start").value;
  let end_date = document.getElementById("end").value;
  let category = document.forms["project"]["category"].value;

  if (project_name.length < 5 || project_name.length > 15) {
    errorArray.push("Error: Name must be between 5 to 15 characters long.");
  }
  if (start_date === "") {
    errorArray.push("Error: Empty starting date!");
  }
  if (end_date === "") {
    errorArray.push("error:empty date");
  }
  if (!category) {
    errorArray.push("Error: Please select category");
  }
  
  if (errorArray.length > 0) {
    printError();
  }else{
  let xhttp = new XMLHttpRequest();
  let std = {
    name: project_name,
    start: start_date,
    end: end_date,
    category: category,
  };
  let data = JSON.stringify(std);
  xhttp.open("POST", "../controller/projectcheck.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("projectdata=" + data);
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      if (this.responseText == true) {
        alert("project created !");
      } else {
        alert(this.responseText);
      }
    }
  };
}
}

function createEvent() {
  errorArray = [];
  let resource_title = document.getElementById("resource_title").value;
  let thumbnail = document.getElementById("thumbnail").value;
  let description = document.getElementById("description").value;
  let category = document.forms["event"]["#category"].value;

  if (resource_title.length < 5 || resource_title.length > 15) {
    errorArray.push("Error: Name must be between 5 to 15 characters long.");
  }
  if (thumbnail === "") {
    errorArray.push("Error: please upload a file!");
  }
  if (description === "") {
    errorArray.push("error:please write a description");
  }
  if (!category) {
    errorArray.push("Error: Please select category");
  }
  printError();

  let xhttp = new XMLHttpRequest();
  let std = {
    resource_title: resource_title,
    thumbnail: thumbnail,
    descrioption: description,
    category: category,
  };
  let data = JSON.stringify(std);
  xhttp.open("POST", "../controller/_eventHosting.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("eventdata=" + data);
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      if (this.responseText == true) {
        alert("project created !");
      } else {
        alert(this.responseText);
      }
    }
  };
}
