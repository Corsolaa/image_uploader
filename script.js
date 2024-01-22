const queue = document.querySelector(".queue");
const image_input = document.querySelector(".image_input");
const remove_buttons = queue.querySelectorAll(".remove");

const returnHandlers = [
    done = "<i class=\"fa-solid fa-square-check\"></i>",
    error = "<i class=\"fa-solid fa-triangle-exclamation\"></i>"
]

image_input.addEventListener("change", addUpload);

function addUpload() {
    if (image_input.files.length < 1) {
        queue.classList.add("hidden");
        return;
    }

    Array.from(image_input.files).forEach((image_obj) => {
        const demo_obj = URL.createObjectURL(image_obj);
    });
}

function removeQueueItem() {

}