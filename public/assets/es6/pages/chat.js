class Chat {

    static init() {

        const chartContent = '.chat-content'

        $('.chat-user-list .chat-list-item').on('click', () => {
            $(chartContent).addClass('open')
            $('.chat-list').addClass('d-none')
        })

        $('.chat-close').on('click', () => {
            $(chartContent).removeClass('open')
            $('.chat-list').removeClass('d-none d-sm-block')
        })
    }
}

$(() => { Chat.init(); });

