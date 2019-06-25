document.getElementById('form')
    .addEventListener('submit', function (e) {
    if(!window.confirm('submit?')){
        e.preventDefault();
    }
})
