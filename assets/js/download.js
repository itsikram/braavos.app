document.addEventListener("DOMContentLoaded", () => {
    const button1 = document.getElementById("button1");
    const button2 = document.getElementById("button2");

    const browserContent = document.querySelector(".download-tabs__browser-content");
    const mobileContent = document.querySelector(".download-tabs__mobile-content");

    const activateButton = (activeButton, inactiveButton, showContent, hideContent) => {
        if (!activeButton.classList.contains("active")) {
            activeButton.classList.add("active");
            inactiveButton.classList.remove("active");

            // Показать или скрыть блоки контента
            showContent.style.display = "flex";
            hideContent.style.display = "none";
        }
    };

    button1.addEventListener("click", () => activateButton(button1, button2, browserContent, mobileContent));
    button2.addEventListener("click", () => activateButton(button2, button1, mobileContent, browserContent));
});
