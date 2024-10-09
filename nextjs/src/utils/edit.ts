// In the iframe (child) page
const sendMessageToParent = (message: string) => {
    if (window.parent) {
        window.parent.postMessage(message, '*');
    }
};

export default sendMessageToParent;