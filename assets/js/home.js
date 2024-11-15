const lines = [
    "Web Developer",
    "Programmer",
    "Frontend Developer"
]
let typingElement = document.getElementById('typing');
let typingAnimation = new TypingAnimation(typingElement, lines, 100);
typingAnimation.start();