const image_input = document.querySelector(".image_input");
const image_label = document.querySelector(".image_label");
const image_demo = document.querySelector(".image_demo");

image_label.addEventListener("click", () => {
    image_demo.classList.remove("expand");
});

image_input.addEventListener("change", () => {
   const [file] = image_input.files;
    if (file) {
        image_demo.src = URL.createObjectURL(file);
        setTimeout(() => {
            image_demo.classList.add("expand");
        }, 500);
    }
});