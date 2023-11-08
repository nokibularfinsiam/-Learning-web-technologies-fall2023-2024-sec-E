
    function validateTextbox() {
      let name = document.getElementById('name').value;

      if (name === "") {
        document.getElementById('h1').innerHTML = "Name cannot be empty.";
        return false;
      }

      if (name.split(' ').length < 2) {
        document.getElementById('h1').innerHTML = "Name should contain at least two words.";
        return false;
      }

      if (!/^[a-zA-Z][a-zA-Z.\- ]*$/.test(name)) {
        document.getElementById('h1').innerHTML = "Name should only contain letters, dots, or dashes.";
        return false;
      }

      if (!/^[a-zA-Z]/.test(name)) {
        document.getElementById('h1').innerHTML = "Name must start with a letter.";
        return false;
      }
    }

