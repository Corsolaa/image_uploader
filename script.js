const image_input = document.querySelector(".image_input");
const image_demo = document.querySelector(".image_demo");

image_input.addEventListener("change", () => {
   const [file] = image_input.files;
    if (file) {
        image_demo.src = URL.createObjectURL(file)
    }
});