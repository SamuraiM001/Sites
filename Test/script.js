const tweets = [];

function renderTweets() {
    const tweetsContainer = document.getElementById('tweets-container');
    tweetsContainer.innerHTML = '';
    for (let i = tweets.length - 1; i >= 0; i--) {
        const tweet = tweets[i];
        const tweetElem = document.createElement('div');
        tweetElem.classList.add('tweet');

        const usernameElem = document.createElement('div');
        usernameElem.classList.add('tweet__username');
        usernameElem.innerText = tweet.username;

        const textElem = document.createElement('div');
        textElem.classList.add('tweet__text');
        textElem.innerText = tweet.text;

        const likesElem = document.createElement('div');
        likesElem.classList.add('tweet__likes');
        likesElem.innerText = `${tweet.likes} likes`;

        const likeIcon = document.createElement('i');
        likeIcon.classList.add('tweet__likes-icon', 'tweet__icon');
        if (tweet.liked) {
            likeIcon.classList.add('tweet__liked-icon');
        }
        likeIcon.addEventListener('click', () => {
            if (!tweet.liked) {
                tweet.likes++;
                tweet.liked = true;
                likeIcon.classList.add('tweet__liked-icon');
                likesElem.innerText = `${tweet.likes} likes`;
            }
        });

        const deleteIcon = document.createElement('i');
        deleteIcon.classList.add('tweet__delete-icon', 'tweet__icon');
        deleteIcon.addEventListener('click', () => {
            const index = tweets.indexOf(tweet);
            if (index > -1) {
                tweets.splice(index, 1);
                renderTweets();
            }
        });

        const iconsElem = document.createElement('span');
        iconsElem.classList.add('tweet__icons');
        iconsElem.appendChild(likeIcon);
        iconsElem.appendChild(deleteIcon);

        tweetElem.appendChild(usernameElem);
        tweetElem.appendChild(textElem);
        tweetElem.appendChild(likesElem);
        tweetElem.appendChild(iconsElem);
        tweetsContainer.appendChild(tweetElem);
    }
}

function addTweet(event) {
    event.preventDefault();
    const usernameInput = document.getElementById('username-input');
    const textInput = document.getElementById('text-input');
    const username = usernameInput.value;
    const text = textInput.value;
    if (username && text) {
        const tweet = {
            username: username,
            text: text,
            likes: 0,
            liked: false,
        };
        tweets.push(tweet);
        usernameInput.value = '';
        textInput.value = '';
        renderTweets();
    }
}

const form = document.getElementById('tweet-form');
form.addEventListener('submit', addTweet);

renderTweets();
