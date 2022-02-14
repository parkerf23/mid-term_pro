function checkSignInfo() {
    let namString = document.getElementById("fnInput").value;
    let namString2 = document.getElementById("lnInput").value;
    let emString = document.getElementById("emInput").value;
    let passWord = document.getElementById("psInput").value;

    let pattern = /[0-9]/
    let result = namString.match(pattern)
    let result2 = namString2.match(pattern)

    let emilPat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
    let result3 = emString.match(emilPat)

    let passPat = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/
    let result4 = passWord.match(passPat)

    let noInfo = document.forms["enForm"]["fName"].value;
    let noInfo2 = document.forms["enForm"]["lName"].value;
    let noInfo3 = document.forms["enForm"]["eMail"].value;
    let noInfo4 = document.forms["enForm"]["psWord"].value;
    let noInfo5 = document.forms["enForm"]["colLege"].value;
    let noInfo6 = document.forms["enForm"]["maJor"].value;


    if (noInfo=== "" || noInfo2 === "" || noInfo3 === "" || noInfo4 === "" || noInfo5 === "" || noInfo6 === "") {
        alert("Populate all fields!");
    } else if (result || result2) {
        alert("First and Last name cannot contain numbers!");
    } else if (!result3) {
        alert("Invalid email!");
        return false;
    } else if (!result4) {
        alert("Invalid password!");
        return false;
    } else {
        // This is where php will push validated user into txt file to be stored!
        alert("All fields populated, Welcome in!");
    }
}

function revealPass() {
    let x = document.getElementById("psInput");

    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function clearForm() {
    document.getElementById("unDo").reset();
}