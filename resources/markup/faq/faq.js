// faq__item-title-link
//
// faq__item-title-copy

const $faq = document.querySelector('.faq')

if ($faq) {
    faq($faq)
}

function faq($wrapper) {
    const url = document.location.origin
    const $links = $wrapper.querySelectorAll('.faq__item-title-link')
    const $texts = $wrapper.querySelectorAll('.faq__item-title-copy')

    $links.forEach(($link) => {
        $link.addEventListener('click', () => {
            linkClickHandler($link)
        })
    })

    $texts.forEach(($text) => {
        $text.addEventListener('click', () => {
            textClickHandler($text)
        })
    })

    function linkClickHandler($link) {
        const hash = $link.closest('.faq__item').id
        const link = `${url}/#${hash}`
        navigator.clipboard.writeText(link);
    }

    function textClickHandler($text) {
        const text = $text.closest('.faq__item').querySelector('.faq__item-answer').innerText
        navigator.clipboard.writeText(text);
    }
}
