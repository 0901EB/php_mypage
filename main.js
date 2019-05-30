function addTask() {
    var today = new Date();
    var time = today.getHours() + ":" + today.getMinutes();
    var inputField = $('#message-input');
    var userName = $('#user-name');
    var liElement = '<li>' + '<div style="background-color:#BFDEFF">' + '<b>' + userName.val() + '</b> ' + time + '  : ' + inputField.val() + '</div>' + '</li>' + '<br>';
    $('#task-list').append(liElement);
    inputField.val('');
    inputField.focus();
    var chatHistory = document.getElementById("chatBox");
    chatHistory.scrollTop = chatHistory.scrollHeight
}

$('#add-task').click(function () {
        addTask();
});

$('#message-input').keypress(function (event) {
    if (event.which == 13) {
        addTask();
    }
});

$('#submit-btn').click(function () {
    alert('button clicked');
});