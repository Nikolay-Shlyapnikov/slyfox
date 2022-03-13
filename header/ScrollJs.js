function Scroll(TargetScroll) {
    document.querySelector(`.${TargetScroll}`).scrollIntoView({ behavior: "smooth" });
}