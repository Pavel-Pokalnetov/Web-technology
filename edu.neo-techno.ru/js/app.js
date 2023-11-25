
function send() {
    let username = document.getElementById("username").value
    let message = document.getElementById("message").value
    document.getElementById("message").value = ""

    if (username == '') {
        document.getElementById("error").innerText = 'Ошибка, введите свое имя.'
        return
    }

    if (message == '') {
        document.getElementById("error").innerText = 'Ошибка, введите сообщение.'
        return
    }

    document.getElementById("error").innerText = ''
    document.getElementById("output").
        prepend(getPersonalMessageBlock(username, message, true))
}


function getPersonalMessageBlock(username, message, marginLeft) {
    //marginLeft==true - притягивает сообщение к левому краю поля чата

    let messageBlock = document.createElement("div")

    if (marginLeft) {
        messageBlock.className = "out-message-block left"
    } else {
        messageBlock.className = "out-message-block right"
    }
    let dateBlock = document.createElement("small")
    dateBlock.innerText = getData()
    messageBlock.append(dateBlock)


    let nameBlock = document.createElement("p")
    nameBlock.className = "out-username"
    nameBlock.innerText = username
    messageBlock.append(nameBlock)

    let textBlock = document.createElement("p")
    textBlock.className = "out-message"
    textBlock.innerText = message
    messageBlock.append(textBlock)

    return (messageBlock)
}

function getData() {
    now = new Date().toLocaleString();
    return (now)
}

function keycheck(e) { //отпрака по Ctrl+Enter
    if (e.ctrlKey && e.keyCode == 13) {
        send();
    }
};
