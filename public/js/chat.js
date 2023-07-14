document.addEventListener("DOMContentLoaded", function(e) {
    // handel click friend
    document.querySelectorAll(".friends").forEach(function(el) {
        el.addEventListener("click", function() {
            let id = el.getAttribute("data-id");
            let name = el.getAttribute("data-name");
            // set chat room properties
            document.querySelector(".friend-name").innerHTML = name;
            createRoom(id);
        });
    });
});


/*
    handel send message function
 */
function sendMessage(message, roomId) {
    let url = document.getElementById("message-url").value;
    let formData = new FormData();
    formData.append("roomid", roomId);
    formData.append("message", message);

    axios.post(url, formData).then(function(res) {
        let html = ' <div id="your-chat" class="your-chat">\n' +
            '                <p class="your-chat-balloon">' + message + '</p>\n' +
            '            </div>';

        var chatBody = document.querySelector("#chat-area");
        chatBody.insertAdjacentHTML("beforeend", html);
        chatBody.scrollTo({ left: 0, top: chatBody.scrollHeight, behavior: "smooth" });
    });
}

/*
    handel to left message from friend
 */
function handelLeftMessage(message, avatar) {

    let html = '<div class="friends-chat">\n' +
        '                <div class="friends-chat-content">\n' +
        '                    <p class="friends-chat-name">' + message + '</p>\n' +
        '                </div>\n' +
        '            </div>';

    var chatBody = document.querySelector("#chat-area");
    chatBody.insertAdjacentHTML("beforeend", html);
    chatBody.scrollTo({ left: 0, top: chatBody.scrollHeight, behavior: "smooth" });
}

/*
    handel show hide chatbox
 */
function showHideChatBox(show) {
    if (show == true) {
        document.getElementById("main-right").classList.remove("hidden")
        document.getElementById("main-empty").classList.add("hidden")
    } else {
        document.getElementById("main-right").classList.add("hidden")
        document.getElementById("main-empty").classList.remove("hidden")
    }
}

function createRoom(friendId) {
    let url = document.getElementById("room-url").value;
    let formData = new FormData();
    formData.append("friend_id", friendId);

    axios
        .post(url, formData)
        .then(function(res) {

            if (res.data && res.data.room && res.data.room.id) {
                let room = res.data.room;

                Echo.join(`chat.${room.id}`)
                    .here((users) => {
                        console.log("join chanel chat success");

                        document.querySelector("#type-area").addEventListener("keydown", function(e) {
                            if (e.key === 'Enter') {
                                let input = this.value;
                                if (input !== "") {
                                    sendMessage(input, room.id)

                                    this.value = "";
                                }
                            }
                        });
                    })
                    .listen("SendMessage", (e) => {
                        console.log(e.userId);
                    })
                    .joining((user) => {
                        if (user.userId == friendId) {
                            handleLeftMessage(user.message)
                        }
                        // console.log(user.name);
                    })
                    .leaving((user) => {
                        console.log(user.name);
                    })
                    .error((error) => {
                        console.error(error);
                    });
                showHideChatBox(true);
            } else {
                console.error("Invalid room data");
            }
        })
        .catch(function(error) {
            console.error(error);
        });
}