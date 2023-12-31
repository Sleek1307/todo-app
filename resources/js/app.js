const categoryToggler = document.querySelector("#category-toggler");
const categoryContainer = document.querySelector("#category-container");
const csrf_token = document.querySelector("meta[name=csrf-token]").content;

const toDoTasks = document.querySelector("#tasksPorHacer");
const doingTask = document.querySelector("#tasksHaciendo");
const doedTasks = document.querySelector("#tasksTerminado");
const tasks = document.querySelectorAll(".task");

const cards = document.querySelectorAll(".card");

const avatarUrl = document.querySelector("#avatar_url");
const avatarImg = document.querySelector("#avatar_img");

if (avatarUrl !== null) {
    avatarUrl.addEventListener("change", (e) => {
        var file = e.target.files[0];
        var lector = new FileReader();

        lector.onload = (e) => {
            avatarImg.src = lector.result;
        };

        if (file) {
            lector.readAsDataURL(file)
        }
    });
}

cards.forEach((card) => {
    const cardToggle = card.getElementsByClassName("card-toggle")[0];
    cardToggle.addEventListener("click", () => {
        const cardContent = card.getElementsByClassName("card-content")[0];

        cardContent.classList.toggle("card-active");
    });
});

//FUNCTION TO UPDATE A TASK WITH AJAX
const updateTask = (state, id) => {
    return fetch(`http://localhost:8000/api/tasks/update`, {
        headers: {
            "X-CSRF-TOKEN": csrf_token,
            "Content-Type": "application/json",
        },
        body: JSON.stringify({
            id: id,
            status: state,
        }),
        method: "post",
    });
};

//ALL THE EVENT LISTENERS TO MAKE THE DRAG AND DROP EFFECT
categoryToggler.addEventListener("click", () => {
    categoryContainer.classList.toggle("hidden");
});

if (tasks !== null) {
    tasks.forEach((task) => {
        task.addEventListener("dragstart", (e) => {
            e.dataTransfer.setData("text/plain", e.target.id);
        });
    });
}

if (toDoTasks !== null) {
    toDoTasks.addEventListener("dragover", (e) => {
        e.preventDefault();
    });

    toDoTasks.addEventListener("drop", (e) => {
        const id = e.dataTransfer.getData("text");

        updateTask(0, id)
            .then((response) => response.text())
            .then((data) => {
                toDoTasks.appendChild(document.getElementById(`${id}`));
                console.log(data);
            })
            .catch((error) => console.log(error));
    });
}

if (doingTask !== null) {
    doingTask.addEventListener("dragover", (e) => {
        e.preventDefault();
    });

    doingTask.addEventListener("drop", (e) => {
        const id = e.dataTransfer.getData("text");

        updateTask(1, id)
            .then((response) => response.text())
            .then((data) => {
                doingTask.appendChild(document.getElementById(`${id}`));
                console.log(data);
            })
            .catch((error) => console.log(error));
    });
}

if (doedTasks !== null) {
    doedTasks.addEventListener("dragover", (e) => {
        e.preventDefault();
    });

    doedTasks.addEventListener("drop", (e) => {
        const id = e.dataTransfer.getData("text");

        updateTask(2, id)
            .then((response) => response.text())
            .then((data) => {
                doedTasks.appendChild(document.getElementById(`${id}`));
                console.log(data);
            })
            .catch((error) => console.log(error));
    });
}
