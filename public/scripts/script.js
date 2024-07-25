window.onload = () => {

    activeGroup(".sidebar-option");
    simulateLoading();

}

function show(info, image) {

    if (window.matchMedia("(max-width: 768px)").matches) {

        return;

    } else {

        document.querySelector(info).classList.remove('d-none');
        document.querySelector(image).classList.add('d-none');

    }

}

function hide(info, image) {

    if (window.matchMedia("(max-width: 768px)").matches) {

        return;

    } else {


        document.querySelector(info).classList.add('d-none');
        document.querySelector(image).classList.remove('d-none');

    }

}

function toggle(selector) {

    document.querySelector(selector).classList.toggle('d-none')

}
function activeGroup(selector) {

    let elements = document.querySelectorAll(selector);
    elements.forEach(elem => {
        elem.addEventListener('click', () => {
            simulateLoading();
            elements.forEach(el => el.classList.remove('active'));
            elem.classList.add('active');
        });
    });

}

function simulateLoading(ms = 1500) {
    let body = document.getElementById("main-body");
    body.classList.add("loading");
    setTimeout(() => {
        body.classList.remove("loading");
    }, ms);
}
