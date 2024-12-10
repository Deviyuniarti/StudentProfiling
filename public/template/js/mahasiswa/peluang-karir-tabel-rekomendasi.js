document.querySelectorAll(".like-container").forEach((item) => {
  item.addEventListener("click", function () {
    this.classList.toggle("active");
  });
});
