const image_input = document.querySelector(".image_input");
const image_demo = document.querySelector(".image_demo");
let remember;

image_input.addEventListener("change", () => {
    if (image_input.files.length !== 0) {
        image_demo.classList.remove("visible");
    }
    setTimeout(() => {
        const [file] = image_input.files;
        remember = image_input.files;
        if (file) {
            image_demo.src = URL.createObjectURL(file);
            setTimeout(() => {
                image_demo.classList.add("visible");
            }, 100);
        }
    }, 300);
});