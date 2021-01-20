let content = document.getElementById("if_progect_modal_window")
  let show = document.getElementById("show_window")

  show.addEventListener("click", () => {
    if (content.style.display === "block") {
      content.style.display = "none"
    } else {
      content.style.display = "block"
    }
  })

  
  