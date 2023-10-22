const emojiElements = document.querySelectorAll('.emoji');
const emojiSelected = document.getElementById('emoji-selected');
const ratingSelect = document.getElementById('rating-select');
const backButton = document.getElementById('back-button');

emojiElements.forEach((emojiElement) => {
    emojiElement.addEventListener('click', () => {
        const selectedEmoji = emojiElement.textContent;
        emojiSelected.textContent = selectedEmoji;
        ratingSelect.style.display = 'block';
    });
});

backButton.addEventListener('click', () => {
    ratingSelect.style.display = 'none';
});