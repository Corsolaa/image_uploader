const image_input = document.querySelector(".image_input");
const image_demo = document.querySelector(".image_demo");

image_input.addEventListener("change", () => {
    image_demo.classList.remove("visible");
    setTimeout(() => {
        const [file] = image_input.files;
        if (file) {
            image_demo.src = URL.createObjectURL(file);
            setTimeout(() => {
                image_demo.classList.add("visible");
            }, 100);
        }
    }, 300);
});