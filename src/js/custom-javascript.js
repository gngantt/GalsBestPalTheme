// Add your JS customizations here
let readMore = document.getElementsByClassName('readMore')[0];

readMore.addEventListener('click', () => {
    let text = document.getElementsByClassName('text')[0];

    if (text.style.display === 'block') {
        text.style.display = '-webkit-box';
        readMore.innerHTML = 'Read more'
    } else {
        text.style.display = 'block';
        readMore.innerHTML = 'Read less'
    }
});