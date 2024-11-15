class TypingAnimation {
    /**
     * @param {HTMLElement} element
     * @param {Array} lines 
     * @param {int} sleepTime 
     */
    constructor(element, lines, sleepTime) {
        this.__element = element;
        this.__lines = lines;
        this.__lineIndex = 0;
        this.__currentText = "";
        this.__sleepTime = sleepTime;
    }
    start() {
        this.__writeLoop();
    }

    __sleep(ms) {
        return new Promise((resolve) => setTimeout(resolve, ms));
    }

    async __writeLoop() {
        while (true) {
            let curWord = this.__lines[this.__lineIndex];

            // Writing text line
            for (let i = 0; i < curWord.length; i++) {
                this.__currentText = curWord.substring(0, i + 1);
                this.__element.textContent = this.__currentText;

                await this.__sleep(this.__sleepTime);
            }
            // Wait few seconds to show this line
            await this.__sleep(this.__sleepTime * 10);

            // Clear text line
            for (let i = curWord.length; i > 0; i--) {
                this.__currentText = curWord.substring(0, i - 1);
                this.__element.textContent = this.__currentText;

                await this.__sleep(this.__sleepTime);
            }

            // Wait few seconds to start new while 
            await this.__sleep(this.__sleepTime * 5);

            if (this.__lineIndex == this.__lines.length - 1)
                this.__lineIndex = 0;
            else
                this.__lineIndex++;
        }
    }
}


async function writeLoop() {
    
}