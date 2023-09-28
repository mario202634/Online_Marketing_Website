function validateLogin() {
    var x = document.forms["loginForm"]["uname"].value;
  if (x == "")
  {
    alert("Username must be filled out");
    return false;
  }
  else if (x.length < 5)
  {
    alert("Username must be at least than 6 characters");
  }
    var x = document.forms["loginForm"]["pwd"].value;
  if (x == "")
  {
    alert("Password must be filled out");
    return false;
  }
  else if(x.length < 7)
  {
      alert("Password must be at least 8 characters");
      return false;
  }
}