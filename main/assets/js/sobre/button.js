const iconButton = document.getElementById('iconButton');
        const miniPage = document.getElementById('miniPage');
        const closeButton = document.getElementById('closeButton');
        const overlay = document.getElementById('overlay');

        function openMiniPage() {
            miniPage.classList.add('active');
            overlay.classList.add('active');
            iconButton.classList.add('active');
        }

        function closeMiniPage() {
            miniPage.classList.remove('active');
            overlay.classList.remove('active');
            iconButton.classList.remove('active');
        }

        iconButton.addEventListener('click', openMiniPage);
        closeButton.addEventListener('click', closeMiniPage);
        overlay.addEventListener('click', closeMiniPage);

        // Fechar com a tecla ESC
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && miniPage.classList.contains('active')) {
                closeMiniPage();
            }
        });