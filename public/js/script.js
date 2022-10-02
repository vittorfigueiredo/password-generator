const labelPasswordGenerated = document.getElementById("lastPasswordGenerated");
const passwordGeneratedSaved = localStorage.getItem("passwordGenerated");

if (passwordGeneratedSaved) {
  labelPasswordGenerated.value = localStorage.getItem("passwordGenerated");
} else {
  labelPasswordGenerated.value = "...";
}

async function generateButtonClicked() {
  const lengthInputValue = document.getElementById("lengthInput").value;

  const body = new FormData();
  body.append("length", lengthInputValue);

  let passwordGenerated = await fetch("/src/Generator/PasswordGenerator.php", {
    method: "POST",
    body
  });
  passwordGenerated = await passwordGenerated.json();

  if (passwordGenerated.length > 0) {
    if (localStorage.getItem("passwordGenerated")) {
      localStorage.clear();
      localStorage.setItem("passwordGenerated", passwordGenerated);
      return location.reload();
    }

    localStorage.setItem("passwordGenerated", passwordGenerated);
    return location.reload();
  }
}
