document.getElementById('menu-btn').addEventListener('click', () => {
    console.log('hello')
    if (document.getElementById('menu-btn').classList.contains('fa-bars')) {
        document.getElementById('menu-btn').classList.remove('fa-bars')
        document.getElementById('menu-btn').classList.add('fa-close')
        document.getElementById('mobile-list').style.display = 'flex'
    } else {
        document.getElementById('menu-btn').classList.add('fa-bars')
        document.getElementById('menu-btn').classList.remove('fa-close')
        document.getElementById('mobile-list').style.display = 'none'
        
    }
})