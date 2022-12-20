function checksem() {
  let inputvalue = document.getElementById("semester").value;
  valueint = parseInt(inputvalue);
  if (valueint < 1 || valueint > 8)
    window.alert("Semester should be between 1 and 8");
  else enableSubmit();
}

function hiddenelements() {
  let batsman = document.getElementById("batsman");
  if (batsman.checked) {
    document.getElementById("bat").style.display = "block";
    document.getElementById("bowl").style.display = "none";
  } else {
    document.getElementById("bowl").style.display = "block";
    document.getElementById("bat").style.display = "none";
  }
}

function enableSubmit() {
  let inputs = document.getElementsByClassName("required");
  let btn = document.getElementById("btn-submit");
  let isValid = true;

  for (var i = 0; i < inputs.length; i++) {
    let changedInput = inputs[i];
    if (changedInput.value.trim() === "" || changedInput.value === null) {
      isValid = false;
      break;
    }
  }
  let sem = document.getElementById("semester").value;
  if (sem > 8 || sem < 1) isValid = false;
  let branchValid = true;
  if (document.getElementById("branch").value === "selectitem")
    branchValid = false;
  isValid = isValid && branchValid;
  let hander = document.getElementsByName("bathand");
  let handerValid = false;
  for (let i = 0; i < hander.length; i++) {
    if (hander[i].checked) handerValid = true;
  }
  isValid = isValid && handerValid;

  let bat = document.getElementsByName("battype");
  let batValid = false;
  for (let i = 0; i < bat.length; i++) {
    if (bat[i].checked) batValid = true;
  }
  let bowlvalid = true;
  if (document.getElementById("bowltype").value === "selectitem")
    bowlvalid = false;

  let typeValid = batValid || bowlvalid;
  isValid = isValid && typeValid;
  btn.disabled = !isValid;
}

function toRegisterPage() {
  window.location.href = "index.html";
}

function toContact() {
  window.location.href = "contact.html";
}
