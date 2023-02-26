// scroll
const nav = document.querySelector("nav");
window.addEventListener("scroll", () => {
  if (window.scrollY) {
    nav.classList.add("bgcolor");
  } else {
    nav.classList.remove("bgcolor");
  }
});

// validasi form
function validateForm() {
  if (document.forms["formContact"]["name"].value == "") {
    alert("Nama Tidak Boleh Kosong");
    document.forms["formContact"]["name"].focus();
    return false;
  }
  if (document.forms["formContact"]["email"].value == "") {
    alert("Email Tidak Boleh Kosong");
    document.forms["formContact"]["email"].focus();
    return false;
  }
  if (document.forms["formContact"]["subject"].selectedIndex < 1) {
    alert("Subjact Tidak Boleh Kosong");
    document.forms["formContact"]["subject"].focus();
    return false;
  }
  if (document.forms["formContact"]["message"].selectedIndex < 1) {
    alert("Message Tidak Boleh Kosong");
    document.forms["formContact"]["message"].focus();
    return false;
  }
}
