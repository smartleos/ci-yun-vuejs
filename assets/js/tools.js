const esNotification = (
        type, title, message, cancel, confirm, cancelCallback, confirmCallback
    ) => {
    if (document.querySelector('.es-notification')) {return false}
    const div = document.createElement('div')
    if (type === 'notice') {
        div.innerHTML = `
            <div class="es-notification__inner">
                <svg class="pop__close" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18"><path d="M15.364 17.485 9 11.121l-6.364 6.364-2.121-2.121L6.879 9 .515 2.636 2.636.515 9 6.879 15.364.515l2.121 2.121L11.121 9l6.364 6.364-2.121 2.121Z" fill="currentColor"/></svg>
                <h2>${title}</h2>
                <p>${message}</p>
                <div class="es-notification__inner-btns">
                    <button class="confirm">
                        <span>${confirm}</span>
                    </button>
                </div>
            </div>
        `
        div.querySelector('.confirm').addEventListener('click', () => {
            div.querySelector('.es-notification__inner').classList.add('-out')
            setTimeout(() => {div.remove()}, 200)
            if (confirmCallback) {confirmCallback()}
        })
    } else {
        div.innerHTML = `
            <div class="es-notification__inner">
                <svg class="pop__close" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18"><path d="M15.364 17.485 9 11.121l-6.364 6.364-2.121-2.121L6.879 9 .515 2.636 2.636.515 9 6.879 15.364.515l2.121 2.121L11.121 9l6.364 6.364-2.121 2.121Z" fill="currentColor"/></svg>
                <h2>${title}</h2>
                <p>${message}</p>
                <div class="es-notification__inner-btns">
                    <button class="cancel">
                        <span>${cancel}</span>
                    </button>
                    <button class="confirm">
                        <span>${confirm}</span>
                    </button>
                </div>
            </div>
        `
        div.querySelector('.cancel').addEventListener('click', () => {
            div.querySelector('.es-notification__inner').classList.add('-out')
            setTimeout(() => {div.remove()}, 200)
            if (cancelCallback) {cancelCallback()}
        })

        div.querySelector('.confirm').addEventListener('click', () => {
            div.querySelector('.es-notification__inner').classList.add('-out')
            setTimeout(() => {div.remove()}, 200)
            if (confirmCallback) {confirmCallback()}
        })
    }

    div.querySelector('.pop__close').addEventListener('click', () => {
        div.querySelector('.es-notification__inner').classList.add('-out')
        setTimeout(() => {div.remove()}, 200)
    })
    
    div.classList.add('es-notification')
    div.classList.add(`-${type}`)
    document.body.appendChild(div)
}

const esShareTo = (url, socialMedia) => {
let shareUrl
switch (socialMedia) {
    case 'Facebook' :
        shareUrl = 'https://facebook.com/sharer.php?u=' + url
        break
    case 'Line' :
        shareUrl = 'https://social-plugins.line.me/lineit/share?url=' + url + '&amp;via=esdesign'
        break
    case 'Twitter' :
        shareUrl = 'https://twitter.com/intent/tweet?url=' + url + '&amp;via=esdesign'
}
window.open(
    shareUrl, 
    'shareWindow',
    'menubar=0,location=0,toolbar=0,status=0,scrollbars=1,width=800,height=600'
)
}