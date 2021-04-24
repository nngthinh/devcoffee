/* 3. Burger's function*/
/* ============================================================================================= */
// Burger's effect
const navSlide = () => {
  const burger = document.querySelector('a[id="burger"]'); // burger
  const navbar = document.querySelectorAll('div[class="navbar"]')[1]; // nav
  navbarEntries = navbar.querySelectorAll("a"); // each entry

  // Animation effect for each entry in navbar
  const navLeft = navbar.querySelector(".navlinks-left");
  const navRight = navbar.querySelector(".navlinks-right");
  //var totalEntries = countChild(navLeft, "A") + countChild(navRight, "A");

  // Burger: add listener
  burger.addEventListener("click", () => {
    navbar.classList.toggle("bactive_nav"); // nav
    burger.classList.toggle("bactive_burger"); // burger
  });
};

// Count child's element(s) of a given node
function countChild(parent, children = "", getChildrensChildren = true) {
  var relevantChildren = 0;
  var childLength = parent.childNodes.length;
  for (var i = 0; i < childLength; i++) {
    if (parent.childNodes[i].nodeType != 3) {
      // node type != text
      if (children != "") {
        if (children == parent.childNodes[i].nodeName) relevantChildren++;
      } else {
        relevantChildren++;
      }
      if (getChildrensChildren) {
        relevantChildren += countChild(parent.childNodes[i], children);
      }
    }
  }
  return relevantChildren;
}

navSlide();
